<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
	<h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Infografis</strong></h1>
	<!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1> -->

	<!-- filter, ngoding manual -->
	<!-- <form>
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
        <button type="submit" class="btn text-black" style="background-color: #FF9E3C;">Tampilkan</button>
      </div>
    </div>
  </form> -->

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



	<!-- galeri infografis, template + modif manual -->
	<!-- <div class="container" id="cards_landscape_wrap-2">
    <div class="content gallery" id="gallery">
      <div class="row gy-4 justify-content-center">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="card-flyer">
            <div class="text-box gallery-item">
              <div class="image-box gallery-item">
                <img src="https://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" class="img-fluid" alt="" />
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="ahttps://se2016.bps.go.id/umkumb/files/umkumb/35_Jawa%20TImur/3500_Poster_Provinsi_02.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                </div>
              </div>
              <div class="text-container">
                <h6><a href="#" style="color: #00acc1;">Hasil Pendataan Usaha Sensus Ekonomi 2016</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="card-flyer">
            <div class="text-box gallery-item">
              <div class="image-box gallery-item">
                <img src="https://indonesiabaik.id/public/uploads/post/580/1807_5_Manfaat_Sensus_Ekonomi_2016-01.jpg" class="img-fluid" alt="" />
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="https://indonesiabaik.id/public/uploads/post/580/1807_5_Manfaat_Sensus_Ekonomi_2016-01.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                </div>
              </div>
              <div class="text-container">
                <h6><a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Findonesiabaik.id%2Finfografis%2F5-manfaat-sensus-ekonomi&psig=AOvVaw38yNFDj-ZZgD3YQWquohUY&ust=1686406966970000&source=images&cd=vfe&ved=0CBMQjhxqFwoTCPj_oN6xtv8CFQAAAAAdAAAAABAH" style="color: #00acc1;">5 Manfaat Sensus Ekonomi 2016</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="card-flyer">
            <div class="text-box gallery-item">
              <div class="image-box gallery-item">
                <img src="https://indonesiabaik.id/public/uploads/post/583/2107_Sensus_Ekonomi_2016_Data_yang_Dihimpun-01.jpg" class="img-fluid" alt="" />
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="https://indonesiabaik.id/public/uploads/post/583/2107_Sensus_Ekonomi_2016_Data_yang_Dihimpun-01.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                </div>
              </div>
              <div class="text-container">
                <h6><a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Findonesiabaik.id%2Finfografis%2Fsensus-ekonomi-2016-data-yang-dihimpun&psig=AOvVaw38yNFDj-ZZgD3YQWquohUY&ust=1686406966970000&source=images&cd=vfe&ved=0CBMQjhxqFwoTCPj_oN6xtv8CFQAAAAAdAAAAABAX" style="color: #00acc1;">Data yang Dihimpun</a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <div class="card-flyer">
            <div class="text-box gallery-item">
              <div class="image-box gallery-item">
                <img src="https://indonesiabaik.id/public/uploads/post/581/2007_Intisari_Sensus_Ekonomi_2016-01.jpg" class="img-fluid" alt="" />
                <div class="gallery-links d-flex align-items-center justify-content-center">
                  <a href="https://indonesiabaik.id/public/uploads/post/581/2007_Intisari_Sensus_Ekonomi_2016-01.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                </div>
              </div>
              <div class="text-container">
                <h6><a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Findonesiabaik.id%2Finfografis%2Fintisari-sensus-ekonomi-2016&psig=AOvVaw38yNFDj-ZZgD3YQWquohUY&ust=1686406966970000&source=images&cd=vfe&ved=0CBMQjhxqFwoTCPj_oN6xtv8CFQAAAAAdAAAAABAv" style="color: #00acc1;">Intisari Sensus Ekonomi 2016</a></h6>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row gy-4 justify-content-center">
        <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">
          <div class="item mt-3">
            <a data-fancybox="infografis" data-gallery="infografis"="gallery" data-src="/assets/images/infografis-1.jpg" data-download-src="/assets/images/infografis-1.jpg">
              <img class="hover:animate" src="/assets/images/infografis-1.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
            </a>
          </div>
        </div>

        <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

          <div class="item mt-3">
            <a data-fancybox="infografis" data-gallery="infografis"="gallery" data-src="/assets/images/infografis-2.jpg" data-download-src="/assets/images/infografis-2.jpg">
              <img class="hover:animate" src="/assets/images/infografis-2.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
            </a>
          </div>
        </div>

        <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

          <div class="item mt-3">
            <a data-fancybox="infografis" data-gallery="infografis"="gallery" data-src="/assets/images/infografis-3.jpg" data-download-src="/assets/images/infografis-3.jpg">
              <img class="hover:animate" src="/assets/images/infografis-3.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
            </a>
          </div>
        </div>
        <div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

          <div class="item mt-3">
            <a data-fancybox="infografis" data-gallery="infografis"="gallery" data-src="/assets/images/infografis-4.jpg" data-download-src="/assets/images/infografis-4.jpg">
              <img class="hover:animate" src="/assets/images/infografis-4.jpg" alt="ingografis" style="border-radius: 25px; background-size:cover;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->


	<!-- <div class="container">
		<main id="main">
			<div class="row">
				<div class="col-sm-3">
					<a href="/assets/images/infografis-1.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-1.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-2.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-2.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-3.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-3.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-4.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-4.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-8.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-8.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-5.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-5.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-6.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-6.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-3">
					<a href="/assets/images/infografis-7.jpg">
						<img class="img-fluid img-rounded" data-fancybox="infografis" data-gallery="infografis"="gallery" src="/assets/images/infografis-7.jpg" alt="">
					</a>
				</div>
			</div>
		</main>
	</div> -->



	<div class="container-md">
		<div class="col-12 d-flex flex-md-row justify-content-center align-items-center gap-4 flex-wrap">

			<a href="/assets/images/infografis-1.jpg" data-fancybox="infografis" data-gallery="infografis" class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
				<div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-1.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Pendaftaran Usaha/Perusahaan SE2016 Indonesia</div>
				</div>
			</a>

			<a href="/assets/images/infografis-2.jpg" data-fancybox="infografis" data-gallery="infografis" class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
				<div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-2.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Pertambangan & Penggalian SE2016</div>
				</div>
			</a>

			<a href="/assets/images/infografis-3.jpg" data-fancybox="infografis" data-gallery="infografis" class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
				<div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-3.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Industri Pengolahan SE2016</div>
				</div>
			</a>

			<a href="/assets/images/infografis-4.jpg" data-fancybox="infografis" data-gallery="infografis" class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
				<div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-4.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Pengadaan Listrik, Gas, Uap/Air Panas dan Udara Dingin</div>
				</div>
			</a>

			<a href="/assets/images/infografis-5.jpg" data-fancybox="infografis" data-gallery="infografis" class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
				<div class="card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-5.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Pengangkutan dan Pergudangan SE2016</div>
				</div>
			</a>

			<a href="/assets/images/infografis-6.jpg" data-fancybox="infografis" data-gallery="infografis" class="w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50">
				<div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-6.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Perdagangan Besar dan Eceran; Reparasi dan Perawatan Mobil dan Sepeda Motor</div>
				</div>
			</a>

			<a href="/assets/images/infografis-7.jpg" data-fancybox="infografis" data-gallery="infografis" class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
				<div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-7.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Aktivitas Kesehatan Manusia dan Aktivitas Sos</div>
				</div>
			</a>

			<a href="/assets/images/infografis-8.jpg" data-fancybox="infografis" data-gallery="infografis" class="d-none d-sm-block w-80 sm:w-40 md:w-22 text-reset text-decoration-none" target="_blank" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
				<div class=" card-publikasi-beranda shadow mt-2 mb-2 d-flex flex-column justify-content-end align-items-center" style="border-radius: 25px; background-image: url('/assets/images/infografis-8.jpg'); background-size: cover; height: 50vh;">
					<div class="text-center bg-broken-white text-black p-3 fw-800 text-sm" style="border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;">Data Hasil Persentase Jumlah Lapangan Usaha dan Jasa Lainnya SE2016 </div>
				</div>
			</a>

		</div>
		<div class="d-flex justify-content-center pb-4 pt-2">
			<a class="btn text-black hover:shadow-black mt-3 fw-700 w-80 sm:w-60 md:w-40 rounded-pill" style="background-color: #FF9E3C" ;>Lihat infografis Lainnya</a>
		</div>
	</div>
</div>


</div>

<?= $this->endSection(); ?>