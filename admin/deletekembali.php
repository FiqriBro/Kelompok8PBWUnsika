<?php
        include '../koneksi.php';
        $idp=$_GET['idp'];

        $query=mysqli_query($koneksi, "DELETE FROM pengembalian WHERE idp='$idp' ")
        or die(mysqli_error($koneksi));

        if ($query){
                header("Location: index.php");
            } else {
                echo "Gagal Hapus Data";
            }
?>