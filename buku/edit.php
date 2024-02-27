<?php 

include '../config.php';

$sql ='SELECT * FROM buku WHERE id_buku='.$_GET['id_buku'];

$hasil = $koneksi->query($sql);
$siswa = $hasil->fetch_assoc();

if(isset($_POST['buku'])){
    $sql = 'UPDATE buku SET 
    id_buku="'.$_POST['id_buku']."',

    judul='".$_POST['judul']."',

    noisbn='".$_POST['noisbn']."',

    penulis='".$_POST['penulis']."',

    penerbit='".$_POST['penerbit']."',
    tahun='".$_POST['tahun']."',
    stok='".$_POST['stok']."',
    harga_pokok='".$_POST['harga_pokok']."',
    harga_jual='".$_POST['harga_jual']."',
    ppn='".$_POST['ppn']."',
    diskon='".$_POST['diskon']."'
    

    where id_buku =".$_GET['id_buku'];

    $koneksi->query($sql);

    header('location:index.php');

}


?>
<?php 
include '../layout/header.php';
include '../layout/menu.php';
include '../layout/navbar.php';

?>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <!-- <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li> -->
                              <!-- <li class="breadcrumb-item active" aria-current="page">Starter Page</li> -->
                            </ol>
                          </nav>
                        <!-- <h1 class="mb-0 fw-bold">Starter Page</h1>  -->
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
  <h2>Edit Buku</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Id Buku</label>
                <input type="text" class="form-control" name="id_buku" value="<?=$siswa['id_buku']?>">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?=$siswa['judul']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Noisbn</label>
                <input type="text" class="form-control" name="noisbn" value="<?=$siswa['noisbn']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" value="<?=$siswa['penulis']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" value="<?=$siswa['penerbit']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Tahun</label>
                <input type="text" class="form-control" name="tahun" value="<?=$siswa['tahun']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" value="<?=$siswa['stok']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Harga Pokok</label>
                <input type="text" class="form-control" name="harga_pokok" value="<?=$siswa['harga_pokok']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Harga Jual</label>
                <input type="text" class="form-control" name="harga_jual" value="<?=$siswa['harga_jual']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Ppn</label>
                <input type="text" class="form-control" name="ppn" value="<?=$siswa['ppn']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Diskon</label>
                <input type="text" class="form-control" name="diskon" value="<?=$siswa['diskon']?>">
            </div>
            <input type="hidden" name="id_distributor" value="<?=$siswa['id_distributor']?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php include '../layout/footer.php'?>