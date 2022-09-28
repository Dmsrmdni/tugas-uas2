<?php

    class Pendaftaran extends Database{

        // menampilkan data dosen ke index.php
        public function index(){
            $datapendaftaran = mysqli_query($this->koneksi,
            "SELECT pendaftaran.id,
                    pendaftaran.kode_pendaftaran,
                    pendaftaran.nama,
                    pendaftaran.tanggal_lahir,
                    pendaftaran.tempat_lahir,
                    pendaftaran.jenis_kelamin,
                    pendaftaran.agama,
                    jurusan.jurusan
                    FROM pendaftaran join jurusan on pendaftaran.id_jurusan = jurusan.id");

            return $datapendaftaran;
        }

        public function create($kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan){
            mysqli_query($this->koneksi,
                        "INSERT INTO pendaftaran VALUES (null,'$kode_pendaftaran','$nama','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$agama','$id_jurusan')"
                        );
        }

        public function edit($id){
            $datapendaftaran = mysqli_query($this->koneksi,"SELECT * FROM pendaftaran where id='$id'");
            return $datapendaftaran;
        }

        public function update($id,$kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$id_jurusan){
            mysqli_query($this->koneksi,
                            "UPDATE pendaftaran SET
                                kode_pendaftaran = '$kode_pendaftaran',
                                nama = '$nama',
                                tanggal_lahir = '$tanggal_lahir',
                                tempat_lahir = '$tempat_lahir',
                                jenis_kelamin = '$jenis_kelamin',
                                agama = '$agama',
                                id_jurusan = '$id_jurusan'
                            WHERE id = $id
                        ");
        }

        public function show($id){
            $datapendaftaran = mysqli_query($this->koneksi,"SELECT 
                pendaftaran.id,
                pendaftaran.kode_pendaftaran,
                pendaftaran.nama,
                pendaftaran.tanggal_lahir,
                pendaftaran.tempat_lahir,
                pendaftaran.jenis_kelamin,
                pendaftaran.agama,
                jurusan.jurusan 
        FROM pendaftaran join jurusan on pendaftaran.id_jurusan = jurusan.id WHERE pendaftaran.id='$id'");
            return $datapendaftaran;
        }

        public function delete($id){
            mysqli_query($this->koneksi,"DELETE FROM pendaftaran WHERE id='$id'");
        }
        
    }

?>