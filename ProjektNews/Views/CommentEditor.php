<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 03.11.2018
 * Time: 19:17
 */
?>
<div id="row" style=" margin-bottom: 20px;">
    <div id="3u">
        <?php print_r($dataTable)?>
        <form method="post" action="./index.php?f=ModyfikowanieKomentarzy&c=Comment">
            <input type="hidden" name="autor" value="<?php echo $dataTable['autor']?>">
            <input type="hidden" name="idk" value="<?php echo $dataTable['komentarzid']?>">
            <textarea class="button" name="tresc" style="width: 100%" placeholder="Tresc"><?php echo $dataTable['tresc']?></textarea><br>
            Ocena artykułu : <select name="ocena" class="button">
                <option <?php if($dataTable['ocena'] == "1"){echo "selected";} ?> value="1">1</option>
                <option <?php if($dataTable['ocena'] == "2"){echo "selected";} ?> value="2">2</option>
                <option <?php if($dataTable['ocena'] == "3"){echo "selected";} ?> value="3">3</option>
                <option <?php if($dataTable['ocena'] == "4"){echo "selected";} ?> value="4">4</option>
                <option <?php if($dataTable['ocena'] == "5"){echo "selected";} ?> value="5">5</option>
            </select>
            <input type="submit" class="button" style="padding: 7.5px;border: none"  value="Edytuj">
        </form>
    </div>

</div>