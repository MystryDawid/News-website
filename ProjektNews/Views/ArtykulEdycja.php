<?php
/**
 * Created by PhpStorm.
 * User: Mystry
 * Date: 03.11.2018
 * Time: 18:04
 */
?>
</div>
<div class="12u">
    <center>
        <form method="POST" action="./index.php?f=Edycja&c=Artykuly" enctype='multipart/form-data'>
            <input type="hidden" name="id" value="<?php echo $dataTable['artykulyid'] ?>">
            <input class="button" value="<?php echo str_replace(" ","T",$dataTable['dataUkazania']); ?>"  type="datetime-local" name="time"><br>Data i godzina w której artykuł ma się ukazać.<br>
            <input class="button" value="<?php echo $dataTable['tytul'] ?>" placeholder="Tytuł" type="text" name="title"><br>
            <textarea name="tresc" class="button"><?php echo $dataTable['tresc'] ?></textarea><br>
            Obrazek : <input class="button" type='file' id="file" name='userFile'><br>
            <input type="submit" value="Edytuj" class="button">
        </form>
    </center>
</div>
