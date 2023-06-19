<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | Tabel Topik</strong></h1>

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
                                <a href="/layanan-data/tabel-topik/se2016/1/chart" class="nav-link text-black" data-toggle="tab" data-target="#tab-grafik">Grafik</a>
                            </li>
                            <li class="nav-item">
                                <a href="/layanan-data/tabel-topik/se2016/1/peta" class="nav-link text-black active" data-toggle="tab" data-target="#tab-peta" style="background-color: #FF9E3C;">Peta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-lg">
                    <div class="tab-content">
                        <!-- peta -->
                        <div id="tab-peta" class="tab-pane active">
                            <!-- judul peta -->
                            <h4 class="m-4" style="text-align: center;">Banyaknya Usaha/Perusahaan, Pekerja, Balas Jasa dan Upah Pekerja UMK dan UMB Menurut Wilayah</h4>

                            <!-- badan peta  -->
                            <div class="chart" style="min-height: 450px;">
                                <div class="container-fluid">
                                    <div class=" shadow container-md chart-container position-relative md:w-80" style="aspect-ratio: 2; border-radius: 40px;" data-aos="fade-up" data-aos-duration="500">
                                        <!-- gambar peta     -->
                                        <img class="img-fluid rounded mx-auto d-block" src="/assets/images/peta3.png" alt="peta" style="max-width:100%; height:auto; aspect-ratio: 2; border-radius: 40px;">
                                        <!-- <div class="embed-responsive mx-auto d-block">
                                             <iframe class="embed-responsive-item" src=""></iframe>
                                            <iframe class="embed-responsive-item rounded mx-auto d-block mb-4" style="max-width:100%; height:100%; aspect-ratio: 2; border-radius: 40px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32660019.888319816!2d95.81973010393916!3d-2.221834595104217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1687024288926!5m2!1sid!2sid"></iframe>
                                        </div> -->
                                        <div class="px-5 mb-3 row">
                                            <label class="col-sm-2 col-form-label"><span class="d-block">Kategori 1</span></label>
                                            <div class="col-sm-4">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Banyak usaha">Banyak usaha</option>
                                                    <option value="Banyak pekerja dibayar">Banyak pekerja dibayar</option>
                                                    <option value="Jumlah pekerja">Jumlah pekerja</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="px-5 mb-3 row">
                                            <label class="col-sm-2 col-form-label"><span class="d-block">Kategori 2</span></label>
                                            <div class="col-sm-4">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="Banyak usaha">Banyak usaha</option>
                                                    <option value="Banyak pekerja dibayar">Banyak pekerja dibayar</option>
                                                    <option value="Jumlah pekerja">Jumlah pekerja</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="px-5 mb-3 row">
                                            <div class="col-sm-2 col-form-label"></div>
                                            <div class="col-sm-4">
                                                <button class="btn text-black mb-3" onclick="reload_map();return false;" style="background-color: #FF9E3C;">Terapkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

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


    </section>

    <script src="/assets/js/layananData/select2.min.js"></script>
    <script src="/assets/js/layananData/datatables.min.js"></script>
    <script src="/assets/js/layananData/slick.min.js"></script>
    <script src="/assets/js/layananData/app.js"></script>
    <script src="/assets/js/layananData/jquery.fancybox.min.js"></script>
    <script src="/assets/js/layananData/sweetalert.js"></script>

    <!-- VectorMap Germany -->
    <!-- <script src="@@path/vendor/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
</div>
<?= $this->endSection(); ?>