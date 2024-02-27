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
<h1 class="h1 mb-5">Distributor</h1>
<form action="simpan.php" method="post">
      
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Distributor</label>
                <input type="text" class="form-control"name="nama_distributor" value="<?=$siswa['nama_distributor']?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control"name="alamat">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control"name="telepon">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary form-control mb-2 " type="submit" >Simpan</button>
                <button class="btn btn-success form-control" type="reset">Batal</button>
            </div>
        </form>
</div>
</body>
</html>
<?php 
include '../layout/footer.php';
?>