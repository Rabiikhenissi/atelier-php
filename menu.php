<?php
function  display_menu() {
echo "<ol> ";
for($i=1;$i<=10;$i++){
    echo "<li><a href='ex$i.php'>exercice $i</a></li>";
}
echo"</ol>";
}
?>