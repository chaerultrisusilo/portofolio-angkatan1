<html>

<head>
    <title>Latihan Dengan Objek Text</title>
</head>

<body>
    <script languange="JavaScript">
        <!--
        function tekan() {
            var namastr = (document.fform.nama.value);
            var alamatstr = (document.fform.alamat.value);
            document.fform.onama.value = namastr;
            document.fform.oalamat.value = alamatstr;
        }
        //
        -->
    </script>
    <form name="fform">
        <H1> Memasukkan Data Dengan Objek Teks</H1>
        <hr>
        <PRE>
Nama Anda : <input type="text" size="11" name="nama">
Alamat : <input type="text" size="25" name="alamat">
</PRE>
        <BR>
        <input type="button" value="kirim" onclick="tekan()">
        <input type="reset" value="ulang">
        <H3>Output</H3>
        <PRE>
Jadi Nama Anda adalah :<input type="text" size="11" name="onama">
Alamat Anda di :<input type="text" size="25" name="oalamat">
</form>
</body>
</html>