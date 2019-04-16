<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarriageRequest;
use App\Http\Requests\TrainRequest;
use App\Http\Requests\TripRequest;
use App\Models\City;
use App\Services\Carriages;
use App\Services\Trains;
use App\Services\Trips;
use \Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * BookingController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $cities = City::pluck('name', 'id')->toArray();

        return view('home', ['cities' => $cities]);
    }

    public function getAllRoutes(TripRequest $tripRequest, Trips $trips): View
    {
        if ($tripRequest->ajax()) {
            if ($tripRequest->get('pointOfDeparture') === $tripRequest->get('pointOfArrival')) {
                $routes = [];
            } else {
                $stationsPointOfDeparture = $trips->getStationsForCity($tripRequest->get('pointOfDeparture'));
                $stationsPointOfArrival = $trips->getStationsForCity($tripRequest->get('pointOfArrival'));
                $routes = $trips->getAllRoutes($stationsPointOfDeparture, $stationsPointOfArrival);
            }

            $tripsByRoutes = $trips->getTrips($routes, $tripRequest->get('date'));

            return view('booking.trips', [
                'routes' => $tripsByRoutes,
                'types' => $trips->getTypes($tripsByRoutes)
            ]);
        }

        return view('errors.403');
    }

    public function getCarriagesByTrain(TrainRequest $trainRequest, Trains $trains): View
    {
        if ($trainRequest->ajax()) {
            return view('booking/carriages', [
                'carriages' => $trains->getCarriagesByTrain(
                    $trainRequest->get('trainId', 1),
                    $trainRequest->get('typeId', 1)
                ),
                'tripId' => $trainRequest->get('trainId'),
                'trainId' => $trainRequest->get('typeId')
            ]);
        }

        return view('errors.403');
    }

    public function getPlacesByCarriage(CarriageRequest $carriageRequest, Carriages $carriages): View
    {
        if ($carriageRequest->ajax()) {
            $carriageType = $carriages->getType($carriageRequest->get('carriageId'));
            $places = $carriages->getPlacesBooking(
                $carriageRequest->get('carriageId'),
                $carriageRequest->get('trainId')
            );

            switch ($carriageType) {
                case 'Плацкарт':
                    return view('booking/carriage', [
                        'rows' => 3,
                        'cols' => 18,
                        'height' => 40,
                        'places' => $places
                    ]);
                    break;
                case 'Купе':
                    return view('booking/carriage', [
                        'rows' => 2,
                        'cols' => 18,
                        'height' => 40,
                        'places' => $places
                    ]);
                    break;
                case 'Люкс':
                    return view('booking/carriage', [
                        'rows' => 1,
                        'cols' => 18,
                        'height' => 70,
                        'places' => $places
                    ]);
                    break;
                default:
                    return view('errors.403');
            }
        } else {
            return view('errors.403');
        }
    }

    public function showPlaceForm()
    {
        $train = 1;
        $carriage = 3;
        $place = [1, 2, 4, 5];

        return view('booking.place', [
            'train' => $train,
            'carriage' => $carriage,
            'place' => $place
        ]);
    }
}
