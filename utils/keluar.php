<?php 
$status = file_get_contents('../data/status.json');
$status = json_decode($status, TRUE);

$status['status'] = $_GET['status'];
$status['path'] = 'favorit.php';
$newStatus = json_encode($status, JSON_PRETTY_PRINT);

file_put_contents('../data/status.json', $newStatus);

echo '<script> alert("Anda telah keluar ! "); window.location.href="../index.php"; </script>';
?>