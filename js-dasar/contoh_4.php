<html>

<head>
    <title>Latihan Dengan Objek Checkbox</title>
</head>

<body>
    <script languange="JavaScript">
        <!--
        function radio_box(form) {
            var ket = "";
            var ket1 = "";
            if (form.bola.checked == true) {
                ket = "Nonton Bola";
            }
            if (form.tv.checked == true) {
                ket1 = " Nonton Tv";
            }
            alert('Hobby anda ' + ket + '' + ket1);
        }
        //
        -->
    </script>
    <form>
        <H1> Memasukkan Data Dengan Objek Checkbox</H1>
        <hr>
        <p>Hobby anda :
            <input type="checkbox" value="ON" name="bola">Nonton Sepak Bola
            <input type="checkbox" value="ON" name="tv">Nonton televisi
        </p>
        <hr>
        <p><input type="button" value="CONFIRM" onclick="radio_box(this.form)">
            <input type="reset" value="RESET">
        </p>
    </form>
</body>

</html>