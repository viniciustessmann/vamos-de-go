$(document).ready(function() {
    $('.js-datepicker').datetimepicker({
        format: 'DD/MM/YYYY HH:mm',
        locale: moment.locale('pt-br')
    });
});