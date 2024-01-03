<?php 
$data_songs = file_get_contents('./data/lagu.json');
$data_songs = json_decode($data_songs, TRUE);
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
  <title>Lagu The Beatles</title>
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
    <table>
      <tr>
        <th>Judul</th>
        <th>Album</th>
        <th>Tahun</th>
      </tr>
      <?php foreach($data_songs as $x): ?>
        <tr class="song">
          <td><?=$x['Title']?></td>
          <td><?=$x['Album.debut']?></td>
          <td><?=$x['Year']?></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>
<script>
  document.getElementsByTagName('li')[2].style.backgroundColor = 'rgba(197, 201, 198, 0.2)';
</script>
</html>