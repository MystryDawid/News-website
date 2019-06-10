<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 03.11.2018
 * Time: 16:08
 */
?>
</div>
<div class="12u">
    <center>
        <div onload="widoczne()">
            <form method="post" action="./index.php?f=Edycja&c=Users" id="1">
                <input placeholder="LOGIN" value="<?php echo $dataTable['login'] ?>" class="button" type="text"  name="login" readonly><br>
                <input placeholder="PASSWORD" class="button" type="password" name="password" ><br>
                <input class="button" type="date" name="date" value="<?php echo $dataTable['dataUrodzenia'] ?>" ><br>Data urodzenia<br>
                Plec<br>M<input type="radio" <?php if($dataTable['plec'] == "M"){echo "selected";} ?> name="plec" value="m" checked>
                K<input <?php if($dataTable['plec'] == "K"){echo "selected";} ?> type="radio" name="plec" value="k"><br>

                <select class="button" name="wojewodztwo" onchange="widoczne()" >
                    <option <?php if($dataTable['wojewodztwo'] == "4"){echo "selected";} ?> value="4">Małopolskie</option>
                    <option <?php if($dataTable['wojewodztwo'] == "5"){echo "selected";} ?> value="5">Śląskie</option>
                    <option <?php if($dataTable['wojewodztwo'] == "6"){echo "selected";} ?> value="6">Świętokrzyskie</option>
                    <option <?php if($dataTable['wojewodztwo'] == "7"){echo "selected";} ?> value="7">Podkarpackie</option>
                </select><br>Województwo<br>

                <select class="button" name="powiat" onload="widoczne()" >
                    <option>Powiat</option>
                    <option <?php if($dataTable['powiat'] == "1"){echo "selected";} ?> class="4" value="1">Nowosądecki</option>
                    <option <?php if($dataTable['powiat'] == "2"){echo "selected";} ?> class="4" value="2">Limanowski</option>
                    <option <?php if($dataTable['powiat'] == "3"){echo "selected";} ?> class="4" value="3">Krakowski</option>

                    <option <?php if($dataTable['powiat'] == "4"){echo "selected";} ?> class="5" value="4">Bieszczadzki</option>
                    <option <?php if($dataTable['powiat'] == "5"){echo "selected";} ?> class="5" value="5">Dębicki</option>
                    <option <?php if($dataTable['powiat'] == "6"){echo "selected";} ?> class="5" value="6">Darosławski</option>

                    <option <?php if($dataTable['powiat'] == "7"){echo "selected";} ?> class="6" value="7">Będziński</option>
                    <option <?php if($dataTable['powiat'] == "8"){echo "selected";} ?> class="6" value="8">Bielski</option>
                    <option <?php if($dataTable['powiat'] == "9"){echo "selected";} ?> class="6" value="9">Cieszyński</option>

                    <option <?php if($dataTable['powiat'] == "10"){echo "selected";} ?> class="7" value="10">Buski</option>
                    <option <?php if($dataTable['powiat'] == "11"){echo "selected";} ?> class="7" value="11">Kazimierski</option>
                    <option <?php if($dataTable['powiat'] == "12"){echo "selected";} ?> class="7" value="12">Kielecki</option>
                </select><br>
                <input placeholder="Miejscowość" value="<?php echo $dataTable['miejscowosc'] ?>" class="button" type="text" name="miejscowosc" ><br>
                <input class="button" style="border: none" type="button" name="Update" id="updateProfil" value="Edytuj" />
            </form>

        </div>
    </center>
</div>
</div>