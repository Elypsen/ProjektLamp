<? 

require_once 'pdo.php';

//var_dump($_POST);

//var_dump($dbh);
$name = $_POST['firstname'];
$pos = $_POST['positives'];
$neg = $_POST['negatives'];
$insert_query = "INSERT INTO sexywaifu(`firstname`,`positives`,`negatives`) VALUES ('$name','$pos','$neg');";

try {
    $sth = $dbh->query($insert_query);
    //header("Location: /createOK.php");
  ?>
  <script>
    let mymessage=encodeURI("Waifu added successfully ! enjoy your hentai ;) winkwink blblblblbl")
   location.href="index.php?msg="+mymessage;
    
  </script>
  <?php
}
catch (PDOException $e){

    echo "insertion failed: ".$e->getMessage();
}


