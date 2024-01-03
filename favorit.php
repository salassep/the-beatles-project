<?php 
$status = file_get_contents('./data/status.json');
$data_playlist = file_get_contents('./data/playlist.json');
$data_songs = file_get_contents('./data/songs.json');
$status = json_decode($status, TRUE);
$data_playlist = json_decode($data_playlist, TRUE);
$data_songs = json_decode($data_songs, TRUE);

if ($status['status'] == 'out') {
  return header('Location: login.php');
}

function filterByUsername($items, $username){
  return array_filter($items, function($item) use ($username) {
      if($item['username'] == $username){
          return true;
      }
  });
}

$data_playlist_filtered = filterByUsername($data_playlist, $_GET['username']);

if (isset($_POST['btn-playlist'])){
  $add_arr = array(
    'username' => $_GET['username'],
    'judul' => $_POST['judul'],
    'album' => $_POST['album'],
  );
  
  $data_playlist[] = $add_arr;
  $data_playlist = json_encode($data_playlist, JSON_PRETTY_PRINT);
  file_put_contents('./data/playlist.json', $data_playlist);
  header("Refresh:0");
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
  <link rel="stylesheet" href="./assets/style/favorit-style.css">
  <?php ?>
  <title>Favoritmu</title>
</head>
<body>
  <nav class="fixed-bar">
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/thebeattlesproyek/assets/php/"; include($IPATH."headernav.html");?>
  </nav>
  <div class="container">
    <table>
      <tr class="header">
        <th>- THE BEATLES -</th>
      </tr>
    </table>
    <?php if (count($data_playlist_filtered) == 0) : ?>
      <table>
        <tr>
          <th>Judul</th>
          <th>Album</th>
          <th>Action</th>
        </tr>
        <tr>
          <td colspan="3" style="text-align=center"> (belum ada lagu yang dimasukkan) </td>
        </tr>
      </table>
    <?php else : ?>
      <table>
        <tr>
          <th>Judul</th>
          <th>Album</th>
          <th>Action</th>
        </tr>
        <?php $index = 0; ?>
        <?php foreach($data_playlist_filtered as $x): ?>
          <tr class="song">
            <td><?=$x['judul']?></td>
            <td><?=$x['album']?></td>
            <th><a href="./utils/fungsiHapus.php?id_hapus=<?= $index ?>&username=<?= $x['username']?>"><button>-</button></a></th>
          </tr>
        <?php $index++; endforeach; ?>
      </table>
    <?php endif; ?>
    <table>
      <tr>
        <form action='' method="post">
          <th>
            <input type="text" name="judul" placeholder="masukkan judulnya jude" required/>
          </th>
          <th>              
            <select name='album'>
              <?php foreach($data_songs as $song):  ?>
                <option value="<?= $song['album']?>"><?=$song['album']?></option>
              <?php endforeach; ?>
            </select>
          </th>
          <th><button name="btn-playlist">+</button></th>
        </form>
      </tr>
    </table>
    <a href="./utils/keluar.php?status=<?='out'?>"><button>&#10006;</button></a>
  </div>
</body>
<script>
  document.getElementsByTagName('li')[0].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>