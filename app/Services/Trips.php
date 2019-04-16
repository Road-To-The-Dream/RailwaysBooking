<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\City;
use App\Models\Station;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

/**
 * Class Trips
 * @package App\Services
 */
class Trips
{
    public function getStationsForCity(int $cityId): array
    {
        return City::find($cityId)->stations->pluck('id')->toArray();
    }

    public function getAllRoutes(array $stationsPointOfDeparture, array $stationsPointOfArrival): array
    {
        $routesPointOfDeparture = $this->getRoutesForCity($stationsPointOfDeparture);

        $routesPointOfArrival = $this->getRoutesForCity($stationsPointOfArrival);

        $generalRoutes = [];
        foreach ($routesPointOfDeparture as $routePointOfDeparture) {
            foreach ($routesPointOfArrival as $routePointOfArrival) {
                if ($routePointOfDeparture['route'] === $routePointOfArrival['route'] &&
                    $routePointOfDeparture['order'] < $routePointOfArrival['order']) {
                    $generalRoutes[] = $routePointOfDeparture;
                }
            }
        }

        return $generalRoutes;
    }

    public function getTrips(array $routesId, $date): Collection
    {
        return DB::table('trains')
            ->join('trips', 'trips.train_id', '=', 'trains.id')
            ->select(
                'trips.id',
                DB::raw("trains.id as trainId"),
                DB::raw("trains.name as trainName"),
                'trips.time_start',
                'trips.time_finish')
            ->where('trips.time_start', '>', $date)
            ->whereIn('trips.route_id', $routesId)
            ->get();
    }

    public function getTypes(Collection $trips): array
    {
        $trains = [];
        foreach ($trips as $trip) {
            $trains[] = $trip->trainId;
        }

        $types = DB::table('types')
            ->join('carriages', 'carriages.type_id', '=', 'types.id')
            ->join('carriages_trains', 'carriages_trains.carriage_id', '=', 'carriages.id')
            ->join('trains', 'carriages_trains.train_id', '=', 'trains.id')
            ->select(
                'types.id',
                DB::raw("trains.id as trainId"),
                'types.name',
                DB::raw("SUM(types.places_amount) as places_amount"))
            ->whereIn('train_id', $trains)
            ->groupBy('trains.id', 'types.id')
            ->get();

        $iteration = 0;
        $carriagesType = [];
        foreach ($trains as $train) {
            foreach ($types as $type) {
                if ($train === $type->trainId) {
                    $carriagesType[$iteration][] = $type;
                }
            }
            $iteration++;
        }

        return $carriagesType;
    }

    private function getRoutesForCity(array $cityStations): array
    {
        $routes = Station::whereIn('id', $cityStations)->with(array('routes'=>function($query){
            $query->select('route_id','order');
        }))->get();

        $relations = [];
        foreach ($routes as $relation) {
            $relations[] = $relation->routes;
        }

        $routesIdOrderId = [];
        $iteration = 0;
        foreach ($relations as $routes) {
            foreach ($routes as $route) {
                $routesIdOrderId[$iteration]['route'] = $route->route_id;
                $routesIdOrderId[$iteration]['order'] = $route->order;
                $iteration++;
            }
        }

        return $routesIdOrderId;
    }
}
