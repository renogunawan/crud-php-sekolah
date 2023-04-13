<?php 
require_once "config.php";

if(isset($_POST['kirim'])){
    $kode_buku = $_POST['kode_buku'];
    $mapel = $_POST['mapel'];

    $insert = mysqli_query($link, "INSERT INTO matpel (kode_buku, mapel ) VALUES ('$kode_buku', '$mapel')");

    if($insert){
        echo "<script>alert('berhasil');
            window.location.href= 'tampil.php'; </script>";
    }
    else {
        echo "<script>alert('kode buku duplicate');
            window.location.href= 'create.php'; </script>";
    }}
?>
