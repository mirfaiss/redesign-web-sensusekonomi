balasJasaUpahPekerja<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <h1 class="my-3 text-middle sm:text-start" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | Tabel Topik</strong></h1>

    <!-- semuanya template -->
    <!-- judul -->
    <div class="section-header text-center">
        <div class="container position-relative">
            <h4>Jumlah Usaha, Pendapatan, dan Pengeluaran</h4>
        </div>
    </div>
    <section class="pb-5">
        <div class="container">
            <!-- search -->
            <div class="d-flex justify-content-end mb-2">
                <form id="dataset-search">
                    <div class="input-group field-datasetsearch-keywor">
                        <input type="text" id="datasetsearch-keyword" class="input-group-append form-control" name="keyword" placeholder="Cari dataset" style="width:200px;">
                        <a class="btn text-black" type="submit" style="background-color:#FF9E3C; border-color: #f0861a;"><i class="bi bi-search"></i>
                        </a>
                    </div>
                </form>

            </div>

            <!-- table -->
            <div>
                <div id="table-view-grid" class="table-responsive">
                    <div class="layout-center">
                        <table class="table table-bordered table-border-light table-hover">
                            <colgroup>
                                <col style="max-width:20px;">
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="bg-accent text-center">Dataset</th>
                                    <th class="bg-accent text-center">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-key="6">
                                    <td style="text-align:center;">1</td>
                                    <td>Jumlah Tenaga Kerja</td>
                                    <td style="min-width:160px; text-align: center;">
                                        <a class="btn btn-sm btn-primary text-black" href="/layanan-data/tabel-topik/se2016/1/1" data-pjax="0" style="background-color: #FF9E3C; border:#eee;"> Lihat Data <i class="bi bi-arrow-right" style="font-weight: bold;"></i></a>
                                    </td>
                                </tr>
                                <tr data-key="5">
                                    <td style="text-align:center;">2</td>
                                    <td>Banyaknya UMK Menurut Wilayah dan Lapangan Usaha</td>
                                    <td style="min-width:160px; text-align: center;">
                                        <a class="btn btn-sm btn-primary text-black" href="/layanan-data/tabel-topik/se2016/1/1" data-pjax="0" style="background-color: #FF9E3C; border:#eee;"> Lihat Data <i class="bi bi-arrow-right" style="font-weight: bold;"></i></a>
                                    </td>
                                </tr>
                                <tr data-key="4">
                                    <td style="text-align:center;">3</td>
                                    <td>Banyaknya UMB menurut Wilayah dan Lapangan Usaha</td>
                                    <td style="min-width:160px; text-align: center;">
                                        <a class="btn btn-sm btn-primary text-black" href="/layanan-data/tabel-topik/se2016/1/1" data-pjax="0" style="background-color: #FF9E3C; border:#eee;"> Lihat Data <i class="bi bi-arrow-right" style="font-weight: bold;"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center justify-content-md-between align-items-center flex-wrap" style="row-gap: .5rem;">
                        <div class="pagination"></div>
                        <div class="pull-right">
                            <div class="summary">Menampilkan <b>1-3</b> dari <b>3</b> item.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- kategori -->
    <section class="py-5">
        <div class="container">
            <h4 class="text-center">Telusuri Data Berdasarkan Topik</h4>
            <div class="spacer text-center mt-3 mb-5">
                <span style="width:100px;height:4px;background:#eee;display:inline-block;border-radius:100px;"></span>
            </div>

            <div class="row" id="cards_landscape_wrap-tabelTopik">
                <div class="col content gallery" id="cards_landscape_wrap-tabelTopik gallery">
                    <a href="/layanan-data/tabel-topik/jumlah-usaha" class="card text-dark border-0 text-center d-block link-underline-opacity-0 gallery-item">
                        <div class="icon card-img"><img src="https://img.freepik.com/free-vector/global-distribution-international-cargo-freight-company-supply-chain-management-logistics-operations-control-streamline-your-logistics-concept-pinkish-coral-bluevector-isolated-illustration_335657-1766.jpg?w=900&t=st=1686580934~exp=1686581534~hmac=d495c5e3550fe3a0ff68febfe7ea1bdb44a650715f17a2e958e5dcede250d075" alt="" width="120px" height="70px"></div>
                        <h6 class="card-body">Jumlah Usaha</h6>
                    </a>
                </div>
                <div class="col content gallery" id="cards_landscape_wrap-tabelTopik gallery">
                    <a href="/layanan-data/tabel-topik/jumlah-tenaga-kerja" class=" card text-dark border-0 text-center d-block">
                        <div class="icon card-img"><img src="https://img.freepik.com/free-vector/goal-achievement-teamwork-business-concept-career-growth-cooperation-development-project_107791-29.jpg?1&w=740&t=st=1686579731~exp=1686580331~hmac=97fc6de9f1a13a2ffd81b083317ce6ac6a758c23c55ae5c29f5b087aa4b9a5b1" alt="" width="120px" height="70px"></div>
                        <h6 class="card-body">Jumlah Tenaga Kerja</h6>
                    </a>
                </div>
                <div class="col content gallery" id="cards_landscape_wrap-tabelTopik gallery">
                    <a href="/layanan-data/tabel-topik/balas-jasa-dan-upah-pekerja" class="card text-dark border-0 text-center d-block">
                        <div class="icon card-img"><img src="https://img.freepik.com/free-vector/finance-department-employees-are-calculating-expenses-company-s-business_1150-41782.jpg?w=900&t=st=1686580222~exp=1686580822~hmac=1355a396ba9fbff540f71db9c1fa19880930a27cf9f93f383c975eb5c4ffdb96" alt="" width="120px" height="70px"></div>
                        <h6 class="card-body">Balas Jasa dan Upah Pekerja</h6>
                    </a>
                </div>
                <div class="col content gallery" id="cards_landscape_wrap-tabelTopik gallery">
                    <a href="/layanan-data/tabel-topik/jumlah-usaha-tenaga-kerja-dan-balas-jasa" class="card text-dark border-0 text-center d-block">
                        <div class="icon card-img"><img src="https://img.freepik.com/premium-vector/financial-project-conceptcareer-growth-successflat-design-icon-vector-illustration_183665-456.jpg?w=740" alt="" width="120px" height="90px"></div>
                        <h6 class="card-body">Jumlah Usaha, Tenaga Kerja, dan Balas Jasa</h6>
                    </a>
                </div>
                <div class="col content gallery" id="cards_landscape_wrap-tabelTopik gallery">
                    <a href="/layanan-data/tabel-topik/jumlah-usaha-pendapatan-dan-pengeluaran" class="card text-dark border-0 text-center d-block">
                        <div class="icon card-img"><img src="https://img.freepik.com/premium-vector/business-safe-investment-concept-with-tiny-character-people-protecting-securing-their-savings-flat-dollars-deposit-box-cash-bag-bank-employees-metaphor_269730-438.jpg?w=740" alt="" width="100px" height="90px"></div>
                        <h6 class="card-body">Jumlah Usaha, Pendapatan, dan Pengeluaran</h6>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>