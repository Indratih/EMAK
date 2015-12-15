  @extends('layouts.main')

  @section('dataUtama')
    <header id="home">
        <section class="hero" id="hero">
            <div class="container">
              <div class="row" style="display:none;">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner" style="background-color:rgba(255, 255, 255, 0.86);  margin-top: 90px;">
                  <div>
                    <h1 class="animated fadeInDown">SELAMAT DATANG<span>PEREMPUAN KREATIF</span>INDONESIA</h1>
                    <p class="animated fadeInUp delay-05s">Kami mengajak <em>perempuan Indonesia</em> untuk menciptakan ide-ide kreatif dalam membuat hasta karya yang akan didukung oleh EMAK</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </header>

        <!--  Display featured project -->
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
                <h1 class="arrow">PROYEK POPULER</h1>
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_1.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>PITA HIAS UNTUK KOTAK KADO</h2>
                      <p>Siapa yang tidak suka diberi hadiah? Kebanyakan orang suka apabila diberi hadiah. Meskipun terkadang hadiah tidak dilihat...</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_b.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>HELIKOPTER DENGAN BOTOL BEKAS</h2>
                      <p>Memiliki mainan untuk anak kita tidak perlu membeli dengan harga yang sangat mahal, botol air mineral bekaspun dapat kita manfaatkan...</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_c.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>ALAS PIRING DENGAN KEMASAN MINUMAN</h2>
                      <p>Kemasan gelas air mineral dapat kita manfaatkan untuk membuat alas piring cantik, bahan cukup mudah dan dapat ditemukan dimana saja...</p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_d.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>SEDOTAN LABIRIN</h2>
                      <p>Sedotan bekas dapat kita manfaatkan menjadi sebuah mainan anak-anak yang unik, hanya dengan menggunakan bahan sedotan dan kardus bekas kita...</p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_e.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>TAS KOPI</h2>
                      <p>Bungkus kopi atau susu yang biasanya kita buang dapat kita manfaatkan menjadi sebuah hasta karya unik yaitu dengan menubahnya menjadi sebuah tas...</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix-featured">
                        <div class="img">
                          <img src="{{ asset('assets/img/tutorial_f.jpg') }}" alt="Portfolio Item">
                          <div class="overlay">
                            <a href="/pita-hias" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                            <a class="close-overlay hidden">x</a>
                          </div>
                        </div>
                      </div>
                      <h2>SANDAL FLANEL</h2>
                      <p>Kain flanel selain dapat kita gunakan untuk membuat bentuk bunga dari kain flanel, juga dapat kita manfaatkan untuk membuat sandal...</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="features text-center section-padding-minimal" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Dapatkan katagori lainnya !</h1>
                <div class="features-wrapper">
                  <div class="col-md-3 wp2">
                    <div class="icon">
                      <i class="fa fa-plus shadow"></i>
                    </div>
                    <h2>Aksesoris<br/><span class="kat-list">565 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-paper-plane shadow"></i>
                    </div>
                    <h2>Boneka<br/><span class="kat-list">650 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-suitcase shadow"></i>
                    </div>
                    <h2>Dompet<br/><span class="kat-list">1,565 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-briefcase shadow"></i>
                    </div>
                    <h2>Tas<br/><span class="kat-list">45 PROYEK</span></h2>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-3 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-th shadow"></i>
                    </div>
                    <h2>Sepatu & Sandal<br/><span class="kat-list">12 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-home shadow"></i>
                    </div>
                    <h2>Hiasan Rumah<br/><span class="kat-list">10,060 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-heart shadow"></i>
                    </div>
                    <h2>Rotan<br/><span class="kat-list">43 PROYEK</span></h2>
                  </div>
                  <div class="col-md-3 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-beer shadow"></i>
                    </div>
                    <h2>Tanah Liat<br/><span class="kat-list">327 PROYEK</span></h2>
                  </div>
                   <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="features text-center info-homebg" id="features">
         <h1 style="margin-bottom:40px;">Mengapa Harus EMAK ?</h1>

          <div class="row features-wrapper-why">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-home">
            <span class="fa fa-users"></span> <span>1,200,000 <br><small>User terdaftar</span></small>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-home">
              <span class="fa fa-gear"></span> <span>1,356 <br><small>Proyek dibuat</span></small>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 info-home">
              <span class="fa fa-child"></span> <span>1,234,890,876 <br/><small>Donasi yang diberikan</span></small>
            </div>
          </div>
        </section>

        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Apa itu EMAK?</h1>
                        <p>EMAK (kata panggilan lain untuk ibu) adalah portal yang mewadahi ide kreatif perempuan dalam membuat produk kerajinan tangan yang akan menarik investor(user) untuk berinvestasi/berdonasi terhadap produk yang dibuat.</p>
                                    <p>Saat ini banyak perempuan-perempuan Indonesia yang kreatif di bidang kerajinan, namun tidak maksimal dalam pengelolaan hasil yang didapatkan.</p>
                        <p>Kami mengajak perempuan-perempuan kreatif Indonesia untuk menciptakan ide-ide kreatif yang akan didukung oleh EMAK.</p>
                      </li>
                      <li>
                        <h1 class="arrow">Bagaimana EMAK Bekerja?</h1>
                        <div class="col-md-12">
                            <div class="service-sec">
                                
                                  <div class="icon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                  
                                  <div class="detail text-left">
                                    
                                      <p>Author (user) membuat kerajinan yang akan dipublish ke Emak, lalu sistem akan menampilkan produk kerajinan.</p>
                                  </div>
                                  
                              </div>
                         </div>
                         <div class="col-md-12">
                            <div class="service-sec">
                                
                                  <div class="icon">
                                    <i class="fa fa-users"></i>
                                  </div>
                                  
                                  <div class="detail text-left">
                                    
                                      <p>Investor/donator akan melihat hasil kerajinan, memberikan donasi. Jumlah donasi yang diberikan oleh donator akan menentukan apa yang akan mereka dapatkan.</p>
                                  </div>
                                  
                              </div>
                         </div>
                         <div class="col-md-12">
                            <div class="service-sec">
                                
                                  <div class="icon">
                                    <i class="fa fa-money"></i>
                                  </div>
                                  
                                  <div class="detail text-left">
                                    
                                      <p>Jumlah donasi satu produk yang didapatkan author akan diakumulasi. Hasil donasi akan dibagi 25% untuk EMAK untuk pengelolaan sistem, 75% untuk author untuk pembuatan dan pengembangan produk.</p>
                                  </div>
                                  
                              </div>
                         </div>
                        
                        
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  @stop