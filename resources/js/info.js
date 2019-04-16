let places = {};
let carriage;

function formingArrayCarriagesPlaces(type, value) {
    if (type === 'carriage') {
        carriage = value;
    }

    if (type === 'place') {
        if (places.hasOwnProperty(carriage)) {
            places[carriage].push(value);
        } else {
            if (places.some(carriage => o.objectId === data.objectId)) {
                places[carriage] = [];
            }
        }
    }

    console.log(places);

    if (type === 'button') {
        showPlace(carriages, places);
    }
}

function showPlace(carriages, places) {
    let delay = 10;
    $.ajax({
        type: 'POST',
        url: 'place-form',
        /*data: {
            tripId: tripId,
            trainId: trainId,
            typeId: typeId
        },*/
        dataType: 'html',
        beforeSend: function () {
            $("div#Request").empty();
            $('#Request').append('<div class="d-flex justify-content-center mt-3">\n' +
                '  <div class="spinner-border" role="status">\n' +
                '    <span class="sr-only">Loading...</span>\n' +
                '  </div><p class="mt-1 ml-3">Формирование поезда . . .</p>\n' +
                '</div>');
        },
        success: function (response) {
            setTimeout(function () {
                $("div#Request").empty();
                $('#Request').append(response);
            }, delay);
        }
    });
}
