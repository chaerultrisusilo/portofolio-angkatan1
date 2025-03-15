<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, orange, white) !important;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
        }

        .header {
            display: flex;
        }

        .header img {
            max-width: 190px;
            align-self: flex-start;
        }

        .kata {
            margin-top: 0 30px;
            padding-left: 90px;
            flex-grow: 1;
        }

        .kata p {
            margin-top: 80px;
        }

        .btn-option {
            background-color: rgb(3, 28, 351);
            color: #fff;
            text-decoration: none;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            width: 250px;
            height: 120px;
            font-size: 18px;
            font-weight: bold;
            align-items: center;

        }

        .options {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 60px;
            margin-left: 85px;
        }

        .btn-option:hover {
            background-color: rgb(62, 80, 245);
        }

        footer {
            position: fixed;
            bottom: 5px;
            background-color: rgb(3, 28, 351);
            width: 100%;
            color: white;
            padding: 7px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="kata">
                <h4>Assalamualaikum WR, WB</h4>
                <h5>Selamat Datang di Bank Syariah Riyal Irsyadi</h5>
                <p>Silahkan Pilih Transaksi Anda</p>

            </div>
            <img src="https://rezaibrahim.com/storage/logos/4M8mDawVU8a2PkG79JeroB3NIxJtVR8gg2caATkL.png" alt="logo BSR" class="logo" width="200">

        </div>
        <div class="options">
            <a class="btn-option" href="">Customer Service</a>
            <a class="btn-option" href="">Teller Officer</a>
            <a class="btn-option" href="">Pengaduan Nasabah</a>

        </div>
    </div>
    <footer>
        <marquee direction="right">Selamat Datang di PT.Sejahtera</marquee>
    </footer>

</body>

</html>