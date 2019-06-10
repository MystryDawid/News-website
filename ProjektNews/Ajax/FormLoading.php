<?php ?>
<script>
$( document ).ready(function() {
    $('#updateRegister').click(function() {
        $.get("http:///localhost/ProjektNews/index.php?f=CzyIstniejeTakieKonto&c=Users&login=" + document.getElementsByName("login")[0].value, function(data, status){
            if(!data.toString()[71]){
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
                    success:function(){
                        alert("Konto zostało stworzone. Możesz się teraz zalogować.");
                        window.location.replace("http:///localhost/ProjektNews/index.php?f=startLogin&c=Users");
                    }
                });
            }else {
                alert("Podany login jest zajęty.");
            }
        });


    });

});
</script>







