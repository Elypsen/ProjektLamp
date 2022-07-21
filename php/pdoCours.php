<pre>
    <style>
        .waifu{
            color:pink;
            border-radius:5px;
            background-color:darkgrey;
            font-size:1.3rem;
        }
    </style>
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
//1 type de requete
$sql = "SELECT * FROM sexywaifu";
$sth = $dbh->prepare($sql);
$sth->execute();
$sth->fetchAll();
//Another one!
//(checker les "opératteur de portée statiques)
function sexy($id,$name,$pos,$neg){
    echo "This is $name, she is/has $pos but be careful she can be $neg.<br>";
}
//$sth2 = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//var_dump($sth2);
$sth2 = $dbh->query($sql)->fetchAll(PDO::FETCH_FUNC,"sexy");
//echo $sth2[0]['firstname'];

class Waifu {
    private $id;
    public $firstname;
    public $positives;
    public $negatives;

    public function build_span($firstname, $atouts){
        return "<span class='waifu'> $firstname has $atouts </span><br>";
    }
}
$sth3 = $dbh->query($sql)->fetchAll(PDO::FETCH_CLASS,"Waifu");

//echo $sth3[0]->build_span($sth3[0]->firstname,$sth3[0]->positives);

foreach($sth3 as $waifu){
    echo $waifu->build_span($waifu->firstname, $waifu->positives);
}