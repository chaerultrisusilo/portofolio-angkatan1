<html>

<head>
    <title>Latihan Dengan Objek TextArea</title>
</head>

<body>
    <script languange="JavaScript">
        <!--
        function tekan() {
            var ketstr = (document.fform.Ket.value);
            document.fform.Oket.value = ketstr;
        }
        //
        -->
    </script>
    <form name="fform">
        <H1> Memasukkan Data Dengan Objek TextArea</H1>
        <hr>
        <h3>Keterangan :<h3><br>
                <textarea name="Ket" rows="3" cols="30"></textarea>
                <BR><BR>
                <input type="button" value="kirim" onclick="tekan()">
                <input type="reset" value="ulang">
                <H3>Output Keterangan :</H3>
                <textarea name="Oket" rows="3" cols="30"></textarea>
    </form>
</body>

</html>