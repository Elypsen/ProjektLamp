<?php
require 'pdo.php';
require 'CReadUD.php';
?>
<fieldset><legend>registered Waifus</legend>
<ul>
<?php
foreach($sth as $waifu){
    echo "<li>".$waifu['firstname']."</li>";
}

?>
</ul>
</fieldset>

