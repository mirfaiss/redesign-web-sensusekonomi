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
                                    <li data-filter=".filter-persiapan">Persiapan</li>
                                    <li data-filter=".filter-sosialisasi">Sosialisasi</li>
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

                            <!--SECTION PERSIAPAN -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan01.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan01.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 01"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan04.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan04.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 04"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan03.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan03.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 03"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan05.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan05.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 05"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan06.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan06.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 06"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan07.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan07.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 07"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan10.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 10"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan11.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 11"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan12.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 12"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan13.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 13"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan14.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 14"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-persiapan">
                                <img src="/assets/images/gallery/persiapan/persiapan15.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="/assets/images/gallery/persiapan/persiapan15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Persiapan 15"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>


                            <!-- SECTION SOSIALISASI -->

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi01.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 1</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi01.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 01"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi02.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 1 3</h4>
                                    <p>Sosialisasi 1</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi02.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 02"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi05.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 3</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi05.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 05"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi03.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 4</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi03.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 03"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi05.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 5</h4>
                                    <p>Sosialisasi 1</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi05.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 03"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi06.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi06.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 06"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi07.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi</h4>
                                    <p>Sosialisasi 1</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi07.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 07"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi08.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 8</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi08.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 08"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi09.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 9</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi09.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 09"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi10.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 10</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 10"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi11.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 11</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 11"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi12.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 12</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 12"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi13.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 13</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 13"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi14.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 14</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 14"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi15.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 15</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 15"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi16.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 16</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 16"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi17.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 17</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 17"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi18.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 18</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 18"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi19.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 19</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi19.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 19"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi20.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 20</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi20.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 20"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi21.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 21</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi21.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 21"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi22.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 22</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi22.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 22"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi23.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 23</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi23.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 23"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi26.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 26</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi26.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 26"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi24.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 24</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi24.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 24"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-sosialisasi">
                                <img src="/assets/images/gallery/sosialisasi/sosialisasi25.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Sosialisasi 25</h4>
                                    <p>Sosialisasi</p>
                                    <a href="/assets/images/gallery/sosialisasi/sosialisasi25.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Sosialisasi 25"><i class="bx bx-plus"></i></a>
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