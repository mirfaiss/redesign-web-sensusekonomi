<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Metadata</strong></h1> -->

    <div class="">
        <ul class="nav justify-content-center">
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="#">BRS</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="#">Leaflet</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="#">Booklet</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="#">Direktori</a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn px-5 py-2 mx-4 btn-metadata" href="#">Dokumen Terkait</a>
            </li>
        </ul>
    </div>

   


    <div class="container">
        <div class="content my-5">
    <form>
        <fieldset disabled>
            <div class="row" style= "padding: 1%;">
                <div class="mb-3 col">
                    <label for="disabledSelect" class="form-label">Wilayah</label>
                </div>
                <div class="col-10">
                    <select id="disabledSelect" class="form-select">
                        <option>Semua Wilayah</option>
                    </select>
                </div>
            </div>

            <div class="row"  style= "padding: 1%;">
                <div class="mb-3 col">
                    <label for="disabledTextInput" class="form-label">Cari</label>
                </div>
                <div class="col-10">
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                </div>
            </div>

            <div class="row" style= "padding: 1%;">
                <div class="mb-3 col">
                </div>

                <div class="col-10">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>
            
        </fieldset>
    </form>
            </div>
        </div>
    </div>


    <div class="container" style= "margin: 5%;">

    

  <div class="row align-items-center" style= "padding: 1%;">
    <div class="col-sm-3 align-items-center" style= "padding: 1%;">
    <div class="card sm">
        <div class ="card-body">
            <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded mx-auto d-block" style=" height:200px; width:150px"  alt="...">
        </div>
    </div>
    </div>

    <div class="col-sm-3 align-items-center" style= "padding: 1%;">
    <div class="card sm">
        <div class ="card-body">
            <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded mx-auto d-block" style=" height:200px; width:150px"  alt="...">
        </div>
    </div>
    </div>
    <div class="col-sm-3 align-items-center" style= "padding: 1%;">
    <div class="card sm">
        <div class ="card-body">
            <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded mx-auto d-block" style=" height:200px; width:150px"  alt="...">
        </div>
    </div>
    </div>
    <div class="col-sm-3 align-items-center" style= "padding: 1%;">
    <div class="card sm">
        <div class ="card-body">
            <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded mx-auto d-block" style=" height:200px; width:150px"  alt="...">
        </div>
    </div>
    </div>
    <div class="col-sm-3 align-items-center" style= "padding: 1%;">
    <div class="card sm">
        <div class ="card-body">
            <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded mx-auto d-block" style=" height:200px; width:150px"  alt="...">
        </div>
    </div>
    </div>
    </div>
    <!-- <div class="col-sm-3">
    <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded" style=" height:200px; width:150px" alt="...">
    </div>
    <div class="col-sm-3">
    <img src="https://img.yumpu.com/43067230/1/500x640/katalog-publikasi-bps-2010-badan-pusat-statistik.jpg" class="rounded" style=" height:200px; width:150px" alt="...">
    </div> -->
  </div>    


                <div class="col float-end" style="padding : 5%;" >
                    <button type="submit" class="btn btn-primary">Lainnya...</button>
                </div>
            

</div>
<?= $this->endSection(); ?>