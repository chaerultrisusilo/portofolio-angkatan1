<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #28a745;
            color: white;
            padding: 10px;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        nav a :hover {
            color: bisque;
        }

        .Content {
            background-color: whitesmoke;
            box-shadow: 0 0 3px black;
            padding: 15px;
            min-height: 100px;
        }

        form {
            text-align: left;
            max-width: 400px;
            margin: auto;
            border: 1px solid black;
            padding: 10px;

        }

        form label {
            font-weight: bold;
        }

        form input,
        form textarea {
            width: calc(100% - 15px);
            display: block;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            background-color: #ccc;
            padding: 10px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: #fff;
            margin-top: 10px;

        }
    </style>

<body>
    <?php require_once "inc/navbar.php"; ?>
    <header>
        <h1>Kontak Kami</h1>
        <p>
            <small>Berinteraksi Dengan Kami</small>
        </p>
    </header>

    <hr />
    <div class="Content">
        <form action="" method="post">
            <label for="nama">Nama</label>
            <input type="text" name="text" id="nama" required />

            <label for="">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="Pesan">Pesan</label>
            <textarea id="pesan" name="pesan" required></textarea>

            <button type="submit"> Kirim Pesan</button>
            <!-- <input type="submit" value="Kirim Pesan"> -->
        </form>
    </div>
    <?php require_once "inc/footer.php"; ?>
</body>

</html>