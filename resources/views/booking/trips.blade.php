@if(count($routes) === 0)
    <div class="shadow p-3 mb-5 bg-white rounded mt-5">
        <div class="row border border-light">
            <div class="col text-center">
                <p class="mt-3">Маршрутов не найдено !</p>
            </div>
        </div>
    </div>
@else
    @foreach($routes as $route)
        <div class="card mt-3">
            <div class="card-body">
                <div class="shadow p-3 bg-white rounded">
                    <div class="row border border-light">
                        <div class="col-3">
                            <div class="border border-secondary p-2">
                                <div class="row">
                                    <div class="col text-center">{{ $route->trainName }}</div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <img src="img/train.jpg" width="100%" alt="train">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">{{ $route->time_start }}</div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">{{ $route->time_start }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col">
                                    <div class="border border-secondary p-3">
                                        <div class="row justify-content-between">
                                            <div class="col-12">
                                                @foreach($types as $type)
                                                    @foreach($type as $currentType)
                                                        @if($route->trainId === $currentType->trainId)
                                                            <div class="shadow p-3 mb-2 bg-white rounded">
                                                                <div class="row mb-2">
                                                                    <div class="col-3 mt-2">{{ $currentType->name }}:
                                                                    </div>
                                                                    <div class="col-4 mt-2 ml-2">свободно <span
                                                                                class="text-danger ml-2 mr-2">{{ $currentType->places_amount }}</span>места
                                                                    </div>
                                                                    <div class="col-4 ml-5 text-right">
                                                                        <button type="button" class="btn btn-success"
                                                                                id="select"
                                                                                onclick="showTrain('{{ $route->id }}', '{{ $route->trainId }}', '{{ $currentType->id }}')">
                                                                            Выбрать
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
