<?php
    session_start();
    include '../koneksi.php';
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
    <script>
        function runPopup(){
        window.alert("Data Berhasil di Input");
        };
    </script>
    <title>Document</title>
</head>
<body style="background-color : #F0FFFF;">
    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Perpustakaan</a>
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
    <h1 class="text-center">Form Pengembalian Buku</h1>
    <div class="container panel panel-default">
    <!-- Using Dropdown -->
        <h3>Tambah Pengembalian</h3>
        <div class="panel-body">
        <form action="proseskembalitransaksi.php" method="post" class="form">
        <div class="form-group">
            <label for="namasiswa">Nama Siswa</label>
            <select id="namasiswa" name="namasiswa" class="form-control" required>
                <option disabled selected value="">-- Pilih Nama Siswa --</option>
                <?php
                    include "koneksi.php";  // Using database connection file here
                    $records = mysqli_query($koneksi, "SELECT namasiswa FROM siswa");  // Use select query here 

                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option value='". $data['namasiswa'] ."'>" .$data['namasiswa'] ."</option>";  // displaying data in option menu
                    }	
                ?>  
            </select>
        </div>
        <div class="form-group">
            <label for="buku">Buku Yang di Pinjam</label>
            <select id="buku" name="buku" class="form-control" required>
                <option disabled selected value="">-- Pilih Buku --</option>
                <?php
                    include "koneksi.php";  // Using database connection file here
                    $records = mysqli_query($koneksi, "SELECT namabuku FROM perpus");  // Use select query here 

                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option value='". $data['namabuku'] ."'>" .$data['namabuku'] ."</option>";  // displaying data in option menu
                    }	
                ?>  
            </select>
        </div>
        <div class="form-group">
            <label for="id">ID Peminjaman</label>
            <select id="id" name="id" class="form-control" required>
                <option disabled selected value="">-- Pilih ID Peminjaman --</option>
                <?php
                    include "koneksi.php";  // Using database connection file here
                    $records = mysqli_query($koneksi, "SELECT id FROM transaksi");  // Use select query here 

                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option value='". $data['id'] ."'>" .$data['id'] ."</option>";  // displaying data in option menu
                    }	
                ?>  
            </select>
        </div>
        <button onclick="runPopup()" type="submit" class="btn btn-default">Submit</button>
        </form>
        </div>
    </div>
    <footer>
      <div class="container" style="padding-top: 60px;">
        <p class="text-muted text-center">Copyright ?? 2021 Kelompok 8. All Rights Reserved</p>
      </div>
    </footer>
</body>
</html>