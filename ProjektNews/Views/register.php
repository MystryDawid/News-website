<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-25
 * Time: 09:37
 */
?>
    <div class="12u">
        <center>
            <div onload="widoczne()">
                <form method="post" action="./index.php?f=Register&c=Users" id="1">
                    <input placeholder="LOGIN" class="button" type="text"  name="login" ><br>
                    <input placeholder="PASSWORD" class="button" type="password" name="password" ><br>
                    <input class="button" type="date" name="date" ><br>Data urodzenia<br>
                    Plec<br>M<input type="radio" name="plec" value="m" checked>K<input type="radio" name="plec" value="k"><br>

                    <select class="button" name="wojewodztwo" onchange="widoczne()" >
                        <option value="4">Małopolskie</option>
                        <option selected value="5">Śląskie</option>
                        <option value="6">Świętokrzyskie</option>
                        <option value="7">Podkarpackie</option>
                    </select><br>Województwo<br>

                    <select class="button" name="powiat" onload="widoczne()" >
                        <option>Powiat</option>
                        <option class="4" value="1">Nowosądecki</option>
                        <option class="4" value="2">Limanowski</option>
                        <option class="4" value="3">Krakowski</option>

                        <option class="5" value="4">Bieszczadzki</option>
                        <option class="5" value="5">Dębicki</option>
                        <option class="5" value="6">Darosławski</option>

                        <option class="6" value="7">Będziński</option>
                        <option class="6" value="8">Bielski</option>
                        <option class="6" value="9">Cieszyński</option>

                        <option class="7" value="10">Buski</option>
                        <option class="7" value="11">Kazimierski</option>
                        <option class="7" value="12">Kielecki</option>
                    </select><br>
                    <input placeholder="Miejscowość" class="button" type="text" name="miejscowosc" ><br>
                    <input class="button" style="border: none" type="button" name="Update" id="updateRegister" value="Rejestruj" />
                </form>
                <a class="button" href="./index.php?f=startLogin&c=Users" onload="widoczne()">
                    Możesz też się zalogować
                </a>
            </div>
        </center>
    </div>
</div>