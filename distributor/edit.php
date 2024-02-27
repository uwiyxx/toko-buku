<?php 

include '../config.php';

$sql ='SELECT * FROM distributor WHERE id_distributor='.$_GET['id_distributor'];

$hasil = $koneksi->query($sql);
$siswa = $hasil->fetch_assoc();

if(isset($_POST['alamat'])){
    $sql = 'UPDATE distributor SET 
    nama_distributor="'.$_POST['nama_distributor'].'",

    alamat="'.$_POST['alamat'].'",

    telepon="'.$_POST['telepon'].'"

    where id_distributor ='.$_GET['id_distributor'];

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
  <h2>Edit Distributor</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Distributor</label>
                <input type="text" class="form-control" name="nama_distributor" value="<?=$siswa['nama_distributor']?>">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?=$siswa['alamat']?>">
            </div>
            <div class="mb-3">
                <label for="No Telp" class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?=$siswa['telepon']?>">
            </div>
            <input type="hidden" name="id_distributor" value="<?=$siswa['id_distributor']?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php include '../layout/footer.php'?>