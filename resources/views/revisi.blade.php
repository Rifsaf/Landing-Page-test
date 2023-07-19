<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @vite('resources/js/app.js')
    @vite('resources/sass/main/app.scss')
</head>
<body>
    <div class="index">
        <nav class="nav-bar bg-main">
            <div class="container">
                <div class="navbar-head">
                    <div class="navbar-logo-navs">
                        <a href=""><img src="{{
                            Vite::asset('resources/img/nav/logo.png') }}" alt="logo">
                            </a>
                            <img class="logo-layer" src="{{
                                Vite::asset('resources/img/nav/logo-layer.png') }}"   alt="logo">

                            <a href="">Homepage</a>
                            <a href="">Tentang</a>
                            <a href="">Halaman</a>
                            <a href="">Daftar Hotel</a>
                            <a href="">Bantuan</a>
                    </div>
                    <div class="navbar-language">
                        <a href=""><img src="{{
                            Vite::asset('resources\img\nav\image 2.png') }}" alt=""> <span>Indonesia (IDN)</span><i class="bi bi-chevron-compact-down"></i></a>
                        <div class="navbar-dropdown">
                            <a href=""><img src="{{
                                Vite::asset('resources\img\nav\image 2.png') }}" alt=""> <span>Indonesia (IDN)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Section-about --}}
        <section class="s-about">
            <div class="container section ">
                <div class="pic-up">
                    <img src="{{
                        Vite::asset('resources/img/image 1.png') }}" alt="Gambar section-atas">
                </div>
               <div class="about-inner ">
                <div class="section-header">
                    <div class="line">
                        <hr>
                    </div>
                    <p>Hotel Operator</p>
                    <h1>Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
                </div>
                <div class="about-des">
                    <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
                    <a href="" class="button">Konsultasikan Bisnis Saya</a>
                </div>
               </div>
               <div class="scroll">
                <a href=""><span>Scroll</span><i class="bi bi-arrow-right"></i></a>
               </div>
            </div>
        </section>

        {{-- section-workflow --}}
        <section class="s-workflow">
            <div class="container section">
                {{-- <img class="worl" src="{{
                    Vite::asset('resources/img/workflow-vector.png') }}" alt="company-logo"> --}}
                <div class="workflow-inner">
                    <div class="section-header">
                        <div class="line"><hr></div>
                        <p>Our Workflow</p>
                        <h1>Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>
                    </div>
                    <div class="workflow">
                        <div class="workflow-item-grid">
                            <div class="workflow-item first">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (1).png') }}" alt="">
                                </div>
                                <p class="title">Tantangan</p>
                                <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                            </div>

                            <div class="workflow-item second">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (4).png') }}" alt="">
                                </div>
                                <p class="title">Rumusan</p>
                                <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut</p>
                            </div>

                            <div class="workflow-item">
                                <div class="workflow-item-icon bg-bblue third">
                                    <img class="bg-bblue" src="{{
                                        Vite::asset('resources\img\Sec-2 (3).png') }}" alt="">
                                </div>
                                <p class="title">Goals</p>
                                <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                            </div>

                            <div class="workflow-item fourth">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (2).png') }}" alt="">
                                </div>
                                <p class="title">Ideas</p>
                                    <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section service --}}
        <section class="s-service">
            <div class="container section">
                <img class="layer" src="{{
                    Vite::asset('resources\img\servcie-design elements.svg') }}" alt="">
                <div class="service-inner">
                    <div class="section-header">
                        <div class="line"><hr></div>
                        <p>Our Service</p>
                        <h1>Apa Saja yang Bisa Kami Bantu ?</h1>
                    </div>

                    <div class="service-grid-item">
                        <div class="service-item">
                            <div class="service-icon">
                                <p class="service-num">01</p>
                                <img src="{{
                                    Vite::asset('resources/img/Sec-3.png') }}" alt="">
                                <p>Revenue Management Service</p>
                                <a href="" class="button-s">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-icon">
                                <p  class="service-num">02</p>
                                <img src="{{
                                    Vite::asset('resources\img\Sec-3 (2).png') }}" alt="">
                                <p class="p-s">Full Manage Service </p>
                                <a href="" class="button-s">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-icon">
                                <p class="service-num">03</p>
                                <img src="{{
                                    Vite::asset('resources\img\Sec-3 (3).png') }}" alt="">
                                <p>Asset Monetize Service</p>
                                <a href="" class="button-s">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section product --}}
        <section class="s-product">
            <div class="container section">
                <div class="product-inner">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Our Latest Products</p>
                            <div class="line"><hr></div>
                            <h1>Project Terbaru Kami</h1>
                        </div>
                    </div>

                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide" style="background-image: url('/resource/img/slide-sectiom.png')"> </div>
                          <div class="swiper-slide">Slide 2</div>
                          <div class="swiper-slide">Slide 3</div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      </div>
                </div>
            </div>
        </section>

        {{-- section testimonial --}}
        <section class="s-testimonial">
            <div class="container section">
                <div class="slide-profile">
                    <div class="pic">
                        <img src="{{
                            Vite::asset('resources/img/slide.png') }}" alt="">
                    </div>
                </div>
                <div class="testimonial-inner">
                    <div class="testimonial-review">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Our Testimonials</p>
                            <h1>Yang Klien Kami katakan</h1>
                        </div>
                            <div class="review">
                                <img src="{{
                                    Vite::asset('resources/img/quote.png') }}" alt="quote-logo">
                                <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                            </div>
                            <div class="company-review">
                                <div class="review-company-logo">
                                    <img src="{{
                                        Vite::asset('resources/img/image-6.png') }}" alt="company-logo">
                                </div>
                                <div class="review-company-name">
                                    <h3>Chaim Desmond</h3>
                                    <p>CEO of Yellow Hotel</p>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </section>


      <!--Section Contacts-->
        <section class="s-contact">
            <div class="container section">
                <img src="{{
                    Vite::asset('resources\img\Design elements.svg') }}" alt="">
                <div class="contact-inner">
                    <div class="contact-des">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Hubungu Kami</p>
                            <h1>Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h1>
                        </div>
                        <hr class="stroke">
                        <p>Ada kepentingan bisnismu yang ingin didiskusikan dengan kami, yuk segera isi form disamping, konsultasi gratis kok!</p>
                    </div>
                    <div class="contact-form">
                        <form action="">
                            <div class="contact-form-row">
                                <label for="">Nama Lengkap</label>
                                <input type="text"placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="contact-form-row">
                                <label for="">Nama Perusahaan</label>
                                <input type="text"placeholder="Masukan Nama Perusahaan">
                            </div>
                            <div class="contact-form-row">
                                <label for="">Nomor Whatsapp Aktif</label>
                                <input type="text"placeholder="Masukan Nomor Whatsapp">
                            </div>
                            <a href="">Jadwalkan Konsultasi<i class="bi bi-arrow-right"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--Section footer-->
        <footer class="s-footer">
            <div class="container section">
                <div class="footer-inner">
                    <div class="footer-heading">
                        <img src="{{
                            Vite::asset('resources/img/nav/logo.png') }}" alt="logo">
                        <img class="logo-layer"src="{{
                            Vite::asset('resources/img/nav/logo-layer.png') }}" alt="logo">
                    </div>
                    <div class="footer-content">
                        <div class="footer-grid">
                            <div class="footer-item">
                                <p>Halaman utama</p>
                                <a href="">Homepage</a>
                            </div>
                            <div class="footer-item">
                                <p>Perusahaan</p>
                                <a href="">Tentang Kami</a>
                                <a href="">Daftar Hotel</a>
                            </div>
                            <div class="footer-item">
                                <p>Temukan kami</p>
                                <a href="">Bantuan</a>
                                <a href="">Hubungi Kami</a>
                            </div>
                            <div class="footer-item-media">
                                <p>Social Media</p>
                                <a href=""><img src="{{
                                    Vite::asset('resources/img/facebook.svg') }}" alt="logo"></i></a>
                                <a href=""><img src="{{
                                    Vite::asset('resources/img/youtube.svg') }}" alt="logo"></i></a>
                                <a href=""><img src="{{
                                    Vite::asset('resources/img/instagram.svg') }}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="footer-content-policy">
                        <div class="footer-policy">
                            <a href="">Pemberitahuan Privasi</a>
                            <a href="">Syarat dan Ketentuan</a>
                        </div>
                        <div class="footer-language">
                            <img src="{{
                                Vite::asset('resources/img/bhs.png') }} " alt="">
                            <a>Bahasa Indonesia <img src="{{
                                Vite::asset('resources/img/footer/arrow-down.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
</body>
</html>
