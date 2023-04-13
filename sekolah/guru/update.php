<?php 
 
 
?>



<?php
// Include config file
require_once "config.php";
$id = $_GET['id'];
function query($query){
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;

    }
    return $rows;
}
$query = query("SELECT * FROM guru WHERE id = '$id'")[0];

function upload_gambar(){
    $nama = time() . $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"source/".$nama);
    return $nama;
}

if(isset($_POST['kirim'])){
    $nama =$_POST['nama'];
    $kelas = $_POST['jenis_kelamin'];
    $gambarlama = $_POST['gambarlama'];
    $Jual = $_POST['mapel'];
    

    if($_FILES['image']['error'] === 4){
        $gambar = $gambarlama;
    }else{
        // Hapus gambar lama jika ada dan unggah gambar baru
        if(file_exists("source/".$gambarlama)){
            unlink("source/".$gambarlama);
        }
        $gambar = upload_gambar();
    }

    $insert= mysqli_query($link, "UPDATE guru SET
                                    name = '$gambar',
                                    nama = '$nama',
                                    jenis_kelamin = '$kelas',
                                   
                                    mapel = '$Jual' 
                                    WHERE id = '$id'");
    
    if($insert){
        echo"<script> alert('berhasil');
                        document.location.href= 'tampil.php'; </script>";
    }
}
 
$query_mapel = mysqli_query($link, "SELECT * FROM matpel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="http://localhost/toko/myweb/logo.png">
    <link rel="shortcut icon" type="image/png" href="myweb/logo.png">

  
</head>
<body style="background-image:url(../gambar/welcome.jpg); background-size:cover;">
    <div class="wrapper" style="background-color:white;">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Perbarui data</h2>
                    </div>
                    <ol class="breadcrumb">
                  
                  <li class="active">silahkan edit data dengan data yang valid !!!</li>
              </ol>
                    
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group <?php echo (!empty($nama_err)) ? 'has-error' : ''; ?>">
                       
                            <label>Nama guru</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $query['nama']; ?>">
                        </div>
                        <div>
                            <label for="">Jenis Kelamin</label><br>
                           <input type="radio" name="jenis_kelamin" value="laki-laki"  <?= ($query['jenis_kelamin'] == 'laki-laki')? "checked": ''?>>laki-laki
                           <input type="radio" name="jenis_kelamin" value="perempuan"  <?= ($query['jenis_kelamin'] == 'perempuan')? "checked": ''?>>perempuan
                        </div><br>
                        <div>
                            <label for="">foto</label>
                            <input type="file" name="image" id="image" value="">
                            <img src="../guru/source/<?php echo $query['name']; ?>" width="10%" alt="">
                        </div><br>
                        <div>
                        <label>Mapel</label>
                        <select name="mapel" id="">
                                <?php
                                if (mysqli_num_rows($query_mapel) > 0) {
                                    while($data = mysqli_fetch_assoc($query_mapel)) {
                                        ?>
                                        <option value="<?= $data['mapel'] ?>" <?= ($data['mapel'] == $query['mapel']) ? "selected" : "" ?>><?= $data['mapel'] ?></option>
                                        <?php
                                    }
                                }
                                else {
                                    ?>
                                    <option value="tidak ada">Tidak ada mapel</option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                       
                       
                        <br><br>
                        <input type="hidden" value="<?= $query['name'];?>" name="gambarlama">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="perbarui" name="kirim">
                        <a href="tampil.php" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>