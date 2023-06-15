<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-md">
    <!-- JUDUL -->
    <div class="row p-4 pt-5">
        <h2 class="text-center fw-800">Hasil Sensus Ekonomi 2016</h2>
        <!-- <h4 class="text-center fw-800 text-darkorange">Mencatat Ekonomi Indonesia</h4> -->
    </div>

    <!-- DATA HASIL SE2016 -->
    <div class="row">
        <div class="col-md-7 d-none d-md-flex align-items-center justify-content-start">
            <img src="/assets/images/supermarket-shaped5.png" class="img-fluid" width="90%;" alt="background-image">
        </div>
        <div class="col-12 d-flex d-md-none align-items-center justify-content-center mb-4">
            <img src="/assets/images/supermarket-shaped7.png" class="img-fluid w-80 sm:w-60" alt="background-image">
        </div>
        <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center gap-3">
            <div class="bg-lightorange2 text-dark shadow-sm d-flex justify-content-center justify-content-md-start align-items-center w-100 p-3 gap-3 flex-wrap" style="border-radius: 40px;">
                <p class="fw-900 text-3xl m-0 text-soft-green"><i class="bi bi-caret-up-fill text-soft-green"></i> 17,5%</p>
                <div>
                    <div class="fw-800 text-1xl md:text-2xl text-middle md:text-start">26.422.256 Usaha</div>
                    <div class="fw-600 text-base md:text-1xl text-middle md:text-start">Jumlah Usaha/Perusahaan</div>
                </div>
            </div>
            <div class="bg-lightorange2 text-dark shadow-sm d-flex justify-content-center justify-content-md-start align-items-center w-100 p-3 gap-3 flex-wrap" style="border-radius: 40px;">
                <p class="fw-900 text-3xl m-0 text-soft-green"><i class="bi bi-caret-up-fill text-soft-green"></i> 20,7%</p>
                <div>
                    <div class="fw-800 text-1xl md:text-2xl text-middle md:text-start">78.673.286 Orang</div>
                    <div class="fw-600 text-base md:text-1xl text-middle md:text-start">Jumlah Tenaga Kerja</div>
                </div>
            </div>
            <div class="bg-lightorange2 text-dark shadow-sm d-flex justify-content-center justify-content-md-start align-items-center w-100 p-3 gap-3 flex-wrap" style="border-radius: 40px;">
                <p class="fw-900 text-3xl m-0 text-soft-green"><i class="bi bi-caret-up-fill text-soft-green"></i> 10,6%</p>
                <div>
                    <div class="fw-800 text-1xl md:text-2xl text-middle md:text-start">1.369.332 <small class="fw-600 text-base">*Miliar Rupiah</small></div>
                    <div class="fw-600 text-base md:text-1xl text-middle md:text-start">Balas Jasa & Upah Pekerja</div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- SEKILAS INFO SE2016 & UNDUH KUESIONER-->
<div class="container-fluid shadow-sm mt-5 p-0 bg-darkorange2 p-4" style="border-top-left-radius:40%; border-bottom-right-radius:40%;">
    <div class="container-md p-3">
        <div class="row">
            <div data-aos="zoom-in" data-aos-duration="1500" class="col-12 col-md-6 text-center p-2">
                <img src="/assets/images/logo-se2016-white-left.png" alt="logo-se2016" style="width: 50%;">
                <div class="p-3 text-white fw-600 text-base sm:text-1xl md:text-1xl">Sensus Ekonomi dilaksanakan untuk mendapatkan informasi potret utuh perekonomian bangsa, sebagai landasan penyusunan kebijakan dan perencanaan pembangunan nasional maupun regional.</div>
            </div>
            <div class="col-12 col-md-6 text-center align-items-center d-flex flex-column justify-content-center">
                <h3 class="text-white fw-800 p-3">Mencatat Ekonomi Indonesia</h3>
                <div class="d-flex flex-column flex-md-row gap-3">
                    <button data-aos="fade-right" data-aos-duration="1400" class="btn btn-darkbrown hover:darkbrown shadow rounded-pill fw-700 p-3 text-base sm:text-1xl md:text-1xl">Unduh Kuesioner</button>
                    <button data-aos="fade-left" data-aos-duration="1400" class="btn btn-darkbrown hover:darkbrown shadow rounded-pill fw-700 p-3 text-base sm:text-1xl md:text-1xl">Leaflet & Booklet</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- DATA APA YANG DIHASILKAN -->
