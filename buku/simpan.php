<?php
include "../config.php";

if (isset($_POST['submit'])) {
    $id_buku = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $noisbn = $_POST['noisbn'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $harga_pokok = $_POST['harga_pokok'];
    $harga_jual = $_POST['harga_jual'];
    $ppn = $_POST['ppn'];
    $diskon = $_POST['diskon'];

    $sql = "INSERT INTO buku (id_buku,judul,noisbn,penulis,penerbit,tahun,stok,harga_pokok,harga_jual,ppn,diskon) 
            VALUES ('$id_buku', '$judul', '$noisbn', '$penulis', '$penerbit', '$tahun', '$stok', '$harga_pokok', '$harga_jual', '$ppn', '$diskon')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

header('Location: index.php')
?>