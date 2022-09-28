<?php

    class Database{
        public $host = "localhost", $user = "root", $pass = "", $db = "pas";
        public $koneksi;


        public function __construct(){
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );

            if($this->koneksi){
                // echo "berhasil";
            }
            else{
                echo "koneksi Database Gagal";
            }
        }
    }

    $db = new Database();

    include 'jurusan1.php';
    include 'pendaftaran1.php';
    include 'pembayaran1.php';

?>