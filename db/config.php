<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbnmae = "info";

$conn = mysqli_connect($host, $user, $pass, $dbnmae);

$qry1 = "CREATE TABLE IF NOT EXISTS student(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100),
        registration_no VARCHAR(20),
        department VARCHAR(50)
)";

if(!mysqli_query($conn, $qry1)){
    die("Falied to create Table");
}

?>