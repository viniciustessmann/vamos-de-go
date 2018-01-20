/**
 * Used to get all cities based on a state. Is triggered when the
 * user selects something on the state select box. The city results
 * will be loaded based on the chosen city.
 *
 * TODO: Refactor to support ES6+.
 */
$(document).ready(function(){
    var $citySelector = $('.possible-select-city');
    var $stateSelector = $('.possible-select-state');
    var $getCitiesUrl = $('.possible-url-get-cities');
    var urlGetCitiesJson = $('.get_list_state_json').val();

    var stateId = $stateSelector.val();
    var cityId = $citySelector.val();
    var getCitiesUrl = $getCitiesUrl.val();

    if (stateId != '' && cityId != '') {
        var url = getFormattedUrl(urlGetCitiesJson, stateId);

        $.get(url, function(response){
            $citySelector.html(response);
            $citySelector.val(cityId);
            $citySelector.attr('disabled', false);
        });
    }

    $stateSelector.change(function() {
        var stateId = $(this).val();
        var url = getFormattedUrl(urlGetCitiesJson, stateId);

        $.get(url, function(response){
            $citySelector.html(response);
            $citySelector.attr('disabled', false);
        });
    });

    function getFormattedUrl (base, id) {
        return base + '/' + id;
    }
});
