<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>


<body>
    <?php
    if (isset($_REQUEST['login'])) {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $email_table = "admin@gmail.com";
        $password_table = "12345678";

        if ($email == $email_table and $password == $password_table) {
            echo "Berhasil Login";
        } else {
            header("location:4.php?login=error");
        }
    }
    ?>
    <div class="login">
        <form action="" method="get">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Masukan Email Anda">
            <br><br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br><br>
            <button name="login" type="submit">login</button>

        </form>


</body>

</html>