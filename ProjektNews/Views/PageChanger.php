<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-10
 * Time: 08:00
 */
?>
</div>
<div class="row">
    <div style="width: 100%;text-align: center;">
        <nav id="nav" style="display: inline-block;">
            <ul>
                <?php
                if($_GET['Strona'] > 1){
                    echo "<li class=\"active\"><a href=http://localhost/ProjektNews/index.php?Strona="
                        .($_GET['Strona'] - 1)."&ileNaStronie=".$_GET['ileNaStronie']."&c=".$_REQUEST['c']."&f=".$_REQUEST['f'].">
    Poprzednia strona</a></li>";
                }else{
                    echo "<li class=\"active\"><a href=\"#\">Poprzednia strona</a></li>";
                }
                echo '<li class="active"><span>Strona '.$_GET['Strona'].'</span></li>';
                if($_GET['Strona'] <  $dataTable / $_GET['ileNaStronie']){
                    echo "<li class=\"active\"><a href=http://localhost/ProjektNews/index.php?Strona="
                        .($_GET['Strona'] + 1)."&ileNaStronie=".$_GET['ileNaStronie']."&c=".$_REQUEST['c']."&f=".$_REQUEST['f'].">
    Następna strona</a></li>";
                }else{
                    echo "<li class=\"active\"><a href=\"#\">Następna strona</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</div>


