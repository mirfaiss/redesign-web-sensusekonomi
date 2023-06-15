<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-md">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | SE2016 Lanjutan</strong></h1>

    <div class="d-flex flex-column flex-sm-row gap-2 mb-5">
        <a href="/Selanjutan" class="fw-800 hover:shadow-black text-reset text-decoration-none text-center text-base text-muted p-2" style="border-radius: 10px; cursor: pointer;">Pendataan UMK UMB</a>
        
        <a href="/Selanjutan/suratdukungan" class="fw-800 hover:shadow-black text-reset text-decoration-none text-center text-base text-black bg-orange-carrot p-2" style="border-radius: 10px; cursor: pointer;">Surat Dukungan SE2016 Lanjutan</a>
    </div>

    <div class="d-flex mb-3 mt-3 justify-content-end">
        <div class="dropdown">
            <button class="btn btn-darkbrown dropdown-toggle px-md-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Kategori Dukungan
            </button>
            <ul class="dropdown-menu" style="height: 300px; overflow: scroll;">
                <li> <a class="dropdown-item" href="#">Kementrian/Instansi dan Lembaga</a></li>
                <li> <a class="dropdown-item" href="#">Asosiasi dan Perusahaan</a></li>
                <li> <a class="dropdown-item" href="#">Provinsi Aceh</a></li>
                <li> <a class="dropdown-item" href="#">Provinsi Sumatera Utara</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sumatera Barat</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Riau</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Jambi</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sumatera Selatan</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Bengkulu</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Lampung</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Bangka Belitung</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kepulauan Riau</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi DKI Jakarta</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Jawa Barat</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Jawa Tengah</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi DI Yogyakarta</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Jawa Timur</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Banten</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Bali</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi NTB</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi NTT</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kalimantan Barat</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kalimantan Tengah</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kalimantan Selatan</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kalimantan Timur</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Kalimantan Utara</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sulawesi Utara</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sulawesi Tengah</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sulawesi Selatan</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sulawesi Tenggara</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Gorontalo</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Sulawesi Barat</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Maluku</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Maluku Utara</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Papua Barat</a></li>
                <li> <a class="dropdown-item" href="#">Pemerintah Provinsi Papua</a></li>

            </ul>
        </div>
    </div>

    <iframe class="mb-5" src="/assets/surat dukungan.pdf" width="100%" height="500"></iframe>
</div>

<?= $this->endSection(); ?>