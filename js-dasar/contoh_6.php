<html>

<head>
    <title>Latihan Dengan Objek Select</title>
</head>

<body>
    <script languange="JavaScript">
        <!--
        function tekan() {
            var jurusanstr = (document.fform.Jurusan.value);
            document.fform.Ojurusan.value = jurusanstr;
        }
        //
        -->
    </script>
    <form name="fform">
        <H1> Penggunaan Objek Select</H1>
        <hr>
        <h3>Masukan :<h3>
                Jurusan Di UNIKOM :<select name="Jurusan" Size="1">
                    <option value="Teknik Informatika"> Teknik Informatika </option>
                    <option value="Manajemen Informatika"> Manajemen Informatika </option>
                    <option value="Teknik Komputer"> Teknik Komputer </option>
                    <option value="Teknik Industri"> Teknik Industri </option>
                    <option value="Teknik Elektro"> Teknik Elektro </option>
                    <option value="Teknik Sipil"> Teknik Sipil </option>
                    <option value="Teknik Arsitektur"> Teknik Arsitektur </option>
                    <option value="Teknik Perencanaan Wil. Kota "> Perencanaan Wil. Kota </option>
                </select>
                <p><input type="button" value="kirim" onclick="tekan()">
                    <input type="reset" value="ulang">
                <H3>Output jurusan :</H3>
                <input type="text" name="Ojurusan" size="30">
    </form>
</body>

</html>