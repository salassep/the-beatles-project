<?php 
$id_hapus = $_GET['id_hapus'];
$status = file_get_contents('../data/status.json');
$data_playlist = file_get_contents('../data/playlist.json');
$status = json_decode($status, TRUE);
$data_playlist = json_decode($data_playlist, TRUE);

$newArr = [];
for ( $x = 0; $x < count($data_playlist); $x++) {
  if($data_playlist[$x]['username'] != $_GET['username']) {
    array_push($newArr, $data_playlist[$x]);
  }
}

function filterByUsername($items, $username){
  return array_filter($items, function($item) use ($username) {
      if($item['username'] == $username){
          return true;
      }
  });
}

$data_playlist_filtered = filterByUsername($data_playlist, $_GET['username']);

// unset($data_playlist[$id_hapus]);
array_splice($data_playlist_filtered, $id_hapus, 1);

$data_playlist = array_merge($newArr, $data_playlist_filtered);

$data_playlist = json_encode($data_playlist, JSON_PRETTY_PRINT);
file_put_contents('../data/playlist.json', $data_playlist);

header('Location: ../'.$status['path']);
?>