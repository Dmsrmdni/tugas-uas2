<?php
include '../database.php';
$pembayaran = new Pembayaran();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $kode_pembayaran = $_POST['kode_pembayaran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $uang_pendaftaran = $_POST['uang_pendaftaran'];
    $uang_seragam = $_POST['uang_seragam'];
    $uang_kegiatan = $_POST['uang_kegiatan'];
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $total_pembayaran = $uang_seragam + $uang_kegiatan +  $uang_pendaftaran ;


    if ($aksi == "create"){
        $pembayaran->create($kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$id_pendaftaran,$total_pembayaran);
        header("location:pembayaran.php");
    }
    else if ($aksi == "update") {
        $pembayaran->update($id,$kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$id_pendaftaran,$total_pembayaran);
        header("location:pembayaran.php");
    }
    else if ($aksi == "delete"){
        $pembayaran->delete($id);
        header("location:pembayaran.php");
    }
}
?>