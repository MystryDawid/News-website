<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018-10-23
 * Time: 09:43
 */
?>
<div id="row" style=" margin-bottom: 20px;">
    <div id="3u">
        <form method="post" action="./index.php?f=DodawanieKomentarzy&c=Comment">
            <input type="hidden" name="artykul" value="<?php echo "'".$dataTable."'"?>">
            <textarea class="button" name="tresc" style="width: 100%" placeholder="Tresc"></textarea><br>
            Ocena artykułu : <select name="ocena" class="button">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="button" class="button" style="padding: 7.5px;border: none" name="Update" id="updateComment" value="Skomentuj">
        </form>
    </div>

</div>

