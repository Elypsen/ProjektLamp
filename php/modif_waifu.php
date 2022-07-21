<?php
require_once 'pdo.php';
require_once 'CReadUD.php';
$waifuID = $_POST['select'];
$read_query = "SELECT * FROM sexywaifu WHERE id=$waifuID";
try {
    $sth = $dbh->query($read_query)->fetchAll(PDO::FETCH_ASSOC);
    $sth = $sth[0];
    $name = $sth['firstname'];
    $pos =$sth['positives'];
    $neg = $sth['negatives'];
}
catch (PDOException $e){

    echo "Read failed: ".$e->getMessage();
}

?>
<style>
    body{
        background-color:darkgrey
    }
    form {
        display:flex;
        flex-direction:column;
        margin:1%;
        justify-content:center;
        align-items:center;
    }
    input, select, button {
        width: 25%;
        
        margin:1%;
        text-align:center;
        border-radius:10px;
    }
    fieldset{
        border-radius:20px;
    }
    input{
        height:2rem;
        text
    }
    button{
        
        background-color:darkblue;
        color:white;
    }
    #message{
        font-size:1.5rem;
        color:blue
    }

    button:hover{
        background-color:lightblue;
    }
    legend {
        font-size:1.3rem;
    }
</style>
<h1>modifier les données de la waifu</h1>
<p>name : <?=$name?></p>
<p>positives : <?=$pos?></p>
<p>negatives : <?=$neg?></p>
<form method='POST' action=update.php>
    <input type='text' name='firstname' placeholder='her name'>
    <input type='textarea' name='positives' placeholder='positives'>
    <input type='text' name='negatives' placeholder='negatives'>
    <input type="hidden" name="id" value="<?php echo $waifuID ;  ?>">
    <button type="submit">Gogo</button>
</form>