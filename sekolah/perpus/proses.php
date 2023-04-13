<?php 
require_once "config.php";

if(isset($_POST['kirim'])){
    $N = $_POST['nama'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $buku = $_POST['buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (!checkdate(date('m', strtotime($tgl_pinjam)), date('d', strtotime($tgl_pinjam)), date('Y', strtotime($tgl_pinjam)))) {
        echo "<script>alert('Format tanggal tidak valid!');
        document.location.href= 'create.php';</script>";
        exit;
    }
    $tgl_pinjam= date('d-m-Y', strtotime($tgl_pinjam));

    if (!checkdate(date('m', strtotime($tgl_kembali)), date('d', strtotime($tgl_kembali)), date('Y', strtotime($tgl_kembali)))) {
        echo "<script>alert('Format tanggal tidak valid!');
        document.location.href= 'create.php';</script>";
        exit;
    }
    $tgl_kembali= date('d-m-Y', strtotime($tgl_kembali));

    $insert = mysqli_query($link, "INSERT INTO perpus (nama, nama_peminjam, buku, tgl_pinjam, tgl_kembali ) VALUES ('$N', '$nama_peminjam', '$buku', '$tgl_pinjam', '$tgl_kembali')");
   

    if($insert){
        echo "<script>alert('berhasil');
            window.location.href= 'tampil.php'; </script>";
    }}
?>
