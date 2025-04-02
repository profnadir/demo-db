<?php 

include("connexion.php");

$sql = "SELECT * FROM MyGuests";

$stmt = $con->prepare($sql);
$stmt->execute();

//print_r($stmt->fetchAll());

foreach($stmt->fetchAll() as $v) {

    echo $v["id"]." ";
    echo $v["firstname"]." ";
    echo $v["lastname"]." ";
    echo $v["email"]." ";
    echo '<br>';
}


?>