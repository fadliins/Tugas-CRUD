<?php
include_once("koneksi.php");
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$posisi = $_POST['posisi_karyawan'];
$query="INSERT INTO tb_karyawan
    (id_karyawan,nama_karyawan,posisi_karyawan) VALUE
    ('$id_karyawan','$nama_karyawan','$posisi')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "Input Data Gagal";
}
?>