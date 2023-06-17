<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Tabel Topik</strong></h1> -->

    <!-- semuanya template -->

    <section class="py-3">
        <div class="container">
            <!-- jenis visulisasi -->
            <div class="row">
                <div class="col-lg mb-2 mb-lg-0align-self-center"></div>
                <div class="col-lg-auto align-self-center">
                    <div class="btn-group col col-md-auto px-0">
                        <ul class="nav nav-pills nav-fill col col-md-auto px-0">
                            <li class="nav-item">
                                <a href="/layanan-data/tabel-topik/se2016/1/1" class="nav-link text-black" data-toggle="tab" data-target="#tab-tabel">Tabel</a>
                            </li>
                            <li class="nav-item">
                                <a href="/layanan-data/tabel-topik/se2016/1/chart" class="nav-link active text-black" data-toggle="tab" data-target="#tab-grafik" style="background-color: #FF9E3C;">Grafik</a>
                            </li>
                            <li class="nav-item">
                                <a href="/layanan-data/tabel-topik/se2016/1/peta" class="nav-link text-black" data-toggle="tab" data-target="#tab-peta">Peta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-lg">
                    <div class="tab-content">
                        <!-- chart -->
                        <div id="tab-grafik" class="tab-pane active">
                            <!-- judul chart -->
                            <h4 class="m-4" style="text-align: center;">Banyaknya Usaha/Perusahaan, Pekerja, Balas Jasa dan Upah Pekerja UMK dan UMB Menurut Wilayah</h4>

                            <!-- chart -->
                            <div id="chart" style="min-height: 450px;">
                                <div class="container-fluid">
                                    <div class=" shadow container-md chart-container position-relative md:w-80" style="aspect-ratio: 2; border-radius: 40px;" data-aos="fade-up" data-aos-duration="500">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <script src="assets/js/chart-beranda.js"></script>
                                </div>
                            </div>
                            <br />
                            <!-- tipe chart -->
                            <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-secondary" id="bar">Bar chart</button>
                                    <button class="btn btn-secondary active" id="column">Column chart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />

                    <!-- metadata  -->
                    <div class="card bg-light mb-4 offcanvas-body">
                        <div class="accordion-item">
                            <h2 class="card-header accordion-header bg-light">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Metadata Indikator
                                </button>
                            </h2>

                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" style="background-color:white">
                                <div class="card-body font-small">
                                    <p>
                                        <b>Nama</b><br />

                                        Jumlah Penduduk <br />
                                    </p>
                                    <p style="text-align: justify;">
                                        <b>Definisi</b><br />

                                        Ukuran absolut dari penduduk, dinyatakan dalam jiwa <br />
                                    </p>
                                    <p>
                                        <b>Satuan</b><br />

                                        Jiwa <br />
                                    </p>
                                    <p>
                                        <b>Mekanisme perhitungan</b><br />

                                        Penjumlahan dari setiap individu <br />
                                    </p>
                                    <p>
                                        <b>Manfaat</b><br />

                                        Sebagai dasar perencanaan pembangunan di berbagai bidang <br />
                                    </p>
                                    <p>
                                        <b>Interpretasi</b><br />

                                        Semakin tinggi angka semakin banyak jumlah penduduk <br />
                                    </p>
                                    <p>
                                        <b>Frekuensi update</b><br />

                                        Lebih dari Dua Tahunan <br />
                                    </p>
                                    <p>
                                        <b>Referensi</b><br />

                                        Badan Pusat Statistik <br />
                                    </p>
                                    <p>
                                        <b>Subyek</b><br />

                                        Kependudukan dan migrasi <br />
                                    </p>
                                    <p>
                                        <b>Ukuran</b><br />

                                        Jumlah <br />
                                    </p>
                                    <p>
                                        <b>Konsep</b><br />

                                        <b>Penduduk</b> :<br />Penduduk adalah semua orang yang berdomisili di wilayah Negara Kesatuan Republik Indonesia selama 1 tahun atau lebih dan atau mereka yang berdomisili kurang dari 1 tahun tetapi bertujuan untuk menetap selama 1 tahun atau lebih <br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- klasifikasi -->
                    <div class="card bg-light mb-4 offcanvas-body">
                        <div class="accordion-item">
                            <h2 class="card-header accordion-header bg-light">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Deskripsi Klasifikasi
                                </button>
                            </h2>

                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" style="background-color:white">
                                <div class="card-body font-small">
                                    <p>
                                        <b>
                                            <h5>Jenis Kelamin</h5>
                                        </b>
                                    </p>
                                    <p>
                                        <b>Sesuai</b><br />
                                        (definisi jelas) <br />
                                    </p>
                                    <p>
                                        <b>Tidak Sesuai</b><br />
                                        (definisi jelas) <br />
                                    </p>
                                    <p>
                                        <b>Total</b><br />
                                        Total (definisi jelas) <br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/layananData/select2.min.js"></script>
    <script src="/assets/js/layananData/datatables.min.js"></script>
    <script src="/assets/js/layananData/slick.min.js"></script>
    <script src="/assets/js/layananData/app.js"></script>
    <script src="/assets/js/layananData/jquery.fancybox.min.js"></script>
    <script src="/assets/js/layananData/sweetalert.js"></script>






</div>
<?= $this->endSection(); ?>