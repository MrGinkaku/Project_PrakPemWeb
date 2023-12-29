<!DOCTYPE html>
<html lang="en">
<head>
    <!-- mengatur karakter set dan viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Judul halaman -->
    <title>SMP Terbuka 1 Pagedangan</title>
</head>
<body>
    <!-- Bagian Navigasi -->
    <header class="header">
        <nav class="navbar-expand">
            <div class="container">
                <div class="pojok-kiri">
                    <!-- Logo SMP -->
                    <div class="logo_smp">
                        <a href="#">
                            <img src="LogoSMP.png" alt="logo smp" width="100px">
                        </a>
                    </div>
                    <!-- Nama dan Slogan Sekolah -->
                    <div class="Nama_slogan">
                        <span class="nama_sekolah">Dewantara</span>
                        <span class="slogan_sekolah">Mathematic School</span>
                    </div>
                </div>
                <!-- Navbar -->
                <div class="navbar">
                    <div class="top-menu">
                        <!-- Menu Bagian Atas -->
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">En'</a></li>
                        </ul>
                    </div>
                    <div class="main-menu">
                        <!-- Menu Bagian Utama -->
                        <ul>
                            <li><a href="#">About DMS</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Academics</a></li>
                            <li><a href="#">Extracurricular</a></li>
                            <li><a href="#">Achievements</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                    <!-- Tombol Eksternal (Contoh: Facebook) -->
                    <div class="button_a">
                        <a href="https://www.facebook.com" class="head-button">facebook.com</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bagian Dokumentasi dan Isi Konten -->
    <div class="Dokumentasi"></div>
    <div class="isi_konten">
        <!-- Bagian Konten Utama -->
        <section class="content1">
            <div class="konten_utama">
                <div class="main_Content">
                    <!-- Judul Postingan Terbaru -->
                    <h5 class="title_main_content">Postingan Terbaru</h5>
                    <!-- Isi Postingan Terbaru -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. ...</p>
                </div>
                <!-- Bagian Konten Samping -->
                <div class="side_content">
                    <!-- Judul Tentang Pembuat Web -->
                    <h5>Tentang Pembuat Web</h5>
                    <!-- Gambar Pembuat Web -->
                    <img src="Penulis1.jpg" alt="gambar pembuat" width="100">
                    <!-- Deskripsi Pembuat Web -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. ...</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Bagian Testimoni dan Video Intro -->
    <div class="testi">
        <!-- Bagian Konten Testimoni -->
        <section class="content2">
            <div class="testimoni">
                <!-- Judul dan Isi Testimoni -->
                <h3><b>Kenapa Harus Dewantara ?</b></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. ...</p>
            </div>
        </section>
        <!-- Bagian Video Testimoni -->
        <div class="vidio_intro">
            <h3>Video Testimoni</h3>
            <!-- Video Player -->
            <video width="350" height="250" controls>
                <source src="Tutor_jarkom.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- Bagian Footer -->
    <div class="footer">
        <div class="containter_footer">
            <!-- Hak Cipta -->
            <p>Copyright @2023 Fauzan Akmal Mukhlas All rights reserved.</p>
        </div>
    </div>
</body>
</html>
