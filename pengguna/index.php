<?php
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['username'])) header("Location:../index.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <style>
        body { 
            background-image: url("../assets/1.jpg");
        }
    </style>
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand" href="#">Pengguna Perpustakaan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="alert-info" href="#"><span class="glyphicon glyphicon-user"></span> Selamat Datang, <?php echo $_SESSION["username"] ?></a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
    </div>
    <h1 class="text-center">List Data dan Tambah Data</h1>
    <div class="container panel panel-default">
        <h3>List Data Buku</h3>
        <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <th>Kode Buku</th>
                <th>Nama Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $data=mysqli_query($koneksi, "SELECT * FROM perpus ") or die(mysqli_error($koneksi));
                foreach($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['kodebuku']?></td>
                    <td><?php echo $baris['namabuku']?></td>
                    <td><?php echo $baris['pengarang']?></td>
                    <td><?php echo $baris['tahunterbit']?></td>
                </tr>
                <?php }  ?>
                </tbody>
        </table>
        </div>
    </div>
    <div class="container panel panel-default">
        <h3>List Data Siswa</h3>
        <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <th>NIM Siswa</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $data=mysqli_query($koneksi, "SELECT * FROM siswa ") or die(mysqli_error($koneksi));
                foreach($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['nim']?></td>
                    <td><?php echo $baris['namasiswa']?></td>
                    <td><?php echo $baris['kelas']?></td>
                    <td><?php echo $baris['jk']?></td>
                </tr>
                <?php }  ?>
                </tbody>
        </table>
        </div>
    </div>
    <div class="container panel panel-default">
        <h3>List Data Peminjaman</h3><a target="_blank" href="tambahtransaksi.php"> + Tambah Peminjaman</a>
        <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <th>ID Peminjaman</th>
                <th>NIM Siswa</th>
                <th>Nama Siswa</th>
                <th>Buku Yang Di Pinjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $data=mysqli_query($koneksi, "SELECT * FROM transaksi ") or die(mysqli_error($koneksi));
                foreach($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['id']?></td>
                    <td><?php echo $baris['nim']?></td>
                    <td><?php echo $baris['namasiswa']?></td>
                    <td><?php echo $baris['buku']?></td>
                    <td><?php echo $baris['tglpinjam']?></td>
                    <td><?php echo $baris['tglkembali']?></td>
                </tr>
                <?php }  ?>
                </tbody>
        </table>
        </div>
    </div>
    <div class="container panel panel-default">
        <h3>List Data Pengembalian</h3>
        <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <th>Nama Siswa</th>
                <th>Buku Yang Di Pinjam</th>
                <th>ID Peminjaman</th>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $data=mysqli_query($koneksi, "SELECT * FROM pengembalian ") or die(mysqli_error($koneksi));
                foreach($data as $baris){ ?>
                <tr>
                    <td><?php echo $baris['namasiswa']?></td>
                    <td><?php echo $baris['buku']?></td>
                    <td><?php echo $baris['id']?></td>
                </tr>
                <?php }  ?>
                </tbody>
        </table>
        </div>
    </div>
    <footer>
      <div class="container">
        <p class="text-muted text-center">Copyright ?? 2021 Kelompok 8. All Rights Reserved</p>
      </div>
    </footer>
</body>
</html>