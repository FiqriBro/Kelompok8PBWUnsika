<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
</head>
<body>
<table class="table table-bordered table-hover">
    <br>
    <thead>
    <tr>
        <th>ID Peminjaman</th>
        <th>NIM</th>
        <th>Nama Siswa</th>
        <th>Buku</th>
        <th>TGL Pinjam</th>
        <th>TGL Kembali</th>
    </tr>
    </thead>
    <?php
    include "../koneksi.php";
    $sql="select * from transaksi order by id asc";

    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;

        ?>
        <tbody>
        <tr>
            <td><?php echo $data["id"]; ?></td>
            <td><?php echo $data["nim"];   ?></td>
            <td><?php echo $data["namasiswa"];   ?></td>
            <td><?php echo $data["buku"];   ?></td>
            <td><?php echo $data["tglpinjam"];   ?></td>
            <td><?php echo $data["tglkembali"];   ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</body>
</html>