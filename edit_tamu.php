<?php
include 'koneksi.php';
$idtamu = $_GET['idtamu'];
$sql = "select * from tamu where idtamu='$idtamu'";
$hasil = mysqli_query($conn, $sql);
while ($r = mysqli_fetch_assoc($hasil)){
    $nama=$r['nama'];
    $email=$r['email'];
    $pesan=$r['pesan'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flowers - Best Flowers Online Store</title>

        <link rel="stylesheet" href="css/about.css">
    </head>
    <body>

        <nav class="navbar"></nav>

        <!--hero section-->
        <header class="hero-section">
            <div class="content">
                <h1 class="heading">Selamat Datang di Menu tambah data</h1>
                <p class="sub-heading">Di Toko Bunga Kami</p>
                <p class="paragraph">Silahkan Sertakan nama anda</p>
            </div>
        </header>
        <div class="container">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">Edit Tamu</h5>
                        <form action="updt_tamu.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nama Tamu</label>
                                <input type="text" name="nama" class="form-control" value=<?= $nama; ?>>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" value=<?= $email; ?>>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Example textarea</label>
                                <textarea class="form-control" name="pesan" rows="3"><?= $pesan; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="idtamu" class="btn btn-primary" value="<?= $idtamu?>">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </form>
                    <a href="bukutamu.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>

        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>