<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 04.11.2018
 * Time: 08:57
 */

?>

<div class="12u">
    <center>
        <p>

                <?php
                    foreach ($dataTable as $user){
                        ?>
        <center style="float: left">
                        <div style="float: left">ID<br><input class="button" style="margin-top: 0px" type="text" name="uzytkownicyid" value="<?php echo $user["uzytkownicyid"] ?>"readonly></div>
                        <div style="float: left">Login<br><input style="margin-top: 0px" class="button" type="text" name="login" value="<?php echo $user["login"] ?>"readonly></div>
                        <div style="float: left">Data urodzenia<br><input style="margin-top: 0px" class="button" type="text" name="dataUrodzenia" value="<?php echo $user["dataUrodzenia"] ?>"readonly></div>
                        <div style="float: left">Płeć<br><input style="margin-top: 0px" class="button" name="plec" value="<?php echo $user["plec"] ?>"readonly></div>
                        <div style="float: left">Województwo<br><input style="margin-top: 0px" class="button" name="wojewodztwo" value="<?php echo $user["wojewodztwo"] ?>"readonly></div>
                        <div style="float: left">Powiat<br><input style="margin-top: 0px" class="button" name="powiat" value="<?php echo $user["powiat"] ?>"readonly></div>
                        <div style="float: left">Miejscowość<br><input style="margin-top: 0px" class="button" name="miejscowosc" value="<?php echo $user["miejscowosc"] ?>"readonly></div>
                        <div style="float: left">Zbanowany<br><input style="margin-top: 0px" class="button" name="zbanowany" value="<?php echo $user["zbanowany"] ?>"readonly></div>
                        <div style="float: left">Rola<br><input style="margin-top: 0px" class="button" name="rola" value="<?php echo $user["rola"] ?>"readonly></div>
        </center>
            <?php
                        if($user['zbanowany'] == 0){
                            ?>
                            <br>
                            <div>
                            <form method="post" action="./index.php?f=Ban&c=Users">
                                <input style="margin-top: 0px" class="button" type="hidden" name="uzytkownicyid" value="<?php echo $user["uzytkownicyid"] ?>">
                                <input style="margin-top: 0px" class="button" type="submit" value="Blokuj">
                            </form>
                            </div>
                            <?php
                        }else{
                            ?>
                            <div>
                            <form method="post" action="./index.php?f=UnBan&c=Users">
                                <input style="margin-top: 0px" class="button" type="hidden" name="uzytkownicyid" value="<?php echo $user["uzytkownicyid"] ?>">
                                <input style="margin-top: 0px" class="button" type="submit" value="Odblokuj">
                            </form>
                            </div>
                            <?php
                        }
                        ?>
                        <br><br>
                        <?php
                    }


                ?>

        </p>
    </center>
</div>
</div>
