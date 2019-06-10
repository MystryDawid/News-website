<?php
/**
 * Created by PhpStorm.
 * User: uczen
 * Date: 2018-09-20
 * Time: 07:36
 */
?>


<?php
echo "<center><div>";
echo "<table border='1px thick black'><tr><td>ID</td><td>Województwo</td></tr>";
for($a = 0;$a<count($dataTable);$a++){
    echo "<tr><td>".$dataTable[$a][0]."</td><td>".$dataTable[$a][1]."</td></tr>";
}
echo "</table></div></center>";