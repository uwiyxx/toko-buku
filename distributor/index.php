<?php
include '../layout/header.php';
include '../layout/menu.php';
include '../layout/navbar.php';
include '../config.php';
$sql = "SELECT * from distributor";


$hasil = $koneksi->query($sql);
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
    <a href="tabel.php" class="btn btn-primary">Tambah Distributor</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Distributor</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomer = 1;
            foreach ($hasil as $item) {
                ?>
                <tr>
                    <th scope="row">
                        <?= $nomer ?>
                    </th>
                    <td>
                        <?= $item['nama_distributor'] ?>
                    </td>
                    <td>
                        <?= $item['alamat'] ?>
                    </td>
                    <td>
                        <?= $item['telepon'] ?>
                    </td>
                    
                <td>
                <a href="delete.php?id_distributor=<?=$item['id_distributor']?> "class="btn btn-danger">Delete</a>
                <a href="edit.php?id_distributor=<?=$item['id_distributor']?>" class="btn btn-warning">Edit</a>
                </td>
                </tr>
                <?php $nomer++;
            } ?>
        </tbody>
    </table>
    </section>
    </main>
<?php
include '../layout/footer.php';
?>