<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 03.11.2018
 * Time: 16:17
 */
?>
<script>
$( document ).ready(function() {

    $('#updateProfil').click(function() {

        $.ajax({
            url: 'http:///localhost/ProjektNews/index.php?f=Edycja&c=Users',
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
            alert('YES');
                window.location.replace(window.location.pathname + window.location.search + window.location.hash);
        },
            fail:function() {
            alert("YESN'T");
        }
        });
    });

});
</script>