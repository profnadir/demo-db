<?php 

$dsn = "mysql:host=localhost";
$username = "root";
$password = "";

try {

    $con = new PDO($dsn,$username,$password);
    
    $sql = "create database 25dev102";

    $con->exec($sql);

    echo "database created";

} catch (PDOException $e) {

    echo "failed ". $e->getMessage();

}

$con = null;

?>