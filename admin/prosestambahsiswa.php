<?php 

include '../koneksi.php';

$nim          =$_POST['nim'];
$namasiswa    =$_POST['namasiswa'];
$kelas        =$_POST['kelas'];
$jk           =$_POST['jk'];

$query=mysqli_query($koneksi, "INSERT INTO siswa(nim, namasiswa, kelas, jk) VALUES ('$nim', '$namasiswa', '$kelas', '$jk') ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
} else{
    echo "Gagal Input Data";
}
?>