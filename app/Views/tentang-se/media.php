<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="my-4" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | Media</strong></h1>
    <!-- MEDIA 560x336 -->
    <div data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-center mt-5" style="font-weight: bold;"><strong>Media <span class="orange">SE 2016</span></strong></h2>
        <div class="container d-flex justify-content-center m-4">
            <iframe class="p-3 img-round" style="background-color: #CD650C;" width="616" height="360" src="https://www.youtube.com/embed/4JRHpPVcrGc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>