$(document).ready(function () {
    $('#getRequest').click(function () {
        getTrips();
    });
});

function getTrips() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var delay = 10;
    $.ajax({
        type: 'POST',
        url: 'routes',
        data: {
            pointOfDeparture: $('#cities1').val(),
            pointOfArrival: $('#cities2').val(),
            date: $('#datetime').val()
        },
        beforeSend: function () {
            $("div#Request").empty();
            $('#Request').append('<div class="d-flex justify-content-center mt-3">\n' +
                '  <div class="spinner-border" role="status">\n' +
                '    <span class="sr-only">Loading...</span>\n' +
                '  </div><p class="mt-1 ml-3">Поиск маршрутов . . .</p>\n' +
                '</div>');

        },
        success: function (response) {
            $('.text-danger').remove();
            setTimeout(function () {
                $("div#Request").empty();
                $('#Request').append(response);
            }, delay);
        },
        error: function (response) {
            $("div#Request").empty();
            $('div.text-danger').remove();
            var errors = [];
            for(var item in response['responseJSON']['errors']) {
                var error = response['responseJSON']['errors'][item];
                errors.push(item, error);
            }

            for (i = 2; i <= errors.length; i = i + 2) {
                $('.error-' + errors[i - 2]).append('<div class="text-danger">' + errors[i - 1][0] + '</div>');
            }
        }
    });
}