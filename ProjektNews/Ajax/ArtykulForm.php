<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 03.11.2018
 * Time: 12:06
 */
?>
<script>
$( document ).ready(function() {
    $('#updateArtykul').click(function() {
        var fd = new FormData();
        var file = $('#file')[0].files[0];
        fd.append('obrazek', file, file.name);
        fd.append('dataUkazania',document.getElementsByName("time")[0].value);
        fd.append('title',document.getElementsByName("title")[0].value);
        fd.append('tresc',document.getElementsByName("tresc")[0].value);

        $.ajax({

            url: 'http:///localhost/ProjektNews/index.php?f=Dodawanie&c=Artykuly',
            type: 'POST',
            enctype: 'multipart/form-data',
            data: fd,
            contentType: false,
            processData: false,
            fail:function() {
                alert("YESN'T");
            },
            success: function() {
                alert("Dodano artykuł");

            },

        });

    });
});
</script>