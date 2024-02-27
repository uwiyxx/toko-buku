<?php 

include '../config.php';

$sql ='SELECT * FROM pasok WHERE id_pasok='.$_GET['id_pasok'];

$hasil = $koneksi->query($sql);
$siswa = $hasil->fetch_assoc();

if(isset($_POST['pasok'])){
    $sql = 'UPDATE pasok SET 
    id_pasok="'.$_POST['id_pasok']."',

    id_distributor='".$_POST['id_distributor']."',

    id_buku='".$_POST['id_buku']."',

    jumlah='".$_POST['jumlah']."',

    tanggal='".$_POST['tanggal']."'

    where id_pasok =".$_GET['id_pasok'];

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
  <h2>Edit Pasok</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Id Pasok</label>
                <input type="text" class="form-control" name="id_pasok" value="<?=$siswa['id_pasok']?>">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Id Distributor</label>
                <input type="text" class="form-control" name="id_distributor" value="<?=$siswa['id_distributor']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Id Buku</label>
                <input type="text" class="form-control" name="id_buku" value="<?=$siswa['id_buku']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" value="<?=$siswa['jumlah']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Tangal</label>
                <input type="text" class="form-control" name="Tanggal" value="<?=$siswa['tanggal']?>">
            </div>
            <input type="hidden" name="id_distributor" value="<?=$siswa['id_distributor']?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php include '../layout/footer.php'?>