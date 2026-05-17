<?php


require_once "../model/user_model.php";
require_once "../controller/auth.php";

$id = $_GET['id'];

$student = getStudentById($id);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Student</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="container">

    <h2>Edit Student</h2>

    <form method="POST">

        <input type="hidden"
        name="id"
        value="<?php echo $student['id']; ?>">


        <input type="text"
        name="name"
        value="<?php echo $student['name']; ?>"
        required>


        <input type="email"
        name="email"
        value="<?php echo $student['email']; ?>"
        required>


        <input type="text"
        name="registration_no"
        value="<?php echo $student['registration_no']; ?>"
        readonly>


        <input type="text"
        name="department"
        value="<?php echo $student['department']; ?>"
        required>


        <input type="submit"
        name="update"
        value="Update Student">

    </form>

</div>

</body>
</html>