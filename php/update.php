<?php

require_once("pdo.php");

$id = $_POST['id'] ;
$name = $_POST['firstname'];
$pos = $_POST['positives'];
$neg = $_POST['negatives'];

$update_query = "UPDATE `sexywaifu` " ;
$update_query .= "SET `firstname`='".$name."',`positives`='".$pos."',`negatives`='".$neg."' ";
$update_query .= "WHERE `id`=$id"; 
//echo $update_query ;

try {
    $sth = $dbh->query($update_query) ;  
    header("Location: index.php?msg=waifu modified ..."); 
}
catch (PDOException $e){
    echo "insertion failed : ".$e->getMessage();
}
