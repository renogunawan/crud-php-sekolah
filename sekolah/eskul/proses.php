<?php 
require_once "config.php";

if(isset($_POST['kirim'])){
    $N = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $no_hp = $_POST['no_hp'];
    $ekstrakulikuler = $_POST['ekstrakulikuler'];
    

    $insert = mysqli_query($link, "INSERT INTO ekskul (nama, kelas,  no_hp, ekstrakulikuler ) VALUES ('$N', '$kelas', '$no_hp', '$ekstrakulikuler')");

    if($insert){
        echo "<script>alert('berhasil');
            window.location.href= 'tampil.php'; </script>";
    }else {
        echo "<script>alert('nomer hp duplicate');
            window.location.href= 'create.php'; </script>";
    }
}
?>
