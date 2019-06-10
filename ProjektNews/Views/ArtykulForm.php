<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-10-02
 * Time: 09:30
 */
?>
</div>
    <div class="12u">
        <center>
                <form method="POST" action="./index.php?f=Dodawanie&c=Artykuly" enctype='multipart/form-data'>
                <input class="button" type="datetime-local" name="time"><br>Data i godzina w której artykuł ma się ukazać.<br>
                <input class="button" placeholder="Tytuł" type="text" name="title"><br>
                    <textarea name="tresc" class="button"></textarea><br>
                    Obrazek : <input class="button" type='file' id="file" name='userFile'><br>
                    <input type="submit" class="button" style="padding: 7.5px;border: none" value="Wyslij">
            </form>
        </center>
    </div>