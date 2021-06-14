<?php
include '../koneksi.php';
$kodebukulama=$_GET['kodebuku'];
$kodebuku=$_POST['kodebuku'];
$namabuku=$_POST['namabuku'];
$pengarang=$_POST['pengarang'];
$tahunterbit=$_POST['tahunterbit'];

$query=mysqli_query($koneksi, "UPDATE perpus SET kodebuku='$kodebuku', namabuku='$namabuku', pengarang='$pengarang', tahunterbit='$tahunterbit' WHERE kodebuku='$kodebukulama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>
