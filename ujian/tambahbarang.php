<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Barang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Barang</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpegawai">ID Barang</label>

                        <input type="text" class="form-control mb-3" name="idbarang" placeholder="ID Barang">

                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>

                        <input type="text" class="form-control mb-3" name="namabarang" placeholder="Nama Barang">

                    </div>
                    <div class="form-group">
                        <label for="jumlha">Jumlah Barang</label>

                        <input type="text" class="form-control mb-3" name="jumlah" placeholder="Jumlah Barang">

                        <input type="submit" name="simpanbarang" value="Simpan" class="form-control btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>