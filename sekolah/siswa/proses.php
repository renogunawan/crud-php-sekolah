<?php 
require_once "config.php";

if(isset($_POST['kirim'])){
    $N = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $Jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $insert = mysqli_query($link, "INSERT INTO siswa (nama, nisn, jenis_kelamin, agama) VALUES ('$N', '$nisn', '$Jk', '$agama')");

    if($insert){
        echo "<script>alert('berhasil');
            window.location.href= 'tampil.php'; </script>";
    }else {
        echo "<script>alert('nisn duplicat');
            window.location.href= 'create.php'; </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="http://localhost/toko/myweb/logo.png">
    <title>Proses</title>
</head>
<body>
</body>
</html>
