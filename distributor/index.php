<?php
include '../layout/header.php';
include '../layout/menu.php';
include '../layout/navbar.php';
include '../config.php';
$sql = "SELECT * from distributor";


$hasil = $koneksi->query($sql);
?>

    
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Distributor</th>
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

                </tr>
                <?php $nomer++;
            } ?>
        </tbody>
    </table>
</body>
<?php
include '../layout/footer.php';
?>