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
    let delay = 10;
    $.ajax({
        type: 'POST',
        url: 'routes',
        data: {
            pointOfDeparture: $('#pointOfDeparture').val(),
            pointOfArrival: $('#pointOfArrival').val(),
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
            let errors = [];
            for (let item in response['responseJSON']['errors']) {
                let error = response['responseJSON']['errors'][item];
                errors.push(item, error);
            }

            for (let i = 2; i <= errors.length; i = i + 2) {
                $('.error-' + errors[i - 2]).append('<div class="text-danger ml-1 mt-1" style="font-size: 14px;">' + errors[i - 1][0] + '</div>');
            }
        }
    });
}