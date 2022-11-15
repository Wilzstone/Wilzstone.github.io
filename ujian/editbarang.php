<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Edit Data Barang</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Barang</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM barang where idbarang='$_GET[editbarang]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idbarang">ID Barang</label>

                            <input type="text" class="form-control mb-3" name="idbarang" value="<?= $row['idbarang'] ?>" readonly>

                        </div>
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>

                            <input type="text" class="form-control mb-3" name="namabarang" value="<?= $row['namabarang'] ?>">

                        </div>

                        <div class="form-group">
                        <div class="form-group">
                            <label for="juml;ah">Jumlah Barang</label>

                            <input type="text" class="form-control mb-3" name="jumlah" value="<?= $row['idbarang'] ?>" readonly>

                        </div>

                            <div class="form-group mt-3">

                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>