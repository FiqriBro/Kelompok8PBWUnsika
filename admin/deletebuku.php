<?php
        include '../koneksi.php';
        $kodebuku=$_GET['kodebuku'];

        $query=mysqli_query($koneksi, "DELETE FROM perpus WHERE kodebuku='$kodebuku' ")
        or die(mysqli_error($koneksi));

        if ($query){
                header("Location: index.php");
            } else {
                echo "Gagal Hapus Data";
            }
?>