function selectCarriage(id) {
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