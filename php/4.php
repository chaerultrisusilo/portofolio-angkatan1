<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="4.php?deposito">Perhitungan Deposito</a>
    <a href="4.php?pembiayaan">Perhitungan Pembiayaan</a>

    <?php if (isset($_GET['pembiayaan'])) : ?>
        <h1>Simulasi Angsuran Pembiayaan</h1>
        <form action="" method="post">
            <label for="">Jumlah Pemohonan</label>
            <input type="number" name="nominal_pembiayaan" id="" class="">
            <br><br>
            <label for="">Jangka Waktu</label>
            <select name="jangka_waktu_pembiayaan">
                <option value="12">1 Tahun</option>
                <option value="24">2 Tahun</option>
                <option value="36">3 Tahun</option>
                <option value="48">4 Tahun</option>
                <option value="60">5 Tahun</option>

            </select>

            <br><br>
            <button name="proses2" type="submit">Proses</button>
        </form>
    <?php elseif (isset($_GET['deposito'])) : ?>
        <h1>Perhitungan Deposito</h1>
        <form action="" method="post">
            <label for="">Nominal Deposito</label>
            <input type="number" name="nominal" id="" class="">
            <br><br>
            <label for="">Jangka Waktu</label>
            <select name="jangka_waktu">
                <option value="1">1 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="12">12 Bulan</option>
            </select>
            <br><br>
            <button name="proses" type="submit">Proses</button>
        </form>

        <?php
        $hasil = 0;
        $hasilPerBulan = 0;
        if (isset($_POST['proses'])) {
            $nominal = $_POST['nominal'];
            $jangka_waktu = $_POST['jangka_waktu'];
            $rate = [1 => 4.91, 3 => 6.37, 6 => 6.77, 12 => 7.83];
            $rate = $rate[$jangka_waktu];

            // (nominal * rate) / 12 * jangka_waktu
            $hasil = ($nominal * ($rate / 100)) / 12 * $jangka_waktu;
            $hasilPerBulan = ($hasil / $jangka_waktu);
        }

        ?>

        <p><strong>NILAI ESTIMASI BAGI HASIL / TAHUN : <?php echo "Rp. " . number_format($hasil) ?></strong></p>
        <p><strong>NILAI ESTIMASI BAGI HASIL / BULAN :<?php echo "Rp. " . number_format($hasilPerBulan) ?></strong></p>




        <?php
        $total = 0;
        if (isset($_POST['proses2'])) {
            $jumlah_nominal = $_POST['nominal_pembiayaan'];
            $jangka_waktu = $_POST['jangka_waktu_pembiayaan'];
            $rate = 18 / 100;
            $total = ($jumlah_nominal * $rate) / $jangka_waktu + ($jumlah_nominal / $jangka_waktu);
        }
        ?>

        <p>
            <strong>Estimasi Angsuran Perbulan : <?php echo "Rp." . number_format($total) ?></strong>
        </p>
    <?php endif ?>
</body>

</html>