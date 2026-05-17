<?php

require "../db/config.php";
require_once "../model/user_model.php";

if(isset($_GET['id'])){

    $c_id = $_GET['id'];

    if(deleteStudent($c_id)){

        echo "success";
    }
    else{

        echo "failed";
    }
}

?>