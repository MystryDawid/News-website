
$( document ).ready(function() {

    $('#update').click(function() {

        $.ajax({
            url: 'http:///localhost/ProjektNews/index.php?f=Register&c=Users',
            type: 'POST',
            data: {
                login: document.getElementsByName("login")[0].value,
                password: document.getElementsByName("password")[0].value,
                date: document.getElementsByName("date")[0].value,
                plec: document.getElementsByName("plec")[0].value,
                wojewodztwo: document.getElementsByName("wojewodztwo")[0].value,
                powiat: document.getElementsByName("powiat")[0].value,
                miejscowosc: document.getElementsByName("miejscowosc")[0].value,
            },
            success: function() {
                console.log(
                    document.getElementsByName("login")[0].value,
                    document.getElementsByName("password")[0].value,
                    document.getElementsByName("date")[0].value,
                    document.getElementsByName("plec")[0].value,
                    document.getElementsByName("wojewodztwo")[0].value,
                    document.getElementsByName("powiat")[0].value,
                    document.getElementsByName("miejscowosc")[0].value
                );
                alert('DUNO');
            }
        });
    });






});









