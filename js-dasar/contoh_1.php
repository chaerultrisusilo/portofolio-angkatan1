<html>

<head>
    <title>Memasukkan Bilangan</title>
</head>

<body>
    <P>
        <script language="JavaScript">
            <!--
            function jumlah() {
                var bil1 = parseFloat(document.fform.bilangan1.value);
                if (isNaN(bil1))
                    bil1 = 0.0;
                var bil2 = parseFloat(document.fform.bilangan2.value);
                if (isNaN(bil2))
                    bil2 = 0.0;
                var hasil = bil1 + bil2;
                alert("Hasil Penjumlahan = " + hasil);
            }
            //
            -->
        </script>
    </P>
    <form name="fform">
        <h1><br>Memasukkan Data Lewat Keyboard</H1>
        <pre>
Bilangan Pertama :<input type="text" size="11" name="bilangan1">
Bilangan Kedua :<input type="text" size="11" name="bilangan2">
</pre>
        <p>
            <input type="button" value="Jumlahkan" onclick="jumlah()">
            <input type="reset" value="Ulang">
    </form>
</body>

</html>