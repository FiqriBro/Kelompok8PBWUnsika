<?php 

include '../koneksi.php';

$kodebuku    =$_POST['kodebuku'];
$namabuku    =$_POST['namabuku'];
$pengarang   =$_POST['pengarang'];
$tahunterbit =$_POST['tahunterbit'];

$query=mysqli_query($koneksi, "INSERT INTO perpus(kodebuku, namabuku, pengarang, tahunterbit) VALUES ('$kodebuku', '$namabuku', '$pengarang', '$tahunterbit') ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
} else{
    echo "Gagal Input Data";
}
?>