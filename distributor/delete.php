<?php 
include '../config.php';

$sql ='DELETE FROM distributor WHERE id_distributor='.$_GET['id_distributor'];
$koneksi->query($sql);
header('location: index.php')
?>