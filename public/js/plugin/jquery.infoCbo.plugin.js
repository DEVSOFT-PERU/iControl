(function($) {
    $.fn.infoCbo = function(options) {
        var opts = $.extend({}, $.fn.infoCbo.default, options);
        this.each(function() {
            var x = this;
            var url = $(x).attr('data-href');
            $.getJSON(url, opts.data)
                .done(function(response) {
                    $(x).html("<option> Cargando ...</option>");
                    if (response.success) {
                        var output = "<option> " + 'Elegir una opcion' + " </option>";
                        $.each(response.data, function(key, value) {
                            output += "<option value=" + value[opts.value] + ">" + key + "  " + value[opts.display] + "</option>";
                        });
                        $(x).html(output);
                    } else {
                        $(x).html("<option> No encontramos opciones " + response.message + "</option>");
                    }
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $(x).html("<option>Fail:: " + textStatus + "</option>");
                });
        });
    };
    $.fn.infoCbo.default = {
        "data": null,
        "value": null,
        "display": null
    };

}(jQuery));
