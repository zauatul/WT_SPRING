<?php

require_once "../controller/auth.php";

?>

<!DOCTYPE html>
<html>
<head>

    <title>Add Student</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="container">

    <h2>Add Student</h2>

    <form method="POST">

        <input type="text"
        name="name"
        placeholder="Student Name"
        required>

        <input type="email"
        name="email"
        placeholder="Email"
        required>

        <input type="text"
        name="registration_no"
        placeholder="Registration Number"
        required>

        <input type="text"
        name="department"
        placeholder="Department"
        required>

        <input type="submit"
        name="add"
        value="Add Student">

    </form>

    <p class="success">
        <?php echo $success; ?>
    </p>

    <a href="index.php">Back</a>

</div>

</body>
</html>