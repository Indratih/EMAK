  @extends('layouts.main')

  @section('dataUtama')
<section class="portfolio text-center section-padding" id="project">
          <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                  <h1 class="arrow">Pita Hias untuk Kotak Kado</h1>
                 <p>Siapa yang tidak suka diberi hadiah? Kebanyakan orang suka apabila diberi hadiah. Meskipun terkadang hadiah tidak dilihat dari berapa harganya, namun kesungguhan hati pemberinya itu yang berharga. Untuk memberikan hadiah kepada orang lain, biasanya dilengkapi dengan pembungkus hadiah berupa kotak kado, tak lupa dengan hiasan pita di atasnya.
                 </p>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                 <img src="{{ asset('assets/img/tutorial_1.jpg') }}" class="img-responsive" alt="Image" width="100%">
               </div>
            </div>
          </div>

        </section>

        <section class="features section-padding-minimal" id="project">
          <div class="container">
            <div class="row">
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <h3 class="text-left judul-keterangan">Author</h3>
                  <div class="keterangan-box">
                  <img src="{{ asset('assets/img/profil-1.jpg') }}" style="float: left; padding : 0px 5px 5px;">
                    <p>Saya adalah seorang yang sangat suka membuat barang "tak tampak" menjadi "karya", hobi dengan pembuatan hasta karya menggunakan kertas bekas.</p>
                  </div>
               </div>
               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  <h3 class="text-left judul-keterangan">Bahan</h3>
                    <div class="keterangan-box">
                      <ul class="list-bahan">
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Kertas bekas (majalah / brosur)
                        </p>
                      </li>
                      
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Lem kertas
                        </p>
                      </li>
                      
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Double tip
                        </p>
                      </li>
                     
                      </li>
                    </ul>
                  </div>
                
               </div>
               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <h3 class="text-left judul-keterangan">Alat</h3>
                    <div class="keterangan-box">
                      <ul class="list-bahan">
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Penggaris
                        </p>
                      </li>
                      
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Kater
                        </p>
                      </li>
                      
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Staples
                        </p>
                      </li>
                      
                      <li>
                        <p>
                          <i class="fa fa-check"></i>
                          Gunting
                        </p>
                      </li>
                      
                    </ul>
                  </div>
               </div>
               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <h3 class="text-left judul-keterangan">Keterangan</h3>
                  <div class="keterangan-box">
                    <p>Level Kesulitan:<br/><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><br/><i>Cukup Sulit</i></p>
                    <p>Waktu Pengerjaan:<br/><span class="fa fa-clock-o"></span></span><i>10 menit - 1 jam</i></p>
                  </div>
               </div>
             </div>
           </div>
         </section>

        <section class="features section-padding-minimal" id="project-step">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-centered project-step">
        <small>LANGKAH</small><br/> PERTAMA
              </div>
              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                  <p>Potong kertas bekas berukuran persegi panjang dengan lebar 1cm, dan panjang 10cm sebanyak 8 buah, 1cm dan 6cm sebanyak 6 buah, begitu seterusnya sampai dirasa cukup.</p>
                  <p><img src="{{ asset('assets/img/tutorial_2.jpg') }}" class="img-responsive" alt="Image"></p>             
              </div>
            </div>
            <hr/>
      <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-centered project-step">
        <small>LANGKAH</small><br/> KEDUA
              </div>
              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                  <p>Bentuk seperti angka 8, rekatkan pada bagian tengan lekukan. Begitu seterusnya, lakukan sampai kertas terkecil.</p>
                  <p><img src="{{ asset('assets/img/tutorial_3.jpg') }}" class="img-responsive" alt="Image"></p>             
              </div>
            </div>
            <hr/>
      <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-centered project-step">
        <small>LANGKAH</small><br/> KETIGA
              </div>
              <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                  <p>Gabungkan lekukan angka 8 dari yang terbesar berada di paling bawah, mengecil sampai ke atas menggunakan double tip.</p>
                  <p><img src="{{ asset('assets/img/tutorial_4.jpg') }}" class="img-responsive" alt="Image"></p>             
              </div>
              
            </div>
          </div>
        </section>
        <section class="features text-center donasi" id="features">
        <div class="container">
          <div class="row features-wrapper-why">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-centered">
                <h1>DUKUNG UNTUK TERUS BERKARYA</h1>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 info-donasi-bt">
                <button type="submit">
                  DONASI<br/> <small>Rp 10.000,-</small>
                  <p>Terima kasih atas dukungan anda, anda akan mendapatkan e-book secara detail tentang cara pembuatan produk ini dan update via email produk terbaru dari kami.</p>
                </button>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 info-donasi-bt">
                <button type="submit">
                  DONASI<br/> <small>Rp 20.000,-</small>
                  <p>Dapatkan 1 produk ini, dan gratis pengiriman untuk seluruh pulau jawa.</p>
                </button>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 info-donasi-bt">
                <button type="submit">
                  DONASI<br/> <small>Rp 35.000,-</small>
                  <p>Dapatkan 1 produk ini, dan gratis pengiriman untuk seluruh diluar pulau jawa.</p>
                </button>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 info-donasi-bt">
                <button type="submit">
                  DONATUR VIP<br/> <small>KONTAK KAMI</small>
                  <p>Selamat anda adalah investor tunggal untuk produk ini, dan berkesempatan untuk memproduksinya secara masal.</p>
                </button>
              </div>
            </div>
          </div>
        </section>

        <section class="features" id="comment-page">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                  <h3>Tinggalkan komentar anda :</h3>
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Komentar</span>
                    <input type="text" class="form-control" placeholder="Komentar anda.." aria-describedby="sizing-addon1">
                  </div>
                  <p><a class="btn btn-primary btn-lg navbar-right" href="#" role="button">Kirim</a></p>

                  <!-- Komentar User yang sudah login -->
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <h1 class="arrow">Temukan produk lainnya </h1>
                  <div class="overlay-effect effects clearfix-featured">
                    <div class="img">
                      <img src="{{ asset('assets/img/tutorial_1.jpg') }}" alt="Portfolio Item">
                      <div class="overlay">
                        <a href="#" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                        <a class="close-overlay hidden">x</a>
                      </div>
                    </div>
                  </div>
                  <h2>PITA HIAS UNTUK KOTAK KADO</h2>
                  <p>Siapa yang tidak suka diberi hadiah? Kebanyakan orang suka apabila diberi hadiah. Meskipun terkadang hadiah tidak dilihat...</p>
              <div class="overlay-effect effects clearfix-featured">
                  <div class="img">
                    <img src="{{ asset('assets/img/tutorial_b.jpg') }}" alt="Portfolio Item">
                    <div class="overlay">
                      <a href="#" class="expand"><i class="fa fa-search"></i><br>Lihat proyek</a>
                      <a class="close-overlay hidden">x</a>
                    </div>
                  </div>
                </div>
                <h2>HELIKOPTER DENGAN BOTOL BEKAS</h2>
                <p>Memiliki mainan untuk anak kita tidak perlu membeli dengan harga yang sangat mahal, botol air mineral bekaspun dapat kita manfaatkan...</p>
              
              </div>

            </div>
          </div>
        </section>
  @stop