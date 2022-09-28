<?php
include '../database.php';
$pendaftaran = new Pendaftaran();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $kode_pendaftaran = $_POST['kode_pendaftaran'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $id_jurusan = $_POST['id_jurusan'];


    if ($aksi == "create"){
        $pendaftaran->create($kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan);
        header("location:pendaftaran.php");
    }
    else if ($aksi == "update") {
        $pendaftaran->update($id,$kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan);
        header("location:pendaftaran.php");
    }
    else if ($aksi == "delete"){
        $pendaftaran->delete($id);
        header("location:pendaftaran.php");
    }
    
}
?>