<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .Contact-form {
            display: flex;
            flex-direction: column;
            width: 400px;
        }
    </style>
</head>


<body>
    <?php require_once "header.php"; ?>
    <hr> <!-- horizontal line -->
    <h1>Contact Me</h1>
    <div class="Content">
        <form action="" method="post" class="Contact-form">
            <label for="nama">Email</label>
            <input type="text" name="text" id="nama" required />

            <label for="Pesan">Pesan</label>
            <textarea id="pesan" name="pesan" required></textarea>

            <button type="submit">Kirim</button>
            <!-- <input type="submit" value="Kirim Pesan"> -->

        </form>
    </div>


    <hr> <!-- horizontal line -->
    <?php require_once "footer.php"; ?>



</body>

</html>