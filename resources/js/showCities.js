$(document).ready(function () {
    $('#pointOfDeparture').val(1).trigger('change');
    $('#pointOfArrival').val(2).trigger('change');

    $('#pointOfDeparture').select2({
        placeholder: "Откуда?",
        allowClear: true
    });
    $('#pointOfArrival').select2({
        placeholder: "Куда?",
        allowClear: true
    });
});

function addCityInSelect(id, city) {
    $('#' + id).val(city).trigger('change');
}