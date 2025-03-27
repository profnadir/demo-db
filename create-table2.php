<?php 

include("connexion.php");

try {

    $sql = "CREATE TABLE MyGuests2 (
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