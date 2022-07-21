<?php
 
require ('config.php');

$mysqli = mysqli_connect($host,$user,$pw,$base);

if(mysqli_connect_errno()){
    printf('echec de la connexion',);
    
}

//$myquery = mysqli_query($mysqli, "SELECT * FROM `sexygurl`");


//$num_rows = mysqli_num_rows($myquery)."<br>";

//echo $num_rows."<br>" ;
//if($num_rows > 0){
/* recupere tout les elements d'un row et l'associe avec le nom de la colonne

while($result = mysqli_fetch_assoc($myquery)){
print_r($result);
}
*/

/* recupete tout les elements d'un row et l'associe avec un index

while($results=mysqli_fetch_row($myquery)){
print_r($results);
}
*/

/* recupere tout les elements d'un row et l'associe avec un index ET son nom de colonne

while($resultat=mysqli_fetch_array($myquery)){
    print_r($resultat);
}
}
*/

/* requete préparé : 
-prepare la requete : on remplace les items par des placesholders '?'
-lier les variable a la requete
-execute la requete
-lier le resultat aux variable 
*/

$stmt = mysqli_stmt_init($mysqli);



$tabname = "Violaine";
$firstname = "Camille";

//on prepare les places holders
$req_pre = mysqli_stmt_prepare($stmt, "SELECT * FROM sexygurl WHERE firstname = ? OR firstname = ?;");

mysqli_stmt_bind_param($stmt,'ss',$tabname,$firstname );
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $data['id'],$data['firstname'],$data['age'],$data['atouts'],$data['foreign_keytest']);


while(mysqli_stmt_fetch($stmt)){

echo $data['firstname']." possede ".$data['atouts'].'<br>';
}

mysqli_stmt_close($stmt);

//}

