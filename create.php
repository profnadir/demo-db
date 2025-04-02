<?php 

$dsn = "mysql:host=localhost;dbname=25dev101";
$username = "root";
$password = "";

try {
    $con = new PDO($dsn, $username, $password);


     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
       VALUES ('John', 'Doe', 'john@example.com')";

     $con->exec($sql);

     echo "guest created";

} catch (PDOException $e) {
    echo "Error " . $e->getMessage();
}



$con = null;


?>