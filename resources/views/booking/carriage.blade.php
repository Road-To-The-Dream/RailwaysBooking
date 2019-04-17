<div id="placesBlock">
    <div class="border border-secondary mt-4">
        <div class="row">
            <div class="col text-center">
                <ul id="places" class="ml-0 p-2 mb-0"></ul>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-4 text-left">
        <img class="mr-2 mb-1" src="img/available.jpg" width="20" height="20" alt="img">Свободное место
    </div>
    <div class="col-4 text-center">
        <img class="mr-2 mb-1" src="img/booked.jpg" width="20" height="20" alt="img">Занятое место
    </div>
    <div class="col-4 text-right">
        <img class="mr-2 mb-1" src="img/selected.jpg" width="20" height="20" alt="img">Выбранное место
    </div>
</div>
<div class="row mt-3">
    <div class="col-5">
        Чётные номера — верхние места
    </div>
</div>
<div class="row mt-2">
    <div class="col-5">
        Нечётные номера — нижние места
    </div>
</div>
<div class="row mt-5">
    <div class="col text-right">
        <a href="#" onclick="getTrips()"><- Назад к выбору маршрута</a>
        <button type="button" class="btn btn-success ml-3" id="getRequest" onclick="formingArrayCarriagesPlaces('button')">
            {{ __('Выбрать место') }}
        </button>
    </div>
</div>
<script>
    $(document).ready(function () {
        let settings = {
            rows: '{{ $rows }}',
            cols: '{{ $cols }}',
            height: '{{ $height }}',
            placesBooking: JSON.parse('{{ $places }}')
        };

        for (i = 1; i <= settings.rows; i++) {
            $('#places').append('<li><button type="button" class="btn btn-secondary mr-2" style="height: 40px" disabled></button></li>');
            place = (i - 1) * settings.cols;
            for (j = 0; j < settings.cols; j++) {
                $('#places').append('<li><button id="btn' + (place + j + 1)
                    + '" class="btn btn-info ml-2 place" style="height:'
                    + settings.height + 'px" value="' + (place + j + 1) + '" onclick="clickPlace(' + (place + j + 1) + '); formingArrayCarriagesPlaces(\'place\', ' + (place + j + 1) +')">'
                    + (place + j + 1) + '</button></li>');
            }
            $('#places').append('<li><button type="button" class="btn btn-secondary ml-3" style="height: 40px" disabled></button></li>');

            $('#places').append('<div class="row mt-1">\n' +
                '    <div class="col-12"></div>\n' +
                '</div>');
            if (i === 2) {
                $('#places').append('<div class="row mt-3">\n' +
                    '    <div class="col-12"></div>\n' +
                    '</div>');
            }
        }

        for (i = 0; i < settings.placesBooking.length; i++) {
            $('#btn' + settings.placesBooking[i]).removeClass('btn-info').addClass('btn-secondary');
            $('#btn' + settings.placesBooking[i]).prop('disabled', true);
        }
    });

    function clickPlace(id) {
        if ($('#btn' + id).hasClass('btn-info')) {
            $('#btn' + id).removeClass('btn-info').addClass('btn-success');
        } else {
            if ($('#btn' + id).hasClass('btn-success')) {
                $('#btn' + id).removeClass('btn-success').addClass('btn-info');
            }
        }
    }
</script>

