<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login/login/index.html"); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="boostrap/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inknut Antiqua', serif;
        }
        .alamat{
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div>
        <header class="header d-flex align-items-center p-3" style="height: 200px; width: auto;">
            <img src="gambar/Logo.png" alt="Logo" class="img-fluid" style="width: 260px; margin-left: 290px;">
            <div class="ms-3 text-white">
                <div class="d-flex align-items-center">
                    <h1 class="me-2 mb-0 text-white">INVENTARIS</h1>
                    <h1 class="mb-0 text-danger">WEBSITE</h1>
                </div>
                <br>
                <div class="alamat">
                    Batik sekar kinanti, Jl. Jongke Mlati Glondong Sendangadi, Jongke Tengah, <br>
                    Sendangadi, Kec. Mati, Kabupaten Sleman, Daerah Istimewah Yogyakarta 55285
                </div>
            </div>
        </header>
    </div>

    <div class="container-fluid mt-3 border-top border-white border-bottom p-4">
        <ul class="nav d-flex justify-content-between">
            <div class="d-flex mx-auto">
                <li class="nav-item me-4 dropdown">
                    <a href="#" class="nav-link text-decoration-none text-white dropdown-toggle" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">HOME</a>
                    <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                        <li><a class="dropdown-item" href="home/home.html">PROFIL</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>
                <li class="nav-item me-4 dropdown">
                    <a href="#" class="nav-link text-decoration-none text-white dropdown-toggle" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PAGES</a>
                    <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <li><a class="dropdown-item" href="pages/PageDataBarang/PAGE/DataBarang.html">Data Barang</a></li>
                        <li><a class="dropdown-item" href="pages/PageDataCustomer/PAGESS/DataCustomer.html">Data Customers</a></li>
                        <li><a class="dropdown-item" href="pages/PageDataSupplier/PAGES/DataSupplier.html">Data Supplier</a></li>
                    </ul>
                </li>
                <li class="nav-item me-4 dropdown">
                    <a href="#" class="nav-link text-decoration-none text-white dropdown-toggle" id="transaksiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRANSAKSI</a>
                    <ul class="dropdown-menu" aria-labelledby="transaksiDropdown">
                        <li><a class="dropdown-item" href="lainnya/peminjaman/peminjaman/index.html">Peminjaman</a></li>
                        <li><a class="dropdown-item" href="lainnya/pengembalian/pengembalian/index.html">Pengembalian</a></li>
                    </ul>
                </li>
            </div>

            
            <div class="d-flex">
                <li class="nav-item me-3"><a href="login/login/index.html" class="text-decoration-none text-white">LOGIN</a></li>
                <li class="nav-item"><a href="sign up/sign up/index.html" class="text-decoration-none text-white">SIGN UP</a></li>
            </div>
        </ul>
    </div>
    <div >
        <img src="gambar/home.jpg" alt="" class="img-fluid float-end" style="width: 870px;">
    </div>
    <div class="home01 p-4 text-white" style="margin-top: 180px;">
        <h2>GPS MULTIMEDIA</h2>
        <p>MULTIMEDIA, VIDIOTRON, AUDIO VISUAL EQUIPMENT & GENSET</p>
    </div>
   <div class="bagian1 d-inline-flex align-items-center">
        <img src="gambar/bagian1.jpg" alt="" class="img-fluid float-start" style="width: 750px;">
        <div class="text-white display-6" style=" margin-left: 100px; padding-right: 108px;">Event Unviversitas Ahmad Dahlan</div>
   </div><br>

   <div class="container-fluid" style="position: relative;">
    <div class="row justify-content-center">
        <img src="gambar/bagian2.jpg" alt="" class="img-fluid" style="height: 520px; width: 920px; z-index: 1;">
    </div>
    <div class="red-box"></div>

    <div>
        <img src="gambar/bagian3.jpg" alt="" class="img-fluid float-end" style="width: 870px;">
    </div>
    <p class="home01 text-white display-4" style="padding-left: 30px;  padding-top: 195px; padding-bottom: 165px;">Event Hari Mitra Grab dan OVO</p>

    <div class="container-fluid" style="position: relative;">
        <div class="row justify-content-center">
            <img src="gambar/bagian4.jpg" alt="" class="img-fluid" style="height: 530px; width: 910px; z-index: 1;">
        </div>
        
        <div class="red-box2"></div>
    </div>
    
    <div class="bagian1 d-inline-flex align-items-center">
        <img src="gambar/5.jpg" alt="" class="img-fluid float-start" style="width: 750px;">
        <div class="text-white display-6" style=" margin-left: 195px; padding-right: 195px;">Konser Moment</div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>