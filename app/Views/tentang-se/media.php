<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="my-4" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | Media</strong></h1>
    <!-- MEDIA 560x336 -->
    <!-- <div data-aos="fade-up">
        <h2 class="text-center mt-5" style="font-weight: bold;"><strong>Media <span class="orange">SE 2016</span></strong></h2>
        <div class="container d-flex justify-content-center m-4">
            <iframe class="p-3 img-round" style="background-color: #CD650C;" width="616" height="360" src="https://www.youtube.com/embed/4JRHpPVcrGc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div> -->

    <div class="container my-5">
        <main id="main">
            <div class="gallery bg-coba" style="padding: 30px;" data-aos="fade-up">
                <!-- ======= Gallery Section ======= -->
                <section id="portfolio" class="portfolio">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Gallery</h2>
                            <h3>Check our <span>Gallery</span></h3>
                            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
                                autem.</p>
                        </div>

                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="portfolio-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-app">App</li>
                                    <li data-filter=".filter-card">Card</li>
                                    <li data-filter=".filter-web">Web</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="/assets/images/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <a href="/assets/images/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <img src="/assets/images/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="/assets/images/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <a href="/assets/images/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <img src="/assets/images/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <a href="/assets/images/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <img src="/assets/images/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="/assets/images/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <a href="/assets/images/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <img src="/assets/images/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <a href="/assets/images/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <img src="/assets/images/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <a href="/assets/images/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <img src="/assets/images/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </section><!-- End Gallery Section -->
            </div>
        </main>
    </div>
</div>
<?= $this->endSection(); ?>