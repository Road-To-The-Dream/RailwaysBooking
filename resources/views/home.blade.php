@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p class="main-title">Купить жд билеты</p>
                </div>
            </div>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="form-group row">
                    <div class="col error-pointOfDeparture">
                        <select id="pointOfDeparture" class="form-control">
                            <option value="" disabled selected></option>
                            @foreach($cities as $key => $city)
                                <option value="{{ $key }}">{{ $city }}</option>
                            @endforeach
                        </select>

                        <div id="linksCities">
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfDeparture', 1);return false;">Харьков</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfDeparture', 2);return false;">Киев</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfDeparture', 3);return false;">Кривой Рог</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfDeparture', 4);return false;">Львов</a>
                        </div>
                    </div>
                    <div class="col-1 ml-4">
                        <img src="img/arrow.png" alt="image">
                    </div>
                    <div class="col error-pointOfArrival">
                        <select id="pointOfArrival" class="form-control">
                            <option value="" disabled selected></option>
                            @foreach($cities as $key => $city)
                                <option value="{{ $key }}">{{ $city }}</option>
                            @endforeach
                        </select>
                        <div id="linksCities">
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfArrival', 1);return false;">Харьков</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfArrival', 2);return false;">Киев</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfArrival', 3);return false;">Кривой Рог</a>
                            <a class="mr-1" href="#" onclick="addCityInSelect('pointOfArrival', 4);return false;">Львов</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col error-date">
                        <input class="form-control" id="datetime" value="{{ old('date') }}" placeholder="Дата" required>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3 offset-md-4">
                        <div class="row">
                            <div class="col offset-md-4">
                                <button type="button" class="btn btn-success" id="getRequest">
                                    {{ __('Найти билет') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Request"></div>
        </div>
    </div>
@endsection