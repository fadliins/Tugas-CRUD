<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="DELETE from tb_karyawan WHERE id_karyawan='$id'";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}
?>