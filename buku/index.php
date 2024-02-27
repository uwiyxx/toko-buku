<?php
include '../layout/header.php';
include '../layout/menu.php';
include '../layout/navbar.php';
include '../config.php';
$sql = "SELECT * from buku";


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
    <a href="tabel.php" class="btn btn-primary">Tambah Buku</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id_buku</th>
                <th scope="col">Judul</th>
                <th scope="col">Noisbn</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga_pokok</th>
                <th scope="col">Harga_jual</th>
                <th scope="col">Ppn</th>
                <th scope="col">Diskon</th>
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
                        <?= $item['id_buku'] ?>
                    </td>
                    <td>
                        <?= $item['judul'] ?>
                    </td>
                    <td>
                        <?= $item['noisbn'] ?>
                    </td>
                    <td>
                        <?= $item['penulis'] ?>
                    </td>
                    <td>
                        <?= $item['penerbit'] ?>
                    </td>
                    <td>
                        <?= $item['tahun'] ?>
                    </td>
                    <td>
                        <?= $item['stok'] ?>
                    </td>
                    <td>
                        <?= $item['harga_pokok'] ?>
                    </td>
                    <td>
                        <?= $item['harga_jual'] ?>
                    </td>
                    <td>
                        <?= $item['ppn'] ?>
                    </td>
                    <td>
                        <?= $item['diskon'] ?>
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