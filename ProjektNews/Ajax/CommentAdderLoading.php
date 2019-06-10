<?php ?>
<script>
$( document ).ready(function() {

    $('#updateComment').click(function() {
        $.ajax({

            url: 'http:///localhost/ProjektNews/index.php?f=DodawanieKomentarzy&c=Comment',
            type: 'POST',
            data: {
                artykul: document.getElementsByName("artykul")[0].value,
                ocena: document.getElementsByName("ocena")[0].value,
                tresc: document.getElementsByName("tresc")[0].value,
            },
            success: function() {
                window.location.replace(window.location.pathname + window.location.search + window.location.hash);
            },
            fail:function() {
                alert("YESN'T");
            }
        });
    });
});
</script>







