<?php
        include '../koneksi.php';
        $id=$_GET['id'];

        $query=mysqli_query($koneksi, "DELETE FROM transaksi WHERE id='$id' ")
        or die(mysqli_error($koneksi));

        if ($query){
                header("Location: index.php");
            } else {
                echo "Gagal Hapus Data";
            }
?>