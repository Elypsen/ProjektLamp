<?php
require 'pdo.php';

$read_query = "SELECT * FROM sexywaifu";
try {
    $sth = $dbh->query($read_query)->fetchAll(PDO::FETCH_ASSOC);
    
}
catch (PDOException $e){

    echo "Read failed: ".$e->getMessage();
}
