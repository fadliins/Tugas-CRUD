<?php
include_once("koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$posisi= $_POST['posisi'];
$query="UPDATE db_karyawan.tb_karyawan SET
    nama_karyawan='$nama',posisi_karyawan='$posisi' WHERE id_karyawan='$id'";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "Update Data Gagal";
}
?>