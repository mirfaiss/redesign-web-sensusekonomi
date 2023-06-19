<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-md">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | SE2016 Lanjutan</strong></h1>

    <div class="d-flex flex-column flex-sm-row gap-2 mb-5">
        <a href="/Selanjutan" class="fw-800 hover:shadow-black text-decoration-none text-center text-base text-black bg-orange-carrot p-2" style="border-radius: 10px; cursor: pointer;">Pendataan UMK UMB</a>

        <a href="/Selanjutan/suratdukungan" class="fw-800 hover:shadow-black text-reset text-decoration-none text-center text-base text-muted p-2" style="border-radius: 10px; cursor: pointer;">Surat Dukungan SE2016 Lanjutan</a>
    </div>

    <!-- Section : Informasi Umum -->
    <div class="row mt-5 p-3 p-md-0" data-aos="fade-up" data-aos-delay="100">
        <div class=" col-md-5 mb-5">
            <div class="bg-image" style="height: 100%;">
                <img src="/assets/images/stat-img.webp" class="img-fluid img-round" style="height: 100%; object-fit: cover;" />
            </div>
        </div>

        <div class="col-md-7 mb-5">
            <h3 class="fw-700 md:text-2xl">Informasi Umum</h3>
            <p class="text-muted" style="text-align: justify;">
                Kegiatan Sensus Ekonomi 2016 (SE2016) dilaksanakan secara bertahap, dimulai dari kegiatan perencanaan dan persiapan pada tahun 2014, hingga kegiatan penyajian dan diseminasi hasil pada tahun 2018. Pada Tahun 2016, BPS telah melaksanakan kegiatan Listing Sensus Ekonomi Tahun 2016 yang disingkat dengan Listing SE2016. Sedangkan kegiatan lanjutan SE2016 yang dilaksanakan pada tahun 2017 adalah Pendataan Usaha Mikro Kecil dan Usaha Menengah Besar Sensus Ekonomi tahun 2016 atau selanjutnya disebut dengan Pendataan UMK dan UMB SE2016.
            </p>
            <p class="text-muted" style="text-align: justify;">
                Pelaksanaan kegiatan Pendataan UMK dan UMB SE2016 diharapkan akan menghasilkan data rinci usaha/perusahaan Mikro Kecil dan Menengah Besar sebagai dasar untuk perumusan berbagai kebijakan dan analisis secara makro maupun mikro
            </p>
        </div>
    </div>


    <!-- Section : Maksud dan Tujuan -->
    <div class="mt-4 mb-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="fw-700 md:text-2xl text-center mb-4">Maksud & Tujuan</h3>
        <div class="d-flex flex-column flex-md-row">
            <div class="col-md-5 shadow-sm p-4" style="border-radius: 20px;">
                <h4 class="text-center md:text-1xl">Tujuan Umum</h4>
                <p class="text-muted" style="text-align: justify;">
                    Secara umum, pendataan UMK dan UMB SE2016 bertujuan untuk mengetahui profil usaha di Indonesia yang dapat digunakan sebagai bahan perencanaan kegiatan ekonomi secara makro dan data yang dihasilkan akan digunakan sebagai acuan survei-survei selanjutnya. Pendataan UMK dan UMB SE2016 meliputi pengumpulan dan penyajian data tentang kegiatan usaha/perusahaan UMB dan UMK secara rinci dan mutakhir menurut kategori lapangan usaha pada tingkat kabupaten/kota, provinsi, dan nasional.
                </p>
            </div>

            <div class="d-none d-md-block col-sm-9 col-md-2 ps-3 pe-3">
                <div class="" style="height: 100%;">
                    <img src="/assets/images/img3.webp" class="img-fluid img-round" style="height: 100%; object-fit: cover;" />
                </div>
            </div>

            <div class="col-md-5 shadow-sm p-4" style="border-radius: 20px;">
                <h4 class="text-center md:text-1xl">Tujuan Khusus</h4>
                <p style="text-align: justify;">
                <ol class="text-muted">
                    <li>Mengetahui profil dan karakteristik usaha di Indonesia</li>
                    <li>Memberi gambaran tentang level dan struktur ekonomi</li>
                    <li>Mengetahui daya saing bisnis di Indonesia</li>
                    <li>Mendapatkan struktur pengeluaran dan pendapatan dari kegiatan usaha/perusahaan</li>
                    <li>Mendapatkan gambaran permodalan, prospek dan kendala usaha/perusahaan</li>
                    <li>Memperoleh data rinci usaha/perusahaan sebagai bahan perencanaan analisis, baik mikro maupun makro</li>
                    <li>Memperoleh benchmark dan basis data bagi berbagai survei lanjutan di bidang ekonomi hingga Sensus Ekonomi selanjutnya</li>
                </ol>
                </p>
            </div>

        </div>
    </div>



    <!-- Section : Cakupan -->
    <div class="row gx-5 mt-5 p-3 p-md-0" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-7 mb-4 mt-md-4">
            <h3 class="fw-700 md:text-2xl text-middle text-md-start">Cakupan</h3>
            <h4 class="md:text-1xl text-middle text-md-start">Cakupan Wilayah</h4>
            <p class="text-muted" style="text-align: justify;">
                Cakupan wilayah kegiatan Pendataan UMK dan UMB SE2016 dilaksanakan di seluruh provinsi di Indonesia.
            </p>
            <h4 class="md:text-1xl text-middle text-md-start">Cakupan Unit Usaha/Perusahaan</h4>
            <p class="text-muted" style="text-align: justify;">
                Kegiatan Pendataan UMK dan UMB SE2016 mencakup seluruh unit usaha/perusahaan, baik usaha/perusahaan skala besar, menengah, kecil, dan mikro. Usaha/perusahaan yang menggunakan bangunan tetap maupun tidak tetap, yang berada dalam batas wilayah Negara Kesatuan Republik Indonesia. Sedangkan aktivitas ekonominya mencakup seluruh kategori/lapangan usaha, kecuali aktivitas pertanian, kehutanan, dan perikanan (kategori A), aktivitas administrasi pemerintahan, pertahanan, dan jaminan sosial wajib (kategori O), dan aktivitas rumah tangga sebagai pemberi kerja; aktivitas yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan untuk memenuhi kebutuhan sendiri (kategori T).
            </p>
        </div>

        <div class="col-md-5 mb-4 mt-md-4">
            <div class="bg-image" style="height: 100%;">
                <img src="/assets/images/stat-img3.webp" class="img-fluid img-round" style="height: 100%; object-fit: cover;" />
            </div>
        </div>
    </div>

    <div id="kuesioner-se" class="mb-5"></div>

    <!-- Kuesioner -->
    <div class="accordion accordion-custom mb-5 p-3 p-md-0" id="accordionPanelsStayOpenExample" data-aos="fade-up" data-aos-delay="100">
        <h3 class="fw-700 md:text-2xl text-middle text-md-start pb-2">Kuesioner</h3>

        <div class="accordion-item">
            <h2 class="accordion-header focus:ring-gray-200">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    SE2016-UMB Produksi
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    Perusahaan UMB yang dicacah dengan kuesioner ini adalah perusahaan dengan kategori: <br>
                    B. Pertambangan dan Penggalian; <br>
                    C. Industri Pengolahan; <br>
                    D. Pengadaan Listrik, Gas/Uap Air Panas, dan Udara Dingin; <br>
                    E. Pengelolaan Air, Pengelolaan Air Limbah, Pengelolaan dan Daur Ulang Sampah, dan Kegiatan Remediasi; <br>
                    F. Konstruksi.
                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a class="text-reset text-decoration-none" href="https://se2016.bps.go.id/Lanjutan/files/kuesioner/SE2016%20-%201%20PRODUKSI.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh kuesioner </small></div>
                        </a>
                        <a class="text-reset text-decoration-none" href="https://se2016.bps.go.id/Lanjutan/files/kuesioner/_1%20PETUNJUK%20RINGKAS%20UMB%20PRODUKSI.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh Petunjuk Pengisian Kuesioner </small></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    SE2016-UMB Keuangan
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Perusahaan UMB yang dicacah dengan kuesioner ini adalah perusahaan dengan kategori: <br>
                    K. Aktivitas Keuangan dan Asuransi

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a class="text-reset text-decoration-none" href="http://se2016.bps.go.id/Lanjutan/files/kuesioner/SE2016%20-%202%20KEUANGAN.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh kuesioner </small></div>
                        </a>
                        <a class="text-reset text-decoration-none" href="http://se2016.bps.go.id/Lanjutan/files/kuesioner/_3%20PETUNJUK%20RINGKAS%20UMB%20KEUANGAN.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh Petunjuk Pengisian Kuesioner </small></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    SE2016-UMB Non Keuangan
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Perusahaan UMB yang dicacah dengan kuesioner ini adalah perusahaan dengan kategori: <br>
                    G. Perdagangan Besar dan Eceran; Reparasi dan Perawatan Mobil dan Sepeda Motor; <br>
                    H. Pengangkutan dan Pergudangan; <br>
                    I. Penyediaan Akomodasi dan Penyediaan Makan Minum; <br>
                    J. Informasi dan Komunikasi; <br>
                    K. Aktivitas Keuangan dan Asuransi; <br>
                    L. Real Estat; <br>
                    M. Aktivitas Profesional, Ilmiah Dan Teknis; <br>
                    N. Aktivitas Penyewaan dan Sewa Guna Usaha Tanpa Hak Opsi, Ketenagakerjaan, Agen Perjalanan dan Penunjang Usaha Lainnya; <br>
                    P. Pendidikan; <br>
                    Q. Aktivitas Kesehatan Manusia dan Aktivitas Sosial; kecuali golongan pokok 87 (kegiatan sosial di dalam panti) dan golongan pokok 88 (kegiatan sosial di luar panti); <br>
                    R. Kesenian, Hiburan, dan Rekreasi, kecuali golongan pokok 92 (Aktivitas Perjudian dan Pertaruhan); <br>
                    S. Aktivitas Jasa Lainnya, kecuali layanan kencan di dalam kelompok 96999; dan organisasi profesi, organisasi kemasyarakatan, organisasi sosial, organisasi politik dalam golongan 9412, 942, dan 949; <br>
                    U. Aktivitas Badan Internasional dan Badan Ekstra Internasional Lainnya kecuali Kedutaan Besar dan Konsulat.

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a class="text-reset text-decoration-none" href="http://se2016.bps.go.id/Lanjutan/files/kuesioner/SE2016%20-%203%20NON%20KEUANGAN.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh kuesioner </small></div>
                        </a>
                        <a class="text-reset text-decoration-none" href="http://se2016.bps.go.id/Lanjutan/files/kuesioner/_2%20PETUNJUK%20RINGKAS%20UMB%20NON%20KEUANGAN.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh Petunjuk Pengisian Kuesioner </small></div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    SE2016-UMK
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Perusahaan atau usaha yang dicacah dengan kuesioner ini adalah semua usaha UMK.

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a class="text-reset text-decoration-none" href="http://se2016.bps.go.id/Lanjutan/files/kuesioner/SE2016%20-%204%20UMK.pdf" target="_blank">
                            <div class="btn btn-darkbrown"><small> Unduh kuesioner </small></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>