<?php
include 'koneksi.php';
$idtamu = $_POST['idtamu'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$sql="insert into tamu(idtamu,nama,email,pesan) values('$idtamu','$nama','$email','$pesan')";
$hasil = mysqli_query($conn, $sql);
if(!$hasil){
    echo("Query Error");
}else{
    header("location:bukutamu.php");
}