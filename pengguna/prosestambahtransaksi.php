<?php 

include '../koneksi.php';

$id           =$_POST['id'];
$nim          =$_POST['nim'];
$namasiswa    =$_POST['namasiswa'];
$buku         =$_POST['buku'];
$tglpinjam    =$_POST['tglpinjam'];
$tglkembali   =$_POST['tglkembali'];

$query=mysqli_query($koneksi, "INSERT INTO transaksi(id, nim, namasiswa, buku, tglpinjam, tglkembali) VALUES ('NULL','$nim', '$namasiswa', '$buku', '$tglpinjam', '$tglkembali') ")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: index.php");
} else{
    echo "Gagal Input Data";
}
?>