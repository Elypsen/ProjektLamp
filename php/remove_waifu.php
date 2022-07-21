<?php
require_once 'pdo.php';

$waifuID = $_POST['select'];
$delete_query = "DELETE FROM sexywaifu WHERE id=$waifuID";


try {
   $sth = $dbh->query($delete_query);

}
catch (PDOException $e){

    echo "connection failed: ".$e->getMessage();
}

header("Location: index.php?msg=waifu%20killed...");