function showTrain(tripId, trainId, typeId) {
    var delay = 10;
    $.ajax({
        type: 'POST',
        url: 'train',
        data: {
            tripId: tripId,
            trainId: trainId,
            typeId: typeId
        },
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