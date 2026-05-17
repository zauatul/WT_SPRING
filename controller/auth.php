<?php

require_once "../model/user_model.php";

$name = "";
$email = "";
$registration_no = "";
$department = "";

$success = "";


// ADD STUDENT
if(isset($_POST['add'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $registration_no = trim($_POST['registration_no']);
    $department = trim($_POST['department']);

    if(
        addStudent(
            $name,
            $email,
            $registration_no,
            $department
        )
    ){
        $success = "Student Added Successfully";
    }
}



// UPDATE STUDENT
if(isset($_POST['update'])){

    $id = $_POST['id'];

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);

    if(
        updateStudent(
            $id,
            $name,
            $email,
            $department
        )
    ){

        header("Location: index.php");
    }
}

?>