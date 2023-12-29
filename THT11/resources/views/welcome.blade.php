<!DOCTYPE html>
<html lang="en">

<head>
    <!-- mengatur karakter set dan viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Menghubungkan dengan file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Judul halaman -->
    <title>SMP Terbuka 1 Pagedangan</title>
</head>

<body>
    <!-- Bagian Navigasi -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container d-flex align-items-center">
                <!-- Logo, Nama, dan Slogan Sekolah -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('LogoSMP.png') }}" alt="logo smp" width="100px">
                </a>
                <div class="ml-3">
                    <span class="nama_sekolah text-white">Dewantara</span>
                    <span class="slogan_sekolah text-white">Mathematic School</span>
                </div>

                <!-- Navbar Toggler untuk tampilan responsif -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="top-menu ml-auto">
                        <!-- Menu Bagian Atas -->
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="{{ url('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Search</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">En'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="Dokumentasi p-3"></div>
    <div class="isi_konten bg-light p-3">
        <!-- Bagian Konten Utama -->
        <section class="content1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main_Content">
                            <!-- Judul Postingan Terbaru -->
                            <h5 class="title_main_content">Postingan Terbaru</h5>
                            <!-- Isi Postingan Terbaru -->
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore accusantium facilis id
                                doloremque odio fuga ipsum ratione perferendis, natus iusto rerum molestias. Fugiat,
                                nihil! Enim at ducimus architecto iure quaerat.</p>
                        </div>
                    </div>
                    <!-- Bagian Konten Samping -->
                    <div class="col-md-4">
                        <div class="side_content bg-secondary text-white p-3">
                            <!-- Judul Tentang Pembuat Web -->
                            <h5>Tentang Pembuat Web</h5>
                            <!-- Gambar Pembuat Web -->
                            <img src="{{ asset('Penulis1.jpg') }}" alt="gambar pembuat" width="100">
                            <!-- Deskripsi Pembuat Web -->
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem non nostrum ea optio
                                magnam atque quam asperiores, rem neque et adipisci nisi. Sunt vel nulla necessitatibus
                                neque quis, ipsa eos?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bagian Testimoni dan Video Intro -->
    <div class="testi bg-info text-white p-3">
        <!-- Bagian Konten Testimoni -->
        <section class="content2">
            <div class="container">
                <div class="testimoni">
                    <!-- Judul dan Isi Testimoni -->
                    <h3><b>Kenapa Harus Dewantara ?</b></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ipsa similique sed soluta,
                        sequi dignissimos architecto. Explicabo iusto perspiciatis eum eveniet. Vitae debitis obcaecati
                        sed ullam minima temporibus laborum recusandae.</p>
                </div>
            </div>
        </section>
        <!-- Bagian Video Testimoni -->
        <div class="vidio_intro bg-light p-3">
            <div class="container">
                <h3 class="text-white">Video Testimoni</h3>
                <!-- Video Player -->
                <video width="350" height="250" controls>
                    <source src="{{ asset('Tutor_jarkom.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <!-- Bagian Footer -->
    <div class="footer bg-dark p-3">
        <div class="container">
            <!-- Hak Cipta -->
            <p class="text-center">Copyright @2023 Fauzan Akmal Mukhlas All rights reserved.</p>
        </div>
    </div>

    <!-- Menghubungkan dengan file JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>