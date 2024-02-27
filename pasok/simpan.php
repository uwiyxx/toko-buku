<?php
include "../config.php";

    $id_distributor = $_POST['id_distributor'];
    $id_buku = $_POST['id_buku'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO pasok (id_distributor, id_buku, jumlah, tanggal) 
            VALUES ('".$_POST['id_distributor']."','".$_POST['id_buku']."','".$_POST['jumlah']."','".$_POST['tanggal']."')";

    $koneksi->query($sql);


header('Location: index.php')
?>