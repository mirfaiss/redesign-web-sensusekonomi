<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1> -->

    <!-- tab  -->
    <div class="container my-5">
        <ul class="nav justify-content-center">
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-dokumen" href="<?= base_url(); ?>produk-statistik/dokumen">BRS</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-dokumen" href="<?= base_url(); ?>produk-statistik/dokumen/leaflet">Leaflet</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-dokumen" href="<?= base_url(); ?>produk-statistik/dokumen/booklet">Booklet</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-dokumen" href="<?= base_url(); ?>produk-statistik/dokumen/direktori">Direktori</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-dokumen" href="<?= base_url(); ?>produk-statistik/dokumen/dokumenterkait">Dokumen Terkait</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="content my-5">
            <div id="result">
                <?= (@$content) ? $content : view('produk-statistik/dokumen/brs'); ?>
            </div>
        </div>
    </div>         
</div>
<?= $this->endSection(); ?>