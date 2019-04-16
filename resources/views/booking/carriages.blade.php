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
                        onclick="clickCarriage({{ $carriage->id }}); formingArrayCarriagesPlaces('carriage', {{ $carriage->id }})" value="{{ $carriage->id }}">{{ $carriage->id }}</button>
            </div>
        @endforeach
    </div>
    <div id="requestPlaces"></div>
</div>

<script>
    function clickCarriage(id) {
        var delay = 10;
        $.ajax({
            type: 'POST',
            url: 'carriage',
            data: {
                trainId: $('#trainId').val(),
                carriageId: id
            },
            dataType: 'html',
            beforeSend: function () {
                $("div#requestPlaces").empty();
                $('#requestPlaces').append('<div class="d-flex justify-content-center mt-3">\n' +
                    '  <div class="spinner-border" role="status">\n' +
                    '    <span class="sr-only">Loading...</span>\n' +
                    '  </div><p class="mt-1 ml-3">Поиск мест . . .</p>\n' +
                    '</div>');
            },
            success: function (response) {
                setTimeout(function () {
                    $("div#requestPlaces").empty();
                    $('#requestPlaces').append(response);
                }, delay);
            }
        });
    }
</script>
