<?php
require_once 'CReadUD.php';

    if($_GET){
        echo "<p id='message'>".$_GET['msg'];
    }
?>
<style>
    body{
        background-color:darkgrey
    }

    img {
        width:250px;
        height:250px;
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
    #waifu1 {
        position:absolute;
        left: 5%;
    }
    #waifu2 {
        position:absolute;
        right: 5%;
    }
    #waifu3 {
        position:absolute;
        left: 8%;
        width:120px;
        height:120px;
    }
    #waifu4 {
        position:absolute;
        right: 8%;
        width:120px;
        height:120px;
    }
    legend {
        color:red;
        position:relative;
     
    }
    ul {
        display:flex;
        flex-direction:row;
        flex-wrap: wrap;
    
    }
    li{
        margin-left: 5%;
        margin-right: 5%;
        margin-top:1%;
    }
</style>
<fieldset><legend>Waifu Add</legend>
<form method='POST' action=CreateRUD.php>
    <img id="waifu1" src="https://steamuserimages-a.akamaihd.net/ugc/920296549061515774/14B8A16BDAA132DD0789859D5668CC4FB6E22452/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="">
    <img id="waifu2" src="https://steamuserimages-a.akamaihd.net/ugc/920296549061515774/14B8A16BDAA132DD0789859D5668CC4FB6E22452/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="">
    <input type='text' name='firstname' placeholder='her name'>
    <input type='text' name='positives' placeholder='positives'>
    <input type='text' name='negatives' placeholder='negatives'>
    <button type="submit">Gogo</button>
</form>
</fieldset>
<pre>
<?php 
require 'display.php';


