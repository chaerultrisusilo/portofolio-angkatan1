<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<title>Contoh Tabel HTML</title>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .container {
        width: 20%;
        margin: 30px;
        background-color: white;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
</style>
</head>

<body>
    <script>
        function hitungtotal() {
            var nama = (document.fform.inama.value);
            var tujuan = (document.fform.itujuan.value);
            var jumlahtiket = parseFloat(document.fform.ijumlah.value);
            var kelas = (document.fform.ikelas.value);
            var ht = 0.0;
            var sub = 0.0;
            var diskon = 0.1;
            var total = 0.0;
        }

        if (tujuan == "Jakarta") {
            if (kelas == "Esekutif") {
                ht = 70000;
            } else if (kelas == "Bisnis") {
                ht = 40000;
            } else {
                ht = 10000;
            }
        }
        if (tujuan == "Solo") {
            if (kelas == "Esekutif") {
                ht = 80000;
            } else if (kelas == "Bisnis") {
                ht = 50000;
            } else {
                ht = 20000;
            }
        }
        if (tujuan == "Surabaya") {
            if (kelas == "Esekutif") {
                ht = 90000;
            } else if (kelas == "Bisnis") {
                ht = 60000;
            } else {
                ht = 30000;
            }
        }

        sub = ht * jumlahtiket;
        diskon = document.fform.imember.checked ? sub * 0.1 : 0
        total = sub - diskon;
        document.fform.otiket.value = ht;
        document.fform.osub.value = sub;
        document.fform.odiskon.value = diskon;
        document.fform.ototal.value = total;
    </script>

    <form name="fform">
        <table border="1" align="center" width="70%">
            <tr>
                <th width=100% colspan="2">
                    <h1>Travel Bintang Abadi

                    </h1>
                </th>
            </tr>
            <tr>
                <td width=100%>
                    <pre>
Nama :<input type="text" size="20" name="inama">
Tujuan :<select name="itujuan" size=1>
        <option value="Jakarta">Jakarta</option>
        <option value="Solo">Solo</option>
        <option value="Surabaya">Surabaya</option>
        </select>
kelas :<select name="ikelas" size=1>
        <option value="Esekutif">Esekutif</option>
        <option value="Bisnis">Bisnis</option>
        <option value="Ekonomi">Ekonomi</option>
        </select>
Jumlah Tiket :<input type="text" size="20" name="ijumlah">
Member       : <input type="checkbox" name="imember" >
                   </pre>
                <td width=100%>
                    <pre>
    Harga Tiket : <input type="text" class="readonly" name="otiket">
    Subtotal : <input type="text" class="readonly" name="osub">
    Diskon : <input type="text" class="readonly" name="odiskon">
    Total Bayar : <input type="text" class="readonly" name="ototal">

</pre>


                </td>
            </tr>
            <tr>
                <td><input type="button" onclick="hitungtotal()" value="hitung">
                    <input type="reset" value="ulang">
                </td>

            </tr>

    </form>


</body>

</html>