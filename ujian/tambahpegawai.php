<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Pegawai</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pegawai</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpegawai">ID Pegawai</label>

                        <input type="text" class="form-control mb-3" name="idpegawai" placeholder="ID Pegawai">

                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>

                        <input type="text" class="form-control mb-3" name="nama" placeholder="Nama Pegawai">

                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="perempuan"> Perempuan

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="laki-laki"> Laki-laki

                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>

                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>