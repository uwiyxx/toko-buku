<?php 
include '../config.php';

$sql ='DELETE FROM buku WHERE id_buku='.$_GET['id_buku'];
$koneksi->query($sql);
header('location: index.php')
?>