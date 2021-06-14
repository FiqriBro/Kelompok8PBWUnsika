<?php 

include '../koneksi.php';

$idp          =$_POST['idp'];
$namasiswa    =$_POST['namasiswa'];
$buku         =$_POST['buku'];
$id           =$_POST['id'];

$query=mysqli_query($koneksi, "INSERT INTO pengembalian(idp, namasiswa, buku, id) VALUES ('NULL', '$namasiswa', '$buku', '$id') ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
} else{
    echo "Gagal Input Data";
}
?>