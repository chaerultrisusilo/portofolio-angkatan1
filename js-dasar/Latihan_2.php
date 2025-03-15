<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <h3>Universitas Indonesia</h3>
    <script>
        function KirimData() {
            var nim = document.fform.nim.value
            var nama = document.fform.nama.value
            var kelamin = document.fform.kelamin.value
            var agama = document.fform.agama.value
            var status = document.fform.status.value
            var jurusan = document.fform.jurusan.value
            var komentar = document.fform.komentar.value
            alert("NIM : " + nim + "\nNama : " + nama + "\nJenis Kelamin : " + kelamin + "\nAgama : " + agama + "\nStatus : " + status + "\nJurusan : " + jurusan)

            document.getElementById("nim").innerHTML = nim
            document.getElementById("nama").innerHTML = nama
            document.getElementById("kelamin").innerHTML = kelamin
            document.getElementById("agama").innerHTML = agama
            document.getElementById("status").innerHTML = status
            document.getElementById("jurusan").innerHTML = jurusan
            document.getElementById("komentar").innerHTML = komentar

        }
    </script>
    <form name="fform" onsubmit="return false;">


        <hr>
        <pre>
NIM             : <input type="text" size="11" name="nim">

Nama Mahasiswa  : <input type="text" size="25" name="nama">

Jenis Kelamin   : <select name="kelamin">
            <option value="">Pilih Jenis Kelamin
            </option>
            <option value="Perempuan"> Perempuan
            </option>
            <option value="Laki-Laki">Laki-Laki
            </option></select>

Agama           : <select name="agama" Size="1">
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Kristen-Protestan">Kristen Protestan</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            </option></select></pre>

        <pre><label for="">Status          :</label><input type="radio" id="lajang" name="status" value="lajang">Lajang</label><input type="radio" id="menikah" name="status" value="menikah">Menikah
        
Jurusan Di UI   :<select name="jurusan">
            <option value="Teknik Informatika"> Teknik Informatika </option>
            <option value="Manajemen Informatika"> Manajemen Informatika </option>
            <option value="Teknik Komputer"> Teknik Komputer </option>
            <option value="Teknik Industri"> Teknik Industri </option>
            <option value="Teknik Elektro"> Teknik Elektro </option>
            <option value="Teknik Sipil"> Teknik Sipil </option>
            <option value="Teknik Arsitektur"> Teknik Arsitektur </option>
            <option value="Teknik Perencanaan Wil. Kota "> Perencanaan Wil. Kota </option>
        </select>

Komentar  : <textarea name="komentar" cols="40" rows="5" id=""></textarea>

<button type="submit" onclick="KirimData()">Submit</button>
        </pre>
    </form>
    <div>
        <p id="nim"></p>
        <p id="nama"></p>
        <p id="kelamin"></p>
        <p id="agama"></p>
        <p id="status"></p>
        <p id="jurusan"></p>
        <p id="komentar"></p>
    </div>
</body>

</html>


</body>

</html>