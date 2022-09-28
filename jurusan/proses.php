<?php
include '../database.php';
$jurusann = new Jurusan();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $kode_jurusan = $_POST['kode_jurusan'];
    $jurusan = $_POST['jurusan'];

    if ($aksi == "create"){
        $jurusann->create($kode_jurusan,$jurusan);
        header("location:jurusan.php");
    }
    else if ($aksi == "update") {
        $jurusann->update($id,$kode_jurusan,$jurusan);
        header("location:jurusan.php");
    }
    else if ($aksi == "delete"){
        $jurusann->delete($id);
        header("location:jurusan.php");
    }
}
?>