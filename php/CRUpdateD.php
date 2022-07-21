<?php
require 'pdo.php';
require 'CReadUD.php';
?>
<fieldset><legend>Waifu Modification</legend>
<form method='POST' action='modif_waifu.php'>
<select name='select' id="mymenu">
    <option value="0">Choisir une option<option>

    <?php 
        foreach($sth as $waifu){
            echo "<option value='".$waifu['id']."'>".$waifu['firstname']."</option>";
        }   
    ?>

</select>
<button type="submit" id="mymenubtn" >Modif</button>
</form>
</fieldset>
<script>
window.addEventListener('DOMContentLoaded',function(){
    mymenubtn.addEventListener('click',function(){
        console.log(this.value);
        //document.location.href="remove_waifu.php?waifu="+this.value
    })
})