var topnav = {
    logout: function() {

        var i = $('#submitLogout');
        var dir = i.attr('href');

        i.on('click', function(e) {
            e.preventDefault();

            var dataForm = new FormData();
            dataForm.append('email', '');

            $.ajax({
                url: dir,
                data: '',
                type: 'POST',
                //dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    console.group("Ajax BeforeSend::::::::::::::::::::::::::::::::");
                    console.info('cargando ...');
                    console.groupEnd();
                },
                success: function(json) {
                    console.group('Ajax Success:::::::::::::::::::::::::::::::::::');
                    console.groupEnd();
                    location.reload();
                },
                error: function(xhr, status) {
                    console.group('Ajax Error:::::::::::::::::::::::::::::::::::::');
                    console.error(status);
                    console.groupEnd();
                },
                complete: function(xhr, status) {
                    console.group('Ajax Complete::::::::::::::::::::::::::::::::::');
                    console.info(status);
                    console.groupEnd();
                },
                done: function(msg) {
                    console.group('Ajax Done:::::::::::::::::::::::::::::::::::::::');
                    console.info(msg);
                    console.groupEnd();
                },
                fail: function(jqXHR, textStatus) {
                    console.group('Ajax Fail:::::::::::::::::::::::::::::::::::::::');
                    console.error(textStatus);
                    console.groupEnd();
                }
            });
        });
    },
    init: function() {
        topnav.logout();
    }

};
