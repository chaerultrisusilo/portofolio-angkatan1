<html>

<head>
    <title>Latihan Dengan Objek Radio</title>
</head>

<body>
    <script languange="JavaScript">
        <!--
        function radio_box(form) {
            var ket = "";
            if (form.wanita.checked == true) {
                ket = "Wanita";
            } else {
                ket = "Pria";
            }
            alert('Anda adalah seorang ' + ket);
        }
        //
        -->
    </script>
    <form>
        <H1> Memasukkan Data Dengan Objek Radio</H1>
        <hr>
        <p><input type="radio" value="wanita" name="wanita">Wanita</p>
        <hr>
        <p><input type="button" value="CONFIRM" onclick="radio_box(this.form)">
            <input type="reset" value="RESET">
        </p>
    </form>
</body>

</html