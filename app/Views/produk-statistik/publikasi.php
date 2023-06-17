<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Publikasi</strong></h1>
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1> -->

    <!--                                                                                                                                                                                                                                                                                    filter, ngoding manual-->
    <div class="container">
        <!-- <div class="content my-5">
            <form>
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
                        <button type="submit" class="btn" style="background-color: #FF9E3C;">Tampilkan</button>
                    </div>
                </div>
            </form>
        </div> -->
        <div class="container mt-5">

            <div class="container">
                <!-- <div class="mx-5 alert alert-warning" role="alert">
                    <i class="px-2 bi bi-exclamation-triangle-fill"></i>
                    <span class="">Perbandingan antar wilayah hanya menampilkan dataset yang tersedia di level provinsi ke bawah</span>
                </div> -->
            </div>

            <div class="container py-3 px-5">
                <div class="px-5 mb-3 row">
                    <label class="col-sm-2 col-form-label"><span class="d-block">Wilayah :</span></label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Semua Wilayah</option>
                            <option value="Jawa Timur">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Jawa Tengah">Jawa Barat</option>
                            <option value="Jawa Barat">DKI Jakarta</option>
                        </select>
                    </div>
                </div>

                <div class="px-5 mb-3 row">
                    <label class="col-sm-2 col-form-label">Cari :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Cari..">
                    </div>
                </div>

                <div class="px-5 mb-3 row pt-3">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <div class="btn btn-tampil">Tampilkan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- publikasi, template + modif manual -->
        <!-- <div class="container" id="cards_landscape_wrap-2">
        <div class="content gallery" id="gallery">
            <div class="row gy-4 justify-content-center">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box gallery-item">
                                <div class="image-box gallery-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU" alt="" />
                                </div>
                                <div class="text-container">
                                    <h6>Hasil Pendaftaran Usaha Sensus Ekonomi 2016</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 tombolOranye">
                <button type="submit" class="btn btn-primary bottom-0 end-0">Lainnya</button>
            </div>
        </div>
    </div> -->


        <div class="container-fluid">
            <div class="container-md">
                <div class="row mb-5">
                    <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">
                        <a class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2019/03/29/686ec20b624d7ddedb92255a/ringkasan-eksekutif-hasil-pendataan-usaha-perusahaan-sensus-ekonomi-20" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
                            <div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi1.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Ringkasan Eksekutif Hasil Pendataan Usaha/Perusahaan Sensus Ekonomi 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>


                        <a class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/ca2523a255de747559ca6b31/hasil-pendataan-usaha-perusahaan-pertambangan-dan-penggalian-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsf0G0AEGGXpzdDPbJoEgFyvlmkoVXlqCQCg&usqp=CAU'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Pertambangan dan Penggalian SE 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>


                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/8f119930c76fef53e3a52037/hasil-pendataan-usaha-perusahaan-aktivitas-kesehatan-manusia-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi3.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Aktivitas Kesehatan Manusia SE 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>

                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/67e12fbb1b473ac0c8efeb1a/hasil-pendataan-usaha-perusahaan-konstruksi-sensus-ekonomi-2016-lanjutan-indonesia-.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi4.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Konstruksi Sensus Ekonomi 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">
                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/8f119930c76fef53e3a52037/hasil-pendataan-usaha-perusahaan-aktivitas-kesehatan-manusia-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi3.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Aktivitas Kesehatan Manusia SE 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>


                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/8f119930c76fef53e3a52037/hasil-pendataan-usaha-perusahaan-aktivitas-kesehatan-manusia-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi3.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Aktivitas Kesehatan Manusia SE 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>


                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/8f119930c76fef53e3a52037/hasil-pendataan-usaha-perusahaan-aktivitas-kesehatan-manusia-sensus-ekonomi-2016-lanjutan-indonesia.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi3.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Aktivitas Kesehatan Manusia SE 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>

                        <a class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" href="https://www.bps.go.id/publication/2018/12/31/67e12fbb1b473ac0c8efeb1a/hasil-pendataan-usaha-perusahaan-konstruksi-sensus-ekonomi-2016-lanjutan-indonesia-.html" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                            <div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/cover-publikasi4.png'); background-size: cover; height: 50vh;">
                                <div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Hasil Pendataan Usaha/Perusahaan Konstruksi Sensus Ekonomi 2016-Lanjutan Indonesia</div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12 d-flex flex-md-row justify-content-end align-items-end gap-4 flex-wrap">
                        <button type="submit" class="btn btn-primary bottom-0 end-0 text-black" style="background-color: #FF9E3C; border-color:white">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>