<?php
session_start();
session_regenerate_id();

if (empty($_SESSION['EMAILLLLLL'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION['EMAILLLLLL'] ?></h1>
    <a href="logout.php">LOG-OUT</a>
</body>

</html>