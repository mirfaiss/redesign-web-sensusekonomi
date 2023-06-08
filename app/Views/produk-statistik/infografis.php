<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1> -->

    <!-- filter -->
    <form>
        <fieldset disabled>
            <div class="row mb-3">
                <div class="mb-3 col">
                    <label for="disabledSelect" class="col-sm-2 form-label">Wilayah</label>
                </div>

                <div class="col-sm-8">
                    <select class="form-select" id="disabledSelect">
                        <option>Semua Wilayah</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="mb-3 col">
                    <label for="disabledTextInput" class="col-sm-2 form-label">Cari</label>
                </div>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="disabledTextInput" placeholder="Judul">
                </div>
            </div>

            <div class="row mb-3">
                <div class="mb-3 col"></div>
                
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>

        </fieldset>
    </form>

    <!-- galeri infografis -->
    <section id="gallery" class="gallery content my-5">
      <div class="container-fluid mb-5">
        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        </div>

</div>
<?= $this->endSection(); ?>

<!-- Vendor JS Files -->
<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../../assets/vendor/aos/aos.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>