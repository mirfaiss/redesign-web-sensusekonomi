<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1>

    <div class="">
        <ul class="nav justify-content-center">
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="<?= base_url(); ?>tentang-se2016/metadata">Metadata Kegiatan</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="<?= base_url(); ?>tentang-se2016/metadata/met-variabel">Metadata Variabel</a>
            </li>
        </ul>
    </div>


    <div class="container">
        <div class="content my-5">
            <div id="result">
                <?= (@$content) ? $content : view('tentang-se/metadata/met-kegiatan'); ?>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>