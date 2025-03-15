<?php
require_once "koneksi.php";
session_start();
session_regenerate_id();

if (empty($_SESSION['Emailll'])) {
    header("location: login.php");
}

//STATUS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['idSt'];

    $update_0 = mysqli_query($conn, "UPDATE profiles SET status = 0");
    $update_1 = mysqli_query($conn, "UPDATE profiles SET status = 1 WHERE id = $id");
    if ($update_1) {
        header("location: profile.php");
    } else {
        header("location:");
    }
}

$selectProfile = mysqli_query($conn, "SELECT * FROM profiles");
$rows = mysqli_fetch_all($selectProfile, MYSQLI_ASSOC);
// var_dump($rows);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "./inc/navbar.php" ?>

    <div class="container">
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center fw-bold">Manage Profile</div>
                    <div class="card-body">
                        <div class="mt-1 mb-1">
                            <a href="add_edit_profile.php" class="btn btn-primary">Create</a>
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Photo</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Deksripsi</th>
                                    <th>Settings</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($rows as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><img src="assets/uploads/<?php echo $row['photo'] ?>" width="135" alt=""></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['jabatan'] ?></td>
                                        <td><?php echo $row['deksripsi'] ?></td>
                                        <td>
                                            <a href="add_edit_profile.php?idEdt=<?php echo base64_encode($row['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-success btn-sm">Delate</a>
                                            <form action="?idSt=<?php echo $row['id'] ?>" method="post">
                                                <input onchange="this.form.submit()" type="radio" <?php echo isset($row['status']) && $row['status'] == 1 ? 'checked' : '' ?> name="status" value="1">
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </table>
                        </div>
                    </div>
                </div>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>