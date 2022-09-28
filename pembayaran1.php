<?php

    class Pembayaran extends Database{

        // menampilkan data dosen ke index.php
        public function index(){
            $datapembayaran = mysqli_query($this->koneksi,
            "SELECT 
            pembayaran.id,
            pembayaran.kode_pembayaran,
            pendaftaran.nama,
            pembayaran.tanggal_pembayaran,
            pembayaran.uang_pendaftaran,
            pembayaran.uang_seragam,
            pembayaran.uang_kegiatan,
            pembayaran.total_pembayaran
            FROM pembayaran join pendaftaran on pembayaran.id_pendaftaran = pendaftaran.id ");

            return $datapembayaran;
        }

        public function create($kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$id_pendaftaran,$total_pembayaran){
            mysqli_query($this->koneksi,
                        "INSERT INTO pembayaran VALUES (null,'$kode_pembayaran','$tanggal_pembayaran','$uang_pendaftaran','$uang_seragam','$uang_kegiatan','$total_pembayaran','$id_pendaftaran')"
                        );
        }

        public function edit($id){
            $datapembayaran = mysqli_query($this->koneksi,"SELECT 
            pembayaran.id,
            pembayaran.kode_pembayaran,
            pendaftaran.nama,
            pembayaran.tanggal_pembayaran,
            pembayaran.uang_pendaftaran,
            pembayaran.uang_seragam,
            pembayaran.uang_kegiatan,
            pembayaran.id_pendaftaran,
            pembayaran.total_pembayaran
            FROM pembayaran join pendaftaran on pembayaran.id_pendaftaran = pendaftaran.id where pembayaran.id='$id'");
            return $datapembayaran;
        }

        public function update($id,$kode_pembayaran,$tanggal_pembayaran,$uang_pendaftaran,$uang_seragam,$uang_kegiatan,$id_pendaftaran,$total_pembayaran){
            mysqli_query($this->koneksi,
                            "UPDATE pembayaran SET
                                kode_pembayaran = '$kode_pembayaran',
                                tanggal_pembayaran = '$tanggal_pembayaran',
                                uang_pendaftaran = '$uang_pendaftaran',
                                uang_seragam = '$uang_seragam',
                                uang_kegiatan = '$uang_kegiatan',
                                id_pendaftaran = '$id_pendaftaran',
                                total_pembayaran='$total_pembayaran'
                            WHERE id = $id
                        ");
        }

        public function show($id){
            $datapembayaran = mysqli_query($this->koneksi,
            "SELECT 
            pembayaran.id,
            pembayaran.kode_pembayaran,
            pendaftaran.nama,
            pembayaran.tanggal_pembayaran,
            pembayaran.uang_pendaftaran,
            pembayaran.uang_seragam,
            pembayaran.uang_kegiatan,
            pembayaran.id_pendaftaran
            FROM pembayaran join pendaftaran on pembayaran.id_pendaftaran = pendaftaran.id where pembayaran.id='$id'");
            return $datapembayaran;
        }

        public function delete($id){
            mysqli_query($this->koneksi,"DELETE FROM pembayaran WHERE id='$id'");
        }
        
    }

?>