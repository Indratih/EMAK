  @extends('layouts.main')

  @section('dataUtama')
  <!--  Display featured project -->
        <section class="portfolio text-center section-user-menu" id="user-page">
          <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h1 class="arrow">Selamat datang, Astrid </h1>
                 <p>EDIT PROFIL | INVOICE | SETTING</p>
                 <hr/>
        </section>

        <section class="features section-user" id="user-page">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Nama Depan</span>
                  <input type="text" class="form-control" value="Astrid" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Nama Belakang</span>
                  <input type="text" class="form-control" value="Anastasya" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Alamat Lengkap</span>
                  <input type="text" class="form-control" value="Jl.Pengarsan 328 Jakarta-Pusat" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Alamat Email</span>
                  <input type="text" class="form-control" value="henda@gmail.com" aria-describedby="sizing-addon1">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">No HP</span>
                  <input type="text" class="form-control" value="086752664322" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Pendidikan</span>
                  <input type="text" class="form-control" value="SMA" aria-describedby="sizing-addon1">
                </div>
                <div class="input-group input-group">
                  <span class="input-group-addon" id="sizing-addon1">Pekerjaan</span>
                  <input type="text" class="form-control" value="Ibu Rumah Tangga" aria-describedby="sizing-addon1">
                </div>
              </div>

            </div>
           </div>
         </section>
  @stop