<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
<table class="table table-bordered table-hover">
    <br>
    <thead>
    <tr>
        <th>Kode Buku</th>
        <th>Nama Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
    </tr>
    </thead>
    <?php
    include "../koneksi.php";
    $sql="select * from perpus order by kodebuku asc";

    $hasil=mysqli_query($koneksi,$sql);
    $no=0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;

        ?>
        <tbody>
        <tr>
            <td><?php echo $data["kodebuku"]; ?></td>
            <td><?php echo $data["namabuku"];   ?></td>
            <td><?php echo $data["pengarang"];   ?></td>
            <td><?php echo $data["tahunterbit"];   ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</body>
</html>