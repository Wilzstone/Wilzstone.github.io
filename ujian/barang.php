<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MyApp | Halaman Utama</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MyApp</a>

                <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            <a class="nav-link" aria- current="page" href="#">Admin</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" href="pegawai.php">Pegawai</a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" href="#">Barang / ATK</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Barang</h3>
            </div>
        </div>
       
        <div class="row mt-3">
            <div class="col">

                <table class="table table-striped table-hover table-sm">

                    <tr>
                        <th>No</th>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM barang");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idbarang']; ?></td>
                            <td><?= $row['namabarang']; ?></td>
                            <td><?= $row['jumlah']; ?></td>
                            <td>
                                <a href="editbarang.php?edit=<?= $row['idbarang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="koneksi.php?idbarang=<?= $row['idbarang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <a href="tambahbarang.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>

            </div>
        </div>
    </div>
</body>

</html>