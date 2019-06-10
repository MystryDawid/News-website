<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-09
 * Time: 09:39
 */
echo '<div class="6u"><section >';
echo "<div style='float: right'>Autor :".$dataTable['login']."</div>";
echo "<div style='float: left'>Tytuł :".$dataTable['tytul']."</div><br>";
echo "<p class='text'>".$dataTable['tresc'];if(count($dataTable['tresc'])>50) echo "...</p>";
echo "<a href='./index.php?c=HomePage&f=ArtykulFull&id=".$dataTable['artykulyid']."'>
<img class=\"image full\" src="."'".$dataTable['obrazek']."'></a>";
echo "<a class=\"button\" href='./index.php?c=HomePage&f=ArtykulFull&id=".$dataTable['artykulyid']."'>Więcej</a>";
if($dataTable['autor'] == $_SESSION['id'] || $_SESSION['rola'] == "root"){
    echo "<a class=\"button\" href='./index.php?c=Artykuly&f=startEdycja&id=".$dataTable['artykulyid']."&ida=".$dataTable['autor']."'>Edycja</a>";
    echo "<a class=\"button\" href='./index.php?c=Artykuly&f=ukryj&id=".$dataTable['artykulyid']."&ida=".$dataTable['autor']."'>Usuń</a>";
}
echo "</section></div>";
