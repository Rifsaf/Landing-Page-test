@extends('landing.layouts.app')
@section('content')
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
                <div class="about-scroll">
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
                                <p class="workflow-item-title">Tantangan</p>
                                <p class="workflow-item-des">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</p>
                            </div>

                            <div class="workflow-item second">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (4).png') }}" alt="">
                                </div>
                                <p class="workflow-item-title">Rumusan</p>
                                <p class="workflow-item-des">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut</p>
                            </div>

                            <div class="workflow-item">
                                <div class="workflow-item-icon bg-bblue third">
                                    <img class="bg-bblue" src="{{
                                        Vite::asset('resources\img\Sec-2 (3).png') }}" alt="">
                                </div>
                                <p class="workflow-item-title">Goals</p>
                                <p class="workflow-item-des">Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                            </div>

                            <div class="workflow-item fourth">
                                <div class="workflow-item-icon">
                                    <img src="{{
                                        Vite::asset('resources\img\Sec-2 (2).png') }}" alt="">
                                </div>
                                <p class="workflow-item-title">Ideas</p>
                                    <p class="workflow-item-des">Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
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

                    <div class="service-item-grid">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <p class="service-item-icon-num">01</p>
                                <img class="service-item-icon-logo" src="{{
                                    Vite::asset('resources/img/Sec-3.png') }}" alt="">
                                <p class="service-item-icon-title">Revenue Management Service</p>
                                <a href="" class="service-item-icon-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-item-icon">
                                <p  class="service-item-icon-num">02</p>
                                <img class="service-item-icon-logo" src="{{
                                    Vite::asset('resources\img\Sec-3 (2).png') }}" alt="">
                                <p class="service-item-icon-title
                                medium-title">Full Manage Service </p>
                                <a href="" class="service-item-icon-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-item-icon">
                                <p class="service-item-icon-num">03</p>
                                <img class="service-item-icon-logo" src="{{
                                    Vite::asset('resources\img\Sec-3 (3).png') }}" alt="">
                                <p class="service-item-icon-title">Asset Monetize Service</p>
                                <a href="" class="service-item-icon-button">Saya Tertarik<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- section product --}}
        <section class="s-product">
            <div class="container">
                <div class="product-inner">
                        <div class="section-header">
                            <div class="line"><hr></div>
                            <p>Our Latest Products</p>
                            <div class="line"><hr></div>
                            <h1>Project Terbaru Kami</h1>
                        </div>
                        <div id="carousel-project" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item p-2 active">
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
                                    <a class="carousel-detail-des" href="">Lihat Detail</a></p>
                                </div>
                              </div>
                              <div class="carousel-item p-2">
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
                                    <a class="carousel-detail-des" href="">Lihat Detail</a></p>
                                </div>
                              </div>
                              <div class="carousel-item p-2">
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
                                   <a class="carousel-detail-des" href="">Lihat Detail</a></p>
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
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
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
                              <div class="carousel-item ">
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
                            </div>
                        </div>
                            {{-- <div class="testimonial-review-text">
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
                            </div> --}}
                        </div>

                    <div class="testimonial-item-slide">
                        <div id="carousel-testimonial" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item p-2 active">
                                <img src="{{
                                    Vite::asset('resources/img/slide.png') }}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item p-2">
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
        @push('scripts')
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
        @endpush
@endsection
