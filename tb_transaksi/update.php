<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id_metode_pembayaran           = $_POST['id_metode_pembayaran'];
$nama                           = $_POST['nama'];
$alamat                         = $_POST['alamat'];
$jenis_kelamin                  = $_POST['jenis_kelamin'];
$no_telp                        = $_POST['no_telp'];
$id_cabang                      = $_POST['id_cabang'];
//query insert data ke dalam database
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_metode_pembayaran SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin',
 no_telp = '$no_telp', id_cabang = '$id_cabang', WHERE id_metode_pembayaran = '$id_metode_pembayaran'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
