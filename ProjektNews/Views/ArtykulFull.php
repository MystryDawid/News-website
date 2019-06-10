<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-23
 * Time: 09:20
 */

?>
    <!-- Content -->
    <?php
    echo "<div id=\"content\" class=\"12u skel-cell-important\">";
    echo "<section>";
    echo "<header>";
    echo "<h2>".$dataTable["tytul"]."</h2>";
    echo "<span class=\"byline\"><b>Autro</b> :".$dataTable['login']."</span>";
    echo "</header>";
    echo "<p><span href=\"#\" class=\"image full\"><img src=\"$dataTable[obrazek]\" alt=\"\"></span></p>";
    echo "<p>";
    echo $dataTable['tresc'];
    echo "</p>";
    echo "</section>";

    echo "</div></div>";
    ?>
    <!-- /Content -->