<div class="container-md">
    <div class="row pt-5 pb-5 mt-4">
        <div class="col-12 col-md-5 d-none d-md-flex justify-content-center">
            <img class="shadow" data-aos="fade-right" data-aos-duration="1600" data-aos-delay="100" style="border-radius: 40px;" src="/assets/images/city-view-potrait.jpg" alt="picture" width="80%">
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-md-7 p-3 shadow" style="border-radius: 40px;">
            <h3 class="text-center fw-700">Data Apa yang Dihasilkan?</h3>
            <div class="p-4">
                <div class="d-flex flex-row gap-4 align-items-center">
                    <i class="text-darkorange2 bi bi-building-fill text-3xl sm:text-4xl md:text-5xl"></i>
                    <div>
                        <p class="text-darkorange2 text-base sm:text-1xl md:text-1xl fw-800 m-0">Jumlah Usaha/Perusahaan</p>
                        <p>Banyaknya entitas usaha atau tempat berlangsungnya kegiatan usaha yang dibedakan menjadi unit usaha rumah tangga dan unit usaha/perusahaan.</p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-4 align-items-center">
                    <i class="text-darkorange2 bi bi-person-badge-fill text-3xl sm:text-4xl md:text-5xl"></i>
                    <div>
                        <p class="text-darkorange2 text-base sm:text-1xl md:text-1xl fw-800 m-0">Jumlah Tenaga Kerja</p>
                        <p>Menunjukkan banyaknya orang yang terlibat, baik secara langsung maupun tidak langsung dalam proses memproduksi barang/jasa. Termasuk pekerja outsourcing dan pekerja kontrak (pekerja untuk periode singkat).</p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-4 align-items-center">
                    <i class="text-darkorange2 bi bi-wallet2 text-3xl sm:text-4xl md:text-5xl"></i>
                    <div>
                        <p class="text-darkorange2 text-base sm:text-1xl md:text-1xl fw-800 m-0">Balas Jasa dan Upah Pekerja</p>
                        <p>Balas jasa/upah pekerja menunjukan besarnya nilai yang dikeluarkan perusahaan sebagai imbal balik dari hasil usaha yang telah dihasilkan oleh pekerja.</p>
                    </div>
                </div>
                <div class="d-flex flex-row gap-4 align-items-center">
                    <i class="text-darkorange2 bi bi-cash-coin text-3xl sm:text-4xl md:text-5xl"></i>
                    <div>
                        <p class="text-darkorange2 text-base sm:text-1xl md:text-1xl fw-800 m-0">Pendapatan dan Pengeluaran</p>
                        <p>Menggambarkan nilai dari pendapatan dan pengeluaran.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- LAYANAN DATA -->
<div class="container-fluid bg-lightorange2 pt-5 pb-5 shadow-sm">
    <h3 class="text-center fw-700 pb-4">Layanan Data</h3>
    <div class="container d-flex flex-column flex-md-row flex-wrap gap-2 justify-content-around">

        <div class="btn btn-darkbrown shadow hover:darkbrown d-flex flex-md-column w-full md:w-30 justify-content-start justify-content-md-center align-items-center p-2 ms-1 me-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="border-radius:30px;">
            <i class="bi bi-file-earmark-spreadsheet text-3xl sm:text-4xl md:text-5xl p-1"></i>
            <div class="fw-800 p-2 md:text-center text-base sm:text-1xl md:text-1xl">Tabel Topik</div>
        </div>

        <button onclick="window.location.href='/perbandingan-wilayah'" class="btn btn-darkbrown shadow hover:darkbrown d-flex flex-md-column w-full md:w-30 justify-content-start justify-content-md-center align-items-center p-2 ms-1 me-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" style="border-radius:30px">
            <i class="bi bi-map text-3xl sm:text-4xl md:text-5xl p-1"></i>
            <div class="fw-800 p-2 md:text-center text-base sm:text-1xl md:text-1xl">Perbandingan Antar Wilayah</div>
        </button>

    </div>
</div>



<!-- GRAFIK HASIL SE2016 -->
<div class="container-fluid pt-5 pb-5 mt-4">
    <div class=" shadow container-md chart-container p-4 position-relative md:w-80" style="aspect-ratio: 2; border-radius: 40px;" data-aos="fade-up" data-aos-duration="1500">
        <h3 class="text-center fw-700">Grafik Hasil Sensus Ekonomi 2016</h3>
        <h4 class="text-center pb-3 fw-600 text-base sm:text-1xl">Persentase Jumlah Usaha di Indonesia Menurut Lapangan Usaha</h4>

        <canvas id="myChart"></canvas>
    </div>
    <script src="assets/js/chart-beranda.js"></script>
</div>

