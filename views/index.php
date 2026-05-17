<?php

require_once "../model/user_model.php";

$result = getStudents();

?>

<!DOCTYPE html>
<html>
<head>

    <title>Student Management System</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="container">

    <h2>Student Management System</h2>

    <a href="add.php">
        <button>Add Student</button>
    </a>

    <br><br>

    <table border="1">

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registration No</th>
            <th>Department</th>
            <th>Action</th>

        </tr>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <tr id="row-<?php echo $row['id']; ?>">

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td><?php echo $row['registration_no']; ?></td>

            <td><?php echo $row['department']; ?></td>

            <td>

                <a href="edit.php?id=<?php echo $row['id']; ?>">
                    Edit
                </a>

                |

                <button onclick="handledeleteStudent(<?php echo $row['id']; ?>)">
                    Delete
                </button>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>


<script>

function handledeleteStudent(id){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){

                if(this.responseText == "success"){

                    document.getElementById(
                        "row-" + id
                    ).remove();
                }
                else{

                    alert("Delete Failed");
                }
            }
        };

        xhttp.open(
            "GET",
            "delete.php?id=" + id,
            true
        );

        xhttp.send();

}

</script>

</body>
</html>