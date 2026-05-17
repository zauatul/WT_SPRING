<?php

require_once "../db/config.php";

function getStudents(){

    global $conn;

    $sql = "SELECT * FROM student";

    return mysqli_query($conn,$sql);
}


function getStudentById($id){

    global $conn;

    $sql = "SELECT * FROM student WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    return mysqli_fetch_assoc($result);
}


function addStudent($name,$email,$reg,$department){

    global $conn;

    $sql = "INSERT INTO student
    (name,email,registration_no,department)

    VALUES
    ('$name','$email','$reg','$department')";

    return mysqli_query($conn,$sql);
}


function updateStudent($id,$name,$email,$department){

    global $conn;

    $sql = "UPDATE student SET

    name='$name',
    email='$email',
    department='$department'

    WHERE id=$id";

    return mysqli_query($conn,$sql);
}


function deleteStudent($id){

    global $conn;

    $sql = "DELETE FROM student WHERE id=$id";

    return mysqli_query($conn,$sql);
}

?>