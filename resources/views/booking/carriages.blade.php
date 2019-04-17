<div class="shadow p-3 bg-white rounded">
    <div class="row">
        <div class="col">
            <p>Выберите вагон:</p>
            <input id="trainId" type="text" value="{{ $tripId }}" hidden>
            <input id="trainId" type="text" value="{{ $trainId }}" hidden>
        </div>
    </div>
    <div class="row mb-4">
        @foreach($carriages as $carriage)
            <div class="col-1">
                <button id="train{{ $carriage->id }}" class="btn btn-dark btn-sm" style="width: 75px"
                        onclick="selectCarriage({{ $carriage->id }}); formingArrayCarriagesPlaces('carriage', {{ $carriage->id }})"
                        value="{{ $carriage->id }}">{{ $carriage->id }}</button>
            </div>
        @endforeach
    </div>
    <div id="requestPlaces"></div>
</div>
