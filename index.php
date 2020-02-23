<?php

$dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "534521";
 $db = "root";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
$sql = "CREATE TABLE Website (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table website created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

*/



?>