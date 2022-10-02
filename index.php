<?php
include_once("koneksi.php");
$query = "SELECT * FROM tb_karyawan";
$hasil = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Karyawan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>Data Karyawan</h2>
    </div>
    <a href="tambahkaryawan.php" class="btn btn-primary mb-1 mt-1">Tambah Karyawan</a>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id_Karyawan</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                <tr>
                    <th scope="row"> <?php echo $data['id_karyawan']; ?></th>
                    <td> <?php echo $data['nama_karyawan']; ?> </td>
                    <td> <?php echo $data['posisi_karyawan']; ?> </td>
                    <td> <a href="ubahkaryawan.php?id=<?php echo $data ['id_karyawan']?>">Edit</a>
        |               <a href="hapuskaryawan.php?id=<?php echo $data['id_karyawan']?>">Delete</a> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-
3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
wFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>