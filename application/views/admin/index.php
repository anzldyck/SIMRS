
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total; ?></h3>

                <p>Data Pasien</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-injured"></i>
              </div>
              <a href="<?= base_url('pasien') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $totald; ?><sup style="font-size: 20px"></sup></h3>

                <p>Data Dokter</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
              <a href="<?= base_url('dokter') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $totalo; ?></h3>

                <p>Data Obat</p>
              </div>
              <div class="icon">
                <i class="fas fa-laptop-medical"></i>
              </div>
              <a href="<?= base_url('obat') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $totalp; ?></h3>

                <p>Poliklinik</p>
              </div>
              <div class="icon">
                <i class="fas fa-landmark"></i>
              </div>
              <a href="<?= base_url('poliklinik') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

         






                          <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 24px;">
                                        INFORMASI</h5>
                                        <hr>
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="<?= base_url('assets/') ?>img/1.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?= base_url('assets/') ?>img/2.jpg" alt="Second slide">
                                                </div>
                                                <!-- <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/3.jpg" alt="Third slide">
                                                </div> -->
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Data Ketersediaan Kamar Rawat Inap -->
                           <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body" style="height: auto;"><h5 class="card-title" style="font-size: 24px;">DAFTAR RUANG RAWAT INAP</h5>
                                        <table class="mb-0 table table-striped">
                                            <thead>
                                            <tr>
                                                </style>
                                                <th>Kelas Kamar</th>
                                                <th>Jumlah Bed</th>
                                                <th>Bed Terisi</th>
                                                <th>Bed Kosong</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="height: 50px;">Kelas 1</th>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-primary">4</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-success">0</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-danger">4</div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="height: 50px;">Kelas 2</th>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-primary">7</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-success">0</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-danger">7</div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="height: 50px;">Kelas 3</th>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-primary">12</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-success">3</div></td>
                                                <td style="font-size: 40px; font-weight: bold;"><div class="widget-numbers text-danger">9</div></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


          <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Covid Di Indonesia</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus">
                      
                    </i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
             
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px; overflow: hidden" class="mapael">
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32658821.818401575!2d99.41920736768125!3d-2.2753629505597366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1594296255436!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">Data Kasus Positif</div>
                      <h5 class="info-box-number" id="data-kasus-indo">8390</h5>
                      <span class="description-text">Orang</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">Data Meninggal</div>
                      <h5 id="data-meninggal-indo">30%</h5>
                      <span class="description-text">Orang</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">Data Sembuh</div>
                      <h5 id="data-sembuh-indo">70%</h5>
                      <span class="description-text">Orang</span>
                    </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Provinsi</span>
                <span class="info-box-number">DKI JAKARTA</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Kasus Positif</span>
                <span id="data-kasus-dki">13,359</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Meninggal</span>
                <span id="data-meninggal-dki">677</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Sembuh</span>
                <span id="data-sembuh-dki">8,647</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
        </div>

    




                        <!-- Tabel jadwal praktek dokter -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header" style="font-size: 24px;">JADWAL PRAKTEK DOKTER POLIKLINIK
                                        <div class="btn-actions-pane-right">
                                            <!-- <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama Dokter</th>
                                                <th class="text-center">Poliklinik</th>
                                                <th class="text-center">Mulai</th>
                                                <th class="text-center">Selesai</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                        <!-- Dokter Praktek No.1 -->
                                           <tr>
                                                <td class="text-center text-muted" style="font-weight: bold;">1</td>
                                                 <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="<?= base_url('assets/') ?>img/dr dimas.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">dr.DIMAS DWI,Sp.A</div>
                                                                <div class="widget-subheading opacity-7">Spesialis Anak</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight: bold;">Poliklinik Anak</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">16.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">19.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge badge-success" style="font-size: 20px; font-weight: bold;">Praktek</div>
                                                </td>
                                            </tr>


                                    <!-- Dokter Praktek No.2 -->
                                            <tr>
                                                <td class="text-center text-muted" style="font-weight: bold;">2</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="<?= base_url('assets/') ?>img/dr hasan.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">dr.HASANUDIN ALIM,Sp.PD</div>
                                                                <div class="widget-subheading opacity-7">Spesialis Penyakit Dalam</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight: bold;">Poliklinik Penyakit Dalam</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">
                                                    <a style="font-size: 20px; font-weight: bold;">16.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">18.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge badge-success" style="font-size: 20px; font-weight: bold;">Praktek</div>
                                                </td>
                                            </tr>

                                    <!-- Dokter Praktek No.3 -->
                                           <tr>
                                                <td class="text-center text-muted" style="font-weight: bold;">3</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="<?= base_url('assets/') ?>img/dr wisnu.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">dr.PUTRA AGUNG.W.M,Sp.OG</div>
                                                                <div class="widget-subheading opacity-7">Spesialis Kandungan/Obgyn</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight: bold;">Poliklinik Kandungan/Obgyn</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">09.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">14.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge badge-success" style="font-size: 20px; font-weight: bold;">Praktek</div>
                                                </td>
                                            </tr>

                                    <!-- Dokter Praktek No.4 -->
                                            <tr>
                                                <td class="text-center text-muted" style="font-weight: bold;">4</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="<?= base_url('assets/') ?>img/dr steven.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">dr.STEVEN ARISTIDA,Sp.OG</div>
                                                                <div class="widget-subheading opacity-7">Spesialis Kandungan/Obgyn</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight: bold;">Poliklinik Kandungan/Obgyn</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">14.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a style="font-size: 20px; font-weight: bold;">17.00</a></button>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge badge-success" style="font-size: 20px; font-weight: bold;">Praktek</div>
                                                </td>
                                            </tr>   
                                            <!-- Jika tidak praktek
                                            <td class="text-center">
                                                    <div class="badge badge-danger">Tidak Praktek</div>
                                            </td> -->

                                            <!-- Jika sudah praktek
                                            <td class="text-center">
                                                    <div class="badge badge-info">Praktek Berakhir</div>
                                            </td> -->
    
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-block text-center card-footer">
                                        <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                        </div>


<div class="text-white">
<marquee style="border-radius: 5px" bgcolor="#e83e8c" height="25px">Data Penyebaran Virus Corona di Dunia : Positif <span id="data-kasus"></span> Orang || Sembuh <span id="data-sembuh"></span> Orang || Meninggal <span id="data-meninggal"></span> Orang</marquee>
</div>