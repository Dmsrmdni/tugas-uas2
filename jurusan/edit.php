<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style_template1.css">
        <title>Home</title>
        <style>
     body{
            background-image: url(https://images.unsplash.com/photo-1636953056323-9c09fdd74fa6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80);
            background-size: cover;
            color: whitesmoke;
        }
        
        h3,h1{
            font-family:  Georgia, 'Times New Roman', Times, serif;
        }
        
        .card{
            color: whitesmoke;
            background-image: url(https://i.pinimg.com/564x/cc/74/36/cc74366f1e5960053bb01fb3d8a45f9c.jpg);
            background-size: cover;
            padding: 10px;
            border: 2px solid grey;
            box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px gray;
        }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../../assalam.png" width="70" height="60" class="me-2" alt="">
                    Deathsunshine
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link active" href="../home.php">Home</a>
                        <a class="nav-item nav-link" href="jurusan.php">Jurusan</a>
                        <a class="nav-item nav-link" href="../pendaftaran/pendaftaran.php">Pendaftaran</a>
                        <a class="nav-item nav-link" href="../pembayaran/pembayaran.php">Pembayaran</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Content -->
        <div class="content">
            <div class="container-fluid">

            <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="../../assalam.png" class="rounded" alt="..." width="260" height="210">
                </div>
            </div>
            <br>
            <!-- Cards -->
            <div class="row">
                <div class="card w-50 mx-auto">
                    <h1 align="center">
                        Data Jurusan
                    </h1>
                        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>

                    <?php
                        include '../database.php';
                        $jurusann = new Jurusan();
                        foreach ($jurusann->edit($_GET['id']) as $data) {
                            $id = $data['id'];
                            $kode_jurusan = $data['kode_jurusan'];
                            $jurusan = $data['jurusan'];
                        }
                    ?>
                    <form action="../jurusan/proses.php" method="POST" class="d-flex p-4">
                    <input type="hidden" name="aksi" value="update">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="col">
                                <h3 class="mx-auto">Edit Data</h3>
                                <span class="d-block w-25 bg-secondary rounded float-start" style="height: 2px"></span>
                                <br>
                            <div class="mb-3">
                                    <label for="kode_jurusan" class="form-label">Kode jurusan</label>
                                    <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" value="<?= $kode_jurusan; ?>" required>
                            </div>

                            <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $jurusan; ?>"  required>
                            </div>
                            <button type="submit" class="btn btn-outline-danger" name="save">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                </svg> Kirim
                            </button>
                            <a href="jurusan.php" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                                <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                                </svg> Kembali
                            </a>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
                 
            </div>
        </div>
        <!-- Akhir Content -->
<br><br>
        <!-- Footer -->
        <footer>
            <div class="main-content">
                <img src="../../assalam.png" alt="" class="mx-auto w-25 h-25 p-5">
                <div class="left box">
                    <h2>About Us</h2>
                    <div class="content">
                    <p>Dimas Ramdani<br>kelas XI RPL 3<br>SMK Assalam Bandung</p> 
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>
            
            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Rancamanyar,Bandung</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">081224084279</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">dimasramdani220@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div class="right box">
                    <h2>contact us</h2>
                    <div class="content">
                        <form action="#">
                            <div class="w-75">
                                <div class="mb-1 form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-1">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea name="pesan" class="form-control" id="pesan" cols="23" rows="2" required></textarea>
                                </div>
                                <div class="btn">
                                    <button type="submit" class="btn btn-outline-primary " name="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom">Copyright &copy; 2022 by Dmsrmdni_</div>
        </footer>
        <!-- Akhir Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>