<!-- PUBLIKASI -->
<div class="container-fluid pt-5 pb-5 mt-4 bg-lightorange">
    <div class="container-md">
        <h3 class="text-center fw-700 pb-4">Publikasi</h3>
        <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

            <a class="w-80 sm:w-40 md:w-22" href="https://www.bps.go.id/publication/2019/03/29/686ec20b624d7ddedb92255a/ringkasan-eksekutif-hasil-pendataan-usaha-perusahaan-sensus-ekonomi-20" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
                <div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 40px; background-image: url('/assets/images/cover-publikasi1.png'); background-size: cover; height: 50vh;">
                    <div class="text-center bg-darkbrown text-white p-3 fw-800 text-sm" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">Ringkasan Eksekutif Hasil Pendataan Usaha/Perusahaan Sensus Ekonomi 2016-Lanjutan Indonesia</div>
                </div>
            </a>

            <a class="w-80 sm:w-40 md:w-22" href="https://www.bps.go.id/publication/2018/12/31/ca2523a255de747559ca6b31/hasil-pendataan-usaha-perusahaan-pertambangan-dan-penggalian-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50">
                <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 40px; background-image: url('/assets/images/cover-publikasi2.png'); background-size: cover; height: 50vh;">
                    <div class="text-center bg-darkbrown text-white p-3 fw-800 text-sm" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">Hasil Pendataan Usaha/Perusahaan Pertambangan dan Penggalian SE 2016-Lanjutan Indonesia</div>
                </div>
            </a>

            <a class="d-none d-sm-block w-80 sm:w-40 md:w-22" href="https://www.bps.go.id/publication/2018/12/31/8f119930c76fef53e3a52037/hasil-pendataan-usaha-perusahaan-aktivitas-kesehatan-manusia-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 40px; background-image: url('/assets/images/cover-publikasi3.png'); background-size: cover; height: 50vh;">
                    <div class="text-center bg-darkbrown text-white p-3 fw-800 text-sm" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">Hasil Pendataan Usaha/Perusahaan Aktivitas Kesehatan Manusia SE 2016-Lanjutan Indonesia</div>
                </div>
            </a>

            <a class="d-none d-sm-block w-80 sm:w-40 md:w-22" href="https://www.bps.go.id/publication/2018/12/31/67e12fbb1b473ac0c8efeb1a/hasil-pendataan-usaha-perusahaan-konstruksi-sensus-ekonomi-2016-lanjutan-indonesia-.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 40px; background-image: url('/assets/images/cover-publikasi4.png'); background-size: cover; height: 50vh;">
                    <div class="text-center bg-darkbrown text-white p-3 fw-800 text-sm" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">Hasil Pendataan Usaha/Perusahaan Konstruksi Sensus Ekonomi 2016-Lanjutan Indonesia</div>
                </div>
            </a>

        </div>
        <div class="d-flex justify-content-center pb-4 pt-2">
            <button class="btn btn-orange-carrot text-black hover:shadow-black mt-3 fw-700 w-80 sm:w-60 md:w-40 rounded-pill">Lihat Publikasi Lainnya</button>

        </div>
    </div>
</div>

<!-- INFOGRAFIS -->
<div class="container-fluid pt-5 pb-5 bg-darkbrown2">
    <div class="container-md d-flex flex-column justify-content-center align-items-center">
        <h3 class="text-center fw-700 pb-2 text-white">Infografis</h3>
        <div class="owl-carousel owl-theme" data-aos="zoom-in" data-aos-duration="1000">
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-1.jpg" data-download-src="/assets/images/infografis-1.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-1.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-2.jpg" data-download-src="/assets/images/infografis-2.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-2.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-3.jpg" data-download-src="/assets/images/infografis-3.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-3.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-4.jpg" data-download-src="/assets/images/infografis-4.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-4.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-5.jpg" data-download-src="/assets/images/infografis-5.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-5.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-6.jpg" data-download-src="/assets/images/infografis-6.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-6.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-7.jpg" data-download-src="/assets/images/infografis-7.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-7.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>
            <div class="item mt-3">
                <a data-fancybox="gallery" data-src="/assets/images/infografis-8.jpg" data-download-src="/assets/images/infografis-8.jpg">
                    <img class="hover:animate" src="/assets/images/infografis-8.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
                </a>
            </div>

        </div>
        <button class="btn btn-cognac hover:shadow-white mt-3 fw-700 w-80 sm:w-60 md:w-40 rounded-pill mb-4">Lihat Infografis Lainnya</button>
    </div>
</div>


<?= $this->endSection(); ?>