<?php
require_once 'pdo.php';
?>
<fieldset><legend>waifu delete :'( </legend>
<form method='POST' action='remove_waifu.php'>
<img id="waifu3" src="https://c.tenor.com/YM3fW1y6f8MAAAAC/crying-cute.gif" alt="">
<img id="waifu4" src="https://c.tenor.com/YM3fW1y6f8MAAAAC/crying-cute.gif" alt="">
<select name='select' id="mymenu">
    <option value="0">Choisir une option<option>

    <?php 
        foreach($sth as $waifu){
            echo "<option value='".$waifu['id']."'>".$waifu['firstname']."</option>";
        }   
    ?>

</select>
<button type="submit" id="mymenubtn" >DELETE</button>
</form>
</fieldset>
<script>
window.addEventListener('DOMContentLoaded',function(){
    mymenubtn.addEventListener('click',function(){
        console.log(this.value);
        //document.location.href="remove_waifu.php?waifu="+this.value
    })
})



</script>