<?php
$koneksi = new mysqli('localhost', 'root', '', 'ujian') or die(mysqli_error($koneksi));

//Pegawai

if (isset($_POST['simpan'])){
    $idpegawai = $_POST['idpegawai'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pegawai (idpegawai, nama, jk, alamat) values ('$idpegawai','$nama','$jk','$alamat')");

    header('location:pegawai.php');
}

if (isset($_GET['idpegawai'])){
    $idpegawai = $_GET['idpegawai'];
    $koneksi->query("DELETE FROM pegawai where idpegawai = '$idpegawai'");
    header("location:pegawai.php");
}

if (isset($_POST['editpegawai'])){
    $idpegawai = $_POST['idpegawai'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pegawai SET idpegawai='$idpegawai',nama='$nama',jk='$jk',alamat='$alamat'WHERE idpegawai=$idpegawai");
    header("location:pegawai.php");
}

//Barang

if (isset($_POST['simpanbarang'])){
    $idbarang = $_POST['idbarang'];
    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];
    $koneksi->query("INSERT INTO barang (idbarang, namabarang, jumlah) values ('$idbarang','$namabarang','$jumlah')");

    header('location:barang.php');
}

if (isset($_GET['idbarang'])){
    $idbarang = $_GET['idbarang'];
    $koneksi->query("DELETE FROM barang where idbarang = '$idbarang'");
    header("location:barang.php");
}

if (isset($_POST['editbarang'])){
    $idbarang = $_POST['idbarang'];
    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];

    $koneksi->query("UPDATE barang SET idbarang='$idbarang',namabarang='$namabarang',jumlah='$jumlah'WHERE idbarang=$idbarang");
    header("location:barang.php");
}

?>