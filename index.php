<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body { 
            background-image: url("assets/1.jpg");
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username dan Password Tidak Sesuai !');history.go(-1);</script>";
		}
	}
	?>
    <div class="container">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <h1 class="text-center">Sistem Informasi Perpustakaan</h1>
            <div class="jumbotron" style="margin-top: 50px;">
            <h3>Login Terlebih Dahulu</h3>
                <form action="cek_login.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>

</body>
</html>