function request(data, wait) {

    return $.ajax({
            url: data.url,
            data: '',
            type: (typeof data.type) == 'undefined' ? 'POST' : data.type,
            dataType: (typeof data.dataType) == 'undefined' ? 'json' : data.dataType,
            cache: (typeof data.cache) == 'undefined' ? false : data.cache,
            contentType: (typeof data.contentType) == 'undefined' ? false : data.contentType,
            processData: (typeof data.processData) == 'undefined' ? false : data.processData,
            beforeSend: wait()
        })
        .always(function(data, textStatus, jqXHR) {
            console.info(textStatus);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.group('Ajax Fail' + ':'.repeat(10));
            console.error(textStatus);
            console.groupEnd();
        });

}



var dFormulario = new FormData();
dFormulario.append('email', '');


var registrarUsuario = request({
    url: '',
    data: dFormulario
}, function() {

});

registrarUsuario.done(function(data, textStatus, jqXHR) {
    console.group('Ajax Done:::::::::::::::::::::::::::::::::::::::');
    console.info(data);
    console.groupEnd();
});
