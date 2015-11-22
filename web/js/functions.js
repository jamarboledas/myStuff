var connection_display_field = function(field, id, elements) {
    $.ajax({
        url: field + "/"+ id,
        type: 'GET',
        cache: false,
        async: true,
        dataType: 'json',

        success: function (response) {
            elements.find('option').remove().end().append('<option value="0">---------</option>');
            $.each(response, function() {
                    elements.append($("<option />").val(this.id).text(this.name));
            });
        }
    });
};

    (function ($) {
        "use strict";
        $.fn.requestForm = function () {
            return this.each(function () {
                var $country = $("#inscription_country"),
                    $province = $("#inscription_province"),
                    $city = $("#inscription_city");

                $country.change(function () {
                    var option = $('option:selected', this).attr('value');
                    $province.select("val", "");
                    $city.select("val", "");
                    connection_display_field('province', option, $province);
                });

                $province.change(function () {
                    var option = $('option:selected', this).attr('value');
                    $city.select("val", "");
                    connection_display_field('city', option, $city);
                });
            });
        };

        $(document).ready(function(){
            $("form").requestForm();
            $('#inscription_province').find('option').remove().end();
            $('#inscription_city').find('option').remove().end();
            $('.datepicker').datepicker({
                language: 'es'
            });
        });
}(jQuery));