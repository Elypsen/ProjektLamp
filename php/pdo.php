<?php
$connex="mysql:dbname=mydb;host=db:3306;";
$user= 'root';
$pw = 'bacon';

try {
    $dbh = new PDO($connex,$user,$pw);

}
catch (PDOException $e){

    echo "connection failed: ".$e->getMessage();
}

