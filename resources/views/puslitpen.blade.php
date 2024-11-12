<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIN Sunan Gunung Djati Bandung</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Elsie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="css/puslitpen.css">

    <title>PKM UIN</title>
</head>
<body>
    <!--header-->
    <div class="header">
        <span>PUSLITPEN</span>
        <div class="menu-bars" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
        <div class="nav-links">
            <a href="home">HOME</a>
            <a href="pusat">PUSAT</a>
            <a href="ukm">UKM</a>
            <div class="dropdown">
                <a href="#" onclick="toggleDropdown(event)">FAKULTAS & PRODI</a>
                <div class="dropdown-content">
                    <a href="https://fah.uinsgd.ac.id/">Adab dan Humaniora</a>
                    <a href="https://fdk.uinsgd.ac.id/">Dakwah dan Komunikasi</a>
                    <a href="https://febi.uinsgd.ac.id/">Ekonomi dan Bisnis Islam</a>
                    <a href="https://fisip.uinsgd.ac.id/">Ilmu Sosial dan Ilmu Politik</a>
                    <a href="https://psi.uinsgd.ac.id/">Psikologi</a>
                    <a href="https://fst.uinsgd.ac.id/">Sains dan Teknologi</a>
                    <a href="https://fsh.uinsgd.ac.id/">Syariah dan Hukum</a>
                    <a href="https://ftk.uinsgd.ac.id/">Tarbiyah dan Keguruan</a>
                    <a href="https://fu.uinsgd.ac.id/">Ushuluddin</a>
                </div>
            </div>
        </div>
    </div>
    
    <!--content-->
    <div class="p-4 my-4">
        <div class="content">
            <div class="d-flex">
                <div class="me-3">
                    <img src="/images/Logo UIN.png">
                </div>
                <div class="d-flex" style="align-items: center;">
                    <div class="fw-bold">
                        <h5>PUSLITPEN</h5>
                        <h6>Pusat Penelitian dan Pengembangan</h6>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
    
    <div class="p-4 my-4">
        <div class="py-2 px-5">
            <div class="content2">
                <h2>PROFIL</h2>
            </div>
            <div class="d-flex mb-5">
                <div class="image-container me-5">
                    <div class="my-2">
                        <img src="/images/8.jpg" alt="Group Image">
                    </div>
                </div>
                <div class="deskripsi">
                    Pusat Penelitian dan Penerbitan merupakan sub bagian dari Lembaga Penelitian dan Pengabdian
                     kepada Masyarakat (LP2M). Lembaga didirikan berdasarkan Peraturan Menteri Agama Republik Indonesia
                     Nomor 7 Tahun 2013 Tentang Organisasi dan Tata Kerja (Ortaker) UIN Sunan Gunung Djati Bandung.
                     Struktur LP2M terbagi menjadi tiga komponen, yaitu: 1) Pusat Penelitian dan Penerbitan;
                     2) Pusat Pengabdian kepada Masyarakat; 3) dan Pusat Studi Gender dan Anak. Sebelum terhimpun dalam struktur LP2M,
                     komponen pusat-pusat tersebut merupakan lembaga-lembaga tersendiri di lingkungan UIN SGD Bandung.
                     Sejak diterbitkannya Ortaker Peraturan Menteri Agama tahun 2013, maka ketiga komponen lembaga tersebut dilebur dan digabungkan dalam struktur LP2M.
                </div>
            </div>
        </div>
    </div>
    
     <!--footer-->
  <footer class="footer">
    <div class="footer-left">
        <img src="images/logo.png" alt="Logo UIN">
    </div>

    <div class="footer-center">
        <p>Jl. A.H. Nasution No. 105, <br> Cibiru, Bandung 40614</p>
        <p class="footer-copyright">&copy; 2024 - UIN SGD Bandung</p>
    </div>
  
    <div class="footer-right">
        <p class="footer-about">Sosial Media</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p>Email: <a>lp2m@uinsgd.ac.id</a></p>
        <p>(022)7800525</p>
    </div>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>