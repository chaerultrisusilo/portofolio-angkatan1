<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Saldo</title>
</head>

<body>
    <div class="container">
        <h1>Perhitungan Bunga</h1>
        <label for="data-input">Data Input:</label>
        <script>
            // function hitungtotal() {
            var saldo = 100000;
            var bunga = 10 / 100;
            var bulan = 5;

            for (let index = 0; index < bulan; index++) {
                saldo = saldo + (saldo * bunga);

                console.log(saldo);

            }
        </script>
</body>

</html>