<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    @vite('resources/js/app.js')
    @vite('resources/sass/main/app.scss')
</head>
<body>
    <div class="main">
        <nav class="nav-bar">
            <div class="container">
                <div class="navbar-head">
                    <div class="navbar-logo-navs">
                        <a href=""><img class="logo" src="{{
                            Vite::asset('resources/img/nav/logofix.png') }}" alt="logo">
                            </a>
                           <div class="nav-menu">
                            <a class="nav-menu-item" href="">Homepage</a>
                            <a class="nav-menu-item" href="">Tentang</a>
                            <a class="nav-menu-item" href="">Halaman</a>
                            <a class="nav-menu-item" href="">Daftar Hotel</a>
                            <a class="nav-menu-item" href="">Bantuan</a>
                           </div>
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
        <section class="s-about bg-main">
            <div class="container section ">
               <div class="about-inner ">
                <div class="about-img">
                    <img src="{{
                        Vite::asset('resources/img/image 1.png') }}" alt="Gambar section-atas">
                </div>
                <div class="about-text">
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
            </div>
        </section>

        {{-- section-workflow --}}
        <section class="s-workflow">
            <div class="container">
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
                                <p class="workflow-title">Tantangan</p>
                                <p class="workflow-des">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                            </div>

                            <div class="workflow-item second">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (4).png') }}" alt="">
                                </div>
                                <p class="workflow-title">Rumusan</p>
                                <p class="workflow-des">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut</p>
                            </div>

                            <div class="workflow-item">
                                <div class="workflow-item-icon bg-bblue third">
                                    <img class="bg-bblue" src="{{
                                        Vite::asset('resources\img\Sec-2 (3).png') }}" alt="">
                                </div>
                                <p class="workflow-title">Goals</p>
                                <p class="workflow-des">Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                            </div>

                            <div class="workflow-item fourth">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (2).png') }}" alt="">
                                </div>
                                <p class="workflow-title">Ideas</p>
                                    <p class="workflow-des">Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section service --}}
        <section class="s-service">
            <div class="container section">
                <div class="service-inner">
                    <div class="section-header">
                        <div class="line"><hr></div>
                        <p>Our Service</p>
                        <h1>Apa Saja yang Bisa Kami Bantu ?</h1>
                    </div>

                    <div class="service-grid-item">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <p class="service-item-icon-num">01</p>
                                <img class="service-logo" src="{{
                                    Vite::asset('resources/img/Sec-3.png') }}" alt="">
                                <p class="service-item-title">Revenue Management Service</p>
                                <a href="" class="service-item-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-item-icon">
                                <p  class="service-item-icon-num">02</p>
                                <img class="service-logo" src="{{
                                    Vite::asset('resources\img\Sec-3 (2).png') }}" alt="">
                                <p class="service-item-title">Full Manage Service </p>
                                <a href="" class="service-item-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-item-icon">
                                <p class="service-item-icon-num">03</p>
                                <img class="service-logo" src="{{
                                    Vite::asset('resources\img\Sec-3 (3).png') }}" alt="">
                                <p class="service-item-title">Asset Monetize Service</p>
                                <a href="" class="service-item-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
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
                        <div id="carousel-project" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{
                                    Vite::asset('resources/img/slide-sectiom.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="carousel-page">1/4 OPERATIONAL PROJECT</p>
                                    <h1>Townhouse Oak</h1>
                                    <p class="carousel-des">Brand tertinggi di OYO</p>
                                </div>
                                <div class="carousel-detail">
                                    <a class='carousel-detail-icon' href=""><img src="{{
                                        Vite::asset('resources/img/arrow-left.png') }}" alt=""></a>
                                    <a class="carousel-detail-des" href="">See Detail</a></p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{
                                    Vite::asset('resources/img/slide-sectiom.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="carousel-page">1/4 OPERATIONAL PROJECT</p>
                                    <h1>Townhouse Oak</h1>
                                    <p class="carousel-des">Brand tertinggi di OYO</p>
                                </div>
                                <div class="carousel-detail">
                                    <a class='carousel-detail-icon' href=""><img src="{{
                                        Vite::asset('resources/img/arrow-left.png') }}" alt=""></a>
                                    <a class="carousel-detail-des" href="">See Detail</a></p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="{{
                                    Vite::asset('resources/img/slide-sectiom.png') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="carousel-page">1/4 OPERATIONAL PROJECT</p>
                                    <h1>Townhouse Oak</h1>
                                    <p class="carousel-des">Brand tertinggi di OYO</p>
                                </div>
                                <div class="carousel-detail">
                                    <a class='carousel-detail-icon' href=""><img src="{{
                                        Vite::asset('resources/img/arrow-left.png') }}" alt=""></a>
                                   <a class="carousel-detail-des" href="">See Detail</a></p>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
            </div>
            <button class="carousel-prev" type="button" data-bs-target="#carousel-project" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-next" type="button" data-bs-target="#carousel-project" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </section>

        {{-- section testimonial --}}
        <section class="s-testimonial">
            <div class="container section">
                <div class="testimonial-inner">
                    <div class="testimonial-item">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Our Testimonials</p>
                            <h1>Yang Klien Kami katakan</h1>
                        </div>
                        <div class="testimonial-review-text">
                            <p><img src="{{
                                Vite::asset('resources/img/quote.png') }}" alt="quote-logo"></p>
                            <p>GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                        </div>
                        <div class="testimonial-review-company">
                            <div class="testimonial-review-company-logo">
                                <img src="{{
                                    Vite::asset('resources/img/image-6.png') }}" alt="company-logo">
                            </div>
                            <div class="testimonial-review-company-name">
                                <h3>Chaim Desmond</h3>
                                <p>CEO of Yellow Hotel</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item-slide">
                        <div id="carousel-testimonial" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{
                                    Vite::asset('resources/img/slide.png') }}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{
                                     Vite::asset('resources/img/slide.png') }}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{
                                   Vite::asset('resources/img/slide.png') }}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <div class="carousel-button">
                                <button class="carousel-button-prev" type="button" data-bs-target="#carousel-testimonial" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-button-next" type="button" data-bs-target="#carousel-testimonial" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>


      <!--Section Contacts-->
        <section class="s-contact">
            {{-- <img src="{{
                Vite::asset('resources\img\Design elements.svg') }}" alt=""> --}}
            <div class="container section">
                <div class="contact-inner">
                    <div class="contact-des">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Hubungi Kami</p>
                            <h1>Ingin Mendiskusikan Bisnis Pariwisata Anda ?</h1>
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
            <div class="container">
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
                        <div class="footer-language" id="footer-language">
                            <div class="footer-language-wrapper">
                                <img class="footer-language-logo" src="{{
                                    Vite::asset('resources/img/bhs.png') }} " alt="">
                                <div class="footer-language-button"><a href="">Bahasa Indonesia <img src="{{
                                    Vite::asset('resources/img/footer/arrow-down.svg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="footer-language-list">
                                <ul>
                                    <li><a href="">Bahasa Indonesia</a></li>
                                    <li><a href="">Bahasa Indonesia</a></li>
                                    <li><a href="">Bahasa Indonesia</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if($(window).scrollTop()>100){
                    $('.nav-bar').addClass('blue');
                }
                else{
                    $('.nav-bar').removeClass('blue');
                }
            });

            $('.footer-language-button').click(function (e) {
                e.preventDefault();
                $('.footer-language-list').toggleClass("show");
            });
            $('.footer-language-button').click(function (e) {
                e.preventDefault();
                $('.footer-language-button').toggleClass("ani");
            });
        });


    </script>
</body>
    {{-- <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script> --}}
</body>
</html>
