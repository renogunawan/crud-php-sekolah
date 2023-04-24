<title>Register</title>

<?php
include_once 'config.php';
 
error_reporting(0);
 
?>

</style>


<?php
$sql="SELECT * FROM register";
try{
  $query=mysqli_query($link,$sql);
} catch(mysqli_sql_exception $e){}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body{ background-image: url("bg-01.jpg");
  background-size: cover;
}
.input-container {
 display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 5px;
  background-color: #f2f2f2;
}

.input-field:focus {
  border: 2px solid dodgerblue;
  background-color: white;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<button class="btn-primary"><a href="index.php" > <i class="fa fa-home"></i>  back</a></button>
<form action="" method="post" style="max-width:500px;margin:auto"><br><br><br><br> <br>
 <center> <h2 class="sans-serif">Register</h2></center> <br><br><br><br><br>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="nama">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="konfirmasi password" name="confirm_password">
</div>

  <button type="submit" class="btn" name="TambahUser"> <i class="fa fa-plus"> </i> &nbsp; Register</button>
  
</form>

<?php
    // ini proses input

if(isset($_POST['TambahUser'])){

  $username = $_POST['nama'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password) {
  echo "<script>alert('Sandi tidak cocok.')</script>";
  exit();
}
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

try{
  $query = "INSERT INTO register (nama, password) VALUES ('$username', '$hashedPassword')";
  if(mysqli_query($link,$query)){
    header('location:index.php');
}else{
   echo mysqli_error($link);
} } catch(mysqli_sql_exception $e){
  if ($e->getCode() == 1062) {
    // Duplicate user
    echo "<script>alert('username sudah digunakan !!')</script>";
} else {
    throw $e;// in case it's any other error
}
}
// Membuat hash dari password


// Menyimpan data pengguna ke database

$result = mysqli_query($link, $query);

if ($result) {
  // Jika penyimpanan data pengguna berhasil, arahkan ke halaman login
  header("Location: index.php");
  exit();
} else {
  // Jika penyimpanan data pengguna gagal, tampilkan pesan error
  echo "<script>alert('username telah digunakan')</script>";
}
}
?> 
</body>
</html>