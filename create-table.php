<?php 

$dsn = "mysql:host=localhost;dbname=25dev101";
$username = "root";
$password = "";

try {

    $con = new PDO($dsn,$username,$password);
    
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $con->exec($sql);

    echo "table created";

} catch (PDOException $e) {

    echo "failed ". $e->getMessage();

}

$con = null;

?>