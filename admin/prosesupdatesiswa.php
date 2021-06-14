<?php
include '../koneksi.php';
$nimlama=$_GET['nim'];
$nim=$_POST['nim'];
$namasiswa=$_POST['namasiswa'];
$kelas=$_POST['kelas'];
$jk=$_POST['jk'];

$query=mysqli_query($koneksi, "UPDATE siswa SET nim='$nim', namasiswa='$namasiswa', kelas='$kelas', jk='$jk' WHERE nim='$nimlama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>
