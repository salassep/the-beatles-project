<?php 
// mengambil data dari file users.json dan mengubahnya menjadi array
$json = file_get_contents('./data/users.json');
$json_data = json_decode($json, TRUE);

// mengecek apakah tombol daftar sudah diklik
if(isset($_POST['tombol-daftar'])){
  $status = 0;
  $username = strtolower($_POST['username']);
  for($i=0; $i < count($json_data); $i++) {
    if ($json_data[$i]['username'] == $username) {
      $status = 1;
      echo "<script>alert('gagal menambahkan, username sudah ada!')</script>";
    }
  }
  if (!$status) {
    $add_arr = array(
      'username' => $username,
      'password' => $_POST['password'],
      'nama_depan' => $_POST['nama-depan'],
      'nama_belakang' => $_POST['nama-belakang']
    );
    
    $json_data[] = $add_arr;
    $json_data = json_encode($json_data, JSON_PRETTY_PRINT);
    file_put_contents('./data/users.json', $json_data);

    echo '<script> alert("Anda berhasil terdaftar ! "); window.location.href="login.php"; </script>';
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style/main-style.css">
  <link rel="stylesheet" href="./assets/style/navbar-style.css">
  <link rel="stylesheet" href="./assets/style/login-style.css">
  <title>Favoritmu</title>
</head>
<body>

<!-- Navigasi -->
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
<!-- Akhir navigasi -->

<!-- form daftar -->
  <div class="login-page">
    <div class="form">
      <form method="POST" class="login-form" autocomplete="off">
        <input type="text" name="nama-depan" placeholder="Nama Depan" required/>
        <input type="text" name="nama-belakang" placeholder="Nama Belakang"/>
        <input type="text" name="username" placeholder="username" required/>
        <input type="password" name="password" placeholder="password" required/>
        <button name="tombol-daftar">daftar</button>
      </form>
    </div>
  </div>
<!-- akhir form daftar -->
</body>

<script>
  // mengubah warna background dari navigasi yang aktif
  document.getElementsByTagName('li')[0].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>

</html>