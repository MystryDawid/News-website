<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 02.11.2018
 * Time: 12:10
 */
?>
<div id="footer" style="padding: 15px">
    <?php
        echo "<span style='float: left'>Autor  :".$dataTable["login"]."</span>";
        echo "<span style='float: right'>Ocena  :".$dataTable["ocena"]."</span><br>";
        echo "<span>tresc  :".$dataTable["tresc"]."</span>";
        if($_SESSION['rola'] == "root" || $dataTable["autor"] == $_SESSION['id']){
            echo "<span style='float: right'>
                <a href='./index.php?c=Comment&f=UsuwanieKomentarzy&idk=".$dataTable["komentarzid"]."&ida=".$dataTable['autor']."&id=$_GET[id]'>Usuń</a>
                <a href='./index.php?c=Comment&f=startModyfikowanieKomentarzy&idk=".$dataTable["komentarzid"]."&ida=".$dataTable['autor']."&id=$_GET[id]'>Modyfikuj</a>
            </span>";
        }
    ?>
</div>

