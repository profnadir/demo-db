<?php 

$dsn = "mysql:host=localhost;dbname=25dev101;port=3306";
$username = "root";
$password = "";

try {

    $con = new PDO($dsn,$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "connected";

} catch (PDOException $e) {

    echo "failed ". $e->getMessage();

}

?>