<?php 

$dsn = "mysql:host=localhost;dbname=25dev101;port=3306";
$username = "root";
$password = "";

try {

    $con = new PDO($dsn,$username,$password);
    echo "connected";

} catch (PDOException $e) {

    echo "failed ". $e->getMessage();

}

?>