<?php
        include '../koneksi.php';
        $nim=$_GET['nim'];

        $query=mysqli_query($koneksi, "DELETE FROM siswa WHERE nim='$nim' ")
        or die(mysqli_error($koneksi));

        if ($query){
                header("Location: index.php");
            } else {
                echo "Gagal Hapus Data";
            }
?>