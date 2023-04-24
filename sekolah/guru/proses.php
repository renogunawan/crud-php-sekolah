<?php 
require_once "config.php";

function upload_gambar(){
    $nama =time() . $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"source/".$nama);
    return $nama;
}

if(isset($_POST['kirim'])){
    $nama =$_POST['nama'];
    $kelas = $_POST['jenis_kelamin'];
    $gambar =upload_gambar();
    $mapel =$_POST['mapel'];
    

    $insert = mysqli_query($link, "insert into guru(name,nama,jenis_kelamin,mapel) values('$gambar','$nama','$kelas','$mapel')");

    if($insert){
        echo"<script> alert('berhasil');
                        document.location.href= 'tampil.php'; </script>";
    }else{
        echo"<script>alert('kode duplicate !!!')
        document.location.href= 'create.php'; 
        </script>";
                    
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