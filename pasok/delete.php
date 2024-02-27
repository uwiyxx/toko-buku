<?php 
include '../config.php';

$sql ='DELETE FROM pasok WHERE id_pasok='.$_GET['id_pasok'];
$koneksi->query($sql);
header('location: index.php')
?>