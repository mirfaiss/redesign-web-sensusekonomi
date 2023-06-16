<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-5">
    <!-- <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE 2016</span> | Tabel Topik</strong></h1> -->

    <!-- semuanya template -->
    <!-- judul -->
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg mb-2 mb-lg-0align-self-center"></div>
                <div class="col-lg-auto align-self-center">
                    <div class="btn-group col col-md-auto px-0">
                        <ul class="nav nav-pills nav-fill col col-md-auto px-0">
                            <li class="nav-item">
                                <a href="#" class="nav-link active text-black" data-toggle="tab" data-target="#tab-tabel" style="background-color: #FF9E3C;">Tabel</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-black" data-toggle="tab" data-target="#tab-grafik">Grafik</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-black" data-toggle="tab" data-target="#tab-peta">Peta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />

            <div class="row">
                <div class="col-lg">
                    <div class="tab-content">
                        <!-- tabel -->
                        <div id="tab-tabel" class="tab-pane active">
                            <div class="row mb-4 justify-content-center">
                                <div class="col-lg mb-2 mb-lg-0align-self-center">
                                    <div class="row mx-n1">
                                        <div class="col-lg-auto px-1 align-self-center">
                                            <ul class="nav nav-pills nav-fill col col-md-auto px-0">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link active text-black" data-toggle="tab" data-target="#tab-tabel" style="background-color: #FF9E3C;">Nilai Absolut</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link text-black" data-toggle="tab" data-target="#tab-grafik">Persentase Kolom</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto ml-lg-auto"></div>

                                <div class="col-auto ml-lg-auto">
                                    <div class="btn-group">
                                        <a href="/topik/tabular/sp2020/5/1/1" target="_blank" class="btn btn-info"><i class="bi bi-printer"></i></a>
                                        <a href="/topik/tabular/sp2020/5/1/2" target="_blank" class="btn btn-danger text-black"><i class="bi bi-file-earmark-pdf"></i></a>
                                        <a href="/topik/tabular/sp2020/5/1/4" target="_blank" class="btn btn-success text-black"><i class="bi bi-file-earmark-spreadsheet"></i></a>
                                        <a href="/topik/tabular/sp2020/5/1/3" target="_blank" class="btn btn-secondary text-black"><i class="fa fa-database fa-fw"></i> JSON</a>
                                    </div>
                                </div>
                            </div>

                            <!-- judul tabel -->
                            <center>
                                <h4 class="mb-2">Banyaknya Usaha/Perusahaan, Pekerja, Balas Jasa dan Upah Pekerja UMK dan UMB Menurut Wilayah</h4>
                            </center>

                            <div class="table-responsive">
                                <table id="datatable" class="table table-compact table-bordered table-border-light table-hover">
                                    <thead class="text-black text-center align-middle" style="background-color: #FF9E3C; border-color: #f0861a;">
                                        <tr>
                                            <th rowspan="2">Nama Provinsi</th>
                                            <th colspan="7">Nilai</th>
                                        </tr>
                                        <tr>
                                            <th colspan="1">Banyak Usaha</th>
                                            <th colspan="1">Banyak Pekerja Dibayar</th>
                                            <th colspan="1">Banyak Pekerja Tidak Dibayar</th>
                                            <th colspan="1">Jumlah Pekerja</th>
                                            <th colspan="1">Rata-Rata Pekerja Per Usaha</th>
                                            <th colspan="1">Balas Jasa dan Upah (Rp)</th>
                                            <th colspan="1">Rata-Rata Balas Jasa dan Upah Per Pekerja Dibayar (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td data-order="0">11. ACEH</td>
                                            <td style="text-align: right;">
                                                2.523.198 </td>
                                            <td style="text-align: right;">
                                                2.505.893 </td>
                                            <td style="text-align: right;">
                                                5.029.091 </td>
                                            <td style="text-align: right;">
                                                124.365 </td>
                                            <td style="text-align: right;">
                                                121.415 </td>
                                            <td style="text-align: right;">
                                                245.780 </td>
                                            <td style="text-align: right;">
                                                2.647.563 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="1">12. SUMATERA UTARA</td>
                                            <td style="text-align: right;">
                                                6.926.993 </td>
                                            <td style="text-align: right;">
                                                6.891.166 </td>
                                            <td style="text-align: right;">
                                                13.818.159 </td>
                                            <td style="text-align: right;">
                                                495.053 </td>
                                            <td style="text-align: right;">
                                                486.149 </td>
                                            <td style="text-align: right;">
                                                981.202 </td>
                                            <td style="text-align: right;">
                                                7.422.046 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="2">13. SUMATERA BARAT</td>
                                            <td style="text-align: right;">
                                                2.525.029 </td>
                                            <td style="text-align: right;">
                                                2.496.480 </td>
                                            <td style="text-align: right;">
                                                5.021.509 </td>
                                            <td style="text-align: right;">
                                                261.331 </td>
                                            <td style="text-align: right;">
                                                251.632 </td>
                                            <td style="text-align: right;">
                                                512.963 </td>
                                            <td style="text-align: right;">
                                                2.786.360 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="3">14. RIAU</td>
                                            <td style="text-align: right;">
                                                2.704.861 </td>
                                            <td style="text-align: right;">
                                                2.576.059 </td>
                                            <td style="text-align: right;">
                                                5.280.920 </td>
                                            <td style="text-align: right;">
                                                571.797 </td>
                                            <td style="text-align: right;">
                                                541.370 </td>
                                            <td style="text-align: right;">
                                                1.113.167 </td>
                                            <td style="text-align: right;">
                                                3.276.658 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="4">15. JAMBI</td>
                                            <td style="text-align: right;">
                                                1.624.588 </td>
                                            <td style="text-align: right;">
                                                1.562.267 </td>
                                            <td style="text-align: right;">
                                                3.186.855 </td>
                                            <td style="text-align: right;">
                                                185.427 </td>
                                            <td style="text-align: right;">
                                                175.946 </td>
                                            <td style="text-align: right;">
                                                361.373 </td>
                                            <td style="text-align: right;">
                                                1.810.015 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="5">16. SUMATERA SELATAN</td>
                                            <td style="text-align: right;">
                                                4.006.353 </td>
                                            <td style="text-align: right;">
                                                3.847.039 </td>
                                            <td style="text-align: right;">
                                                7.853.392 </td>
                                            <td style="text-align: right;">
                                                313.725 </td>
                                            <td style="text-align: right;">
                                                300.315 </td>
                                            <td style="text-align: right;">
                                                614.040 </td>
                                            <td style="text-align: right;">
                                                4.320.078 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="6">17. BENGKULU</td>
                                            <td style="text-align: right;">
                                                963.654 </td>
                                            <td style="text-align: right;">
                                                918.896 </td>
                                            <td style="text-align: right;">
                                                1.882.550 </td>
                                            <td style="text-align: right;">
                                                65.483 </td>
                                            <td style="text-align: right;">
                                                62.637 </td>
                                            <td style="text-align: right;">
                                                128.120 </td>
                                            <td style="text-align: right;">
                                                1.029.137 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="7">18. LAMPUNG</td>
                                            <td style="text-align: right;">
                                                4.107.080 </td>
                                            <td style="text-align: right;">
                                                3.905.039 </td>
                                            <td style="text-align: right;">
                                                8.012.119 </td>
                                            <td style="text-align: right;">
                                                509.725 </td>
                                            <td style="text-align: right;">
                                                486.004 </td>
                                            <td style="text-align: right;">
                                                995.729 </td>
                                            <td style="text-align: right;">
                                                4.616.805 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="8">19. KEPULAUAN BANGKA BELITUNG</td>
                                            <td style="text-align: right;">
                                                648.248 </td>
                                            <td style="text-align: right;">
                                                612.866 </td>
                                            <td style="text-align: right;">
                                                1.261.114 </td>
                                            <td style="text-align: right;">
                                                101.300 </td>
                                            <td style="text-align: right;">
                                                93.264 </td>
                                            <td style="text-align: right;">
                                                194.564 </td>
                                            <td style="text-align: right;">
                                                749.548 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="9">21. KEPULAUAN RIAU</td>
                                            <td style="text-align: right;">
                                                868.804 </td>
                                            <td style="text-align: right;">
                                                832.021 </td>
                                            <td style="text-align: right;">
                                                1.700.825 </td>
                                            <td style="text-align: right;">
                                                184.492 </td>
                                            <td style="text-align: right;">
                                                179.247 </td>
                                            <td style="text-align: right;">
                                                363.739 </td>
                                            <td style="text-align: right;">
                                                1.053.296 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="10">31. DKI JAKARTA</td>
                                            <td style="text-align: right;">
                                                4.682.201 </td>
                                            <td style="text-align: right;">
                                                4.612.193 </td>
                                            <td style="text-align: right;">
                                                9.294.394 </td>
                                            <td style="text-align: right;">
                                                652.580 </td>
                                            <td style="text-align: right;">
                                                615.114 </td>
                                            <td style="text-align: right;">
                                                1.267.694 </td>
                                            <td style="text-align: right;">
                                                5.334.781 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="11">32. JAWA BARAT</td>
                                            <td style="text-align: right;">
                                                22.463.757 </td>
                                            <td style="text-align: right;">
                                                21.823.046 </td>
                                            <td style="text-align: right;">
                                                44.286.803 </td>
                                            <td style="text-align: right;">
                                                2.045.128 </td>
                                            <td style="text-align: right;">
                                                1.942.231 </td>
                                            <td style="text-align: right;">
                                                3.987.359 </td>
                                            <td style="text-align: right;">
                                                24.508.885 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="12">33. JAWA TENGAH</td>
                                            <td style="text-align: right;">
                                                17.345.325 </td>
                                            <td style="text-align: right;">
                                                17.159.688 </td>
                                            <td style="text-align: right;">
                                                34.505.013 </td>
                                            <td style="text-align: right;">
                                                1.016.818 </td>
                                            <td style="text-align: right;">
                                                994.204 </td>
                                            <td style="text-align: right;">
                                                2.011.022 </td>
                                            <td style="text-align: right;">
                                                18.362.143 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="13">34. DI YOGYAKARTA</td>
                                            <td style="text-align: right;">
                                                1.627.080 </td>
                                            <td style="text-align: right;">
                                                1.661.711 </td>
                                            <td style="text-align: right;">
                                                3.288.791 </td>
                                            <td style="text-align: right;">
                                                190.847 </td>
                                            <td style="text-align: right;">
                                                189.081 </td>
                                            <td style="text-align: right;">
                                                379.928 </td>
                                            <td style="text-align: right;">
                                                1.817.927 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="14">35. JAWA TIMUR</td>
                                            <td style="text-align: right;">
                                                18.874.232 </td>
                                            <td style="text-align: right;">
                                                18.998.028 </td>
                                            <td style="text-align: right;">
                                                37.872.260 </td>
                                            <td style="text-align: right;">
                                                1.417.360 </td>
                                            <td style="text-align: right;">
                                                1.376.076 </td>
                                            <td style="text-align: right;">
                                                2.793.436 </td>
                                            <td style="text-align: right;">
                                                20.291.592 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="15">36. BANTEN</td>
                                            <td style="text-align: right;">
                                                5.518.080 </td>
                                            <td style="text-align: right;">
                                                5.310.352 </td>
                                            <td style="text-align: right;">
                                                10.828.432 </td>
                                            <td style="text-align: right;">
                                                552.191 </td>
                                            <td style="text-align: right;">
                                                523.939 </td>
                                            <td style="text-align: right;">
                                                1.076.130 </td>
                                            <td style="text-align: right;">
                                                6.070.271 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="16">51. BALI</td>
                                            <td style="text-align: right;">
                                                1.901.600 </td>
                                            <td style="text-align: right;">
                                                1.886.076 </td>
                                            <td style="text-align: right;">
                                                3.787.676 </td>
                                            <td style="text-align: right;">
                                                269.505 </td>
                                            <td style="text-align: right;">
                                                260.223 </td>
                                            <td style="text-align: right;">
                                                529.728 </td>
                                            <td style="text-align: right;">
                                                2.171.105 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="17">52. NUSA TENGGARA BARAT</td>
                                            <td style="text-align: right;">
                                                2.445.716 </td>
                                            <td style="text-align: right;">
                                                2.451.893 </td>
                                            <td style="text-align: right;">
                                                4.897.609 </td>
                                            <td style="text-align: right;">
                                                210.492 </td>
                                            <td style="text-align: right;">
                                                211.991 </td>
                                            <td style="text-align: right;">
                                                422.483 </td>
                                            <td style="text-align: right;">
                                                2.656.208 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="18">53. NUSA TENGGARA TIMUR</td>
                                            <td style="text-align: right;">
                                                2.388.178 </td>
                                            <td style="text-align: right;">
                                                2.380.292 </td>
                                            <td style="text-align: right;">
                                                4.768.470 </td>
                                            <td style="text-align: right;">
                                                275.593 </td>
                                            <td style="text-align: right;">
                                                281.503 </td>
                                            <td style="text-align: right;">
                                                557.096 </td>
                                            <td style="text-align: right;">
                                                2.663.771 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="19">61. KALIMANTAN BARAT</td>
                                            <td style="text-align: right;">
                                                2.612.661 </td>
                                            <td style="text-align: right;">
                                                2.469.256 </td>
                                            <td style="text-align: right;">
                                                5.081.917 </td>
                                            <td style="text-align: right;">
                                                171.452 </td>
                                            <td style="text-align: right;">
                                                161.021 </td>
                                            <td style="text-align: right;">
                                                332.473 </td>
                                            <td style="text-align: right;">
                                                2.784.113 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="20">62. KALIMANTAN TENGAH</td>
                                            <td style="text-align: right;">
                                                1.218.267 </td>
                                            <td style="text-align: right;">
                                                1.138.896 </td>
                                            <td style="text-align: right;">
                                                2.357.163 </td>
                                            <td style="text-align: right;">
                                                167.438 </td>
                                            <td style="text-align: right;">
                                                145.368 </td>
                                            <td style="text-align: right;">
                                                312.806 </td>
                                            <td style="text-align: right;">
                                                1.385.705 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="21">63. KALIMANTAN SELATAN</td>
                                            <td style="text-align: right;">
                                                1.885.915 </td>
                                            <td style="text-align: right;">
                                                1.843.647 </td>
                                            <td style="text-align: right;">
                                                3.729.562 </td>
                                            <td style="text-align: right;">
                                                176.468 </td>
                                            <td style="text-align: right;">
                                                167.554 </td>
                                            <td style="text-align: right;">
                                                344.022 </td>
                                            <td style="text-align: right;">
                                                2.062.383 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="22">64. KALIMANTAN TIMUR</td>
                                            <td style="text-align: right;">
                                                1.750.962 </td>
                                            <td style="text-align: right;">
                                                1.621.846 </td>
                                            <td style="text-align: right;">
                                                3.372.808 </td>
                                            <td style="text-align: right;">
                                                210.672 </td>
                                            <td style="text-align: right;">
                                                182.559 </td>
                                            <td style="text-align: right;">
                                                393.231 </td>
                                            <td style="text-align: right;">
                                                1.961.634 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="23">65. KALIMANTAN UTARA</td>
                                            <td style="text-align: right;">
                                                319.917 </td>
                                            <td style="text-align: right;">
                                                285.782 </td>
                                            <td style="text-align: right;">
                                                605.699 </td>
                                            <td style="text-align: right;">
                                                50.733 </td>
                                            <td style="text-align: right;">
                                                45.382 </td>
                                            <td style="text-align: right;">
                                                96.115 </td>
                                            <td style="text-align: right;">
                                                370.650 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="24">71. SULAWESI UTARA</td>
                                            <td style="text-align: right;">
                                                1.236.732 </td>
                                            <td style="text-align: right;">
                                                1.179.077 </td>
                                            <td style="text-align: right;">
                                                2.415.809 </td>
                                            <td style="text-align: right;">
                                                105.186 </td>
                                            <td style="text-align: right;">
                                                100.928 </td>
                                            <td style="text-align: right;">
                                                206.114 </td>
                                            <td style="text-align: right;">
                                                1.341.918 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="25">72. SULAWESI TENGAH</td>
                                            <td style="text-align: right;">
                                                1.382.613 </td>
                                            <td style="text-align: right;">
                                                1.305.612 </td>
                                            <td style="text-align: right;">
                                                2.688.225 </td>
                                            <td style="text-align: right;">
                                                152.093 </td>
                                            <td style="text-align: right;">
                                                145.416 </td>
                                            <td style="text-align: right;">
                                                297.509 </td>
                                            <td style="text-align: right;">
                                                1.534.706 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="26">73. SULAWESI SELATAN</td>
                                            <td style="text-align: right;">
                                                3.708.192 </td>
                                            <td style="text-align: right;">
                                                3.753.458 </td>
                                            <td style="text-align: right;">
                                                7.461.650 </td>
                                            <td style="text-align: right;">
                                                796.449 </td>
                                            <td style="text-align: right;">
                                                815.410 </td>
                                            <td style="text-align: right;">
                                                1.611.859 </td>
                                            <td style="text-align: right;">
                                                4.504.641 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="27">74. SULAWESI TENGGARA</td>
                                            <td style="text-align: right;">
                                                1.146.342 </td>
                                            <td style="text-align: right;">
                                                1.114.111 </td>
                                            <td style="text-align: right;">
                                                2.260.453 </td>
                                            <td style="text-align: right;">
                                                184.252 </td>
                                            <td style="text-align: right;">
                                                180.170 </td>
                                            <td style="text-align: right;">
                                                364.422 </td>
                                            <td style="text-align: right;">
                                                1.330.594 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="28">75. GORONTALO</td>
                                            <td style="text-align: right;">
                                                553.801 </td>
                                            <td style="text-align: right;">
                                                543.018 </td>
                                            <td style="text-align: right;">
                                                1.096.819 </td>
                                            <td style="text-align: right;">
                                                37.548 </td>
                                            <td style="text-align: right;">
                                                37.314 </td>
                                            <td style="text-align: right;">
                                                74.862 </td>
                                            <td style="text-align: right;">
                                                591.349 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="29">76. SULAWESI BARAT</td>
                                            <td style="text-align: right;">
                                                658.208 </td>
                                            <td style="text-align: right;">
                                                639.352 </td>
                                            <td style="text-align: right;">
                                                1.297.560 </td>
                                            <td style="text-align: right;">
                                                61.979 </td>
                                            <td style="text-align: right;">
                                                59.690 </td>
                                            <td style="text-align: right;">
                                                121.669 </td>
                                            <td style="text-align: right;">
                                                720.187 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="30">81. MALUKU</td>
                                            <td style="text-align: right;">
                                                854.902 </td>
                                            <td style="text-align: right;">
                                                832.139 </td>
                                            <td style="text-align: right;">
                                                1.687.041 </td>
                                            <td style="text-align: right;">
                                                81.576 </td>
                                            <td style="text-align: right;">
                                                80.306 </td>
                                            <td style="text-align: right;">
                                                161.882 </td>
                                            <td style="text-align: right;">
                                                936.478 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="31">82. MALUKU UTARA</td>
                                            <td style="text-align: right;">
                                                591.095 </td>
                                            <td style="text-align: right;">
                                                560.837 </td>
                                            <td style="text-align: right;">
                                                1.151.932 </td>
                                            <td style="text-align: right;">
                                                66.316 </td>
                                            <td style="text-align: right;">
                                                64.689 </td>
                                            <td style="text-align: right;">
                                                131.005 </td>
                                            <td style="text-align: right;">
                                                657.411 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="32">91. PAPUA BARAT</td>
                                            <td style="text-align: right;">
                                                506.026 </td>
                                            <td style="text-align: right;">
                                                452.866 </td>
                                            <td style="text-align: right;">
                                                958.892 </td>
                                            <td style="text-align: right;">
                                                91.102 </td>
                                            <td style="text-align: right;">
                                                84.074 </td>
                                            <td style="text-align: right;">
                                                175.176 </td>
                                            <td style="text-align: right;">
                                                597.128 </td>

                                        </tr>
                                        <tr>
                                            <td data-order="33">94. PAPUA</td>
                                            <td style="text-align: right;">
                                                2.128.193 </td>
                                            <td style="text-align: right;">
                                                1.867.019 </td>
                                            <td style="text-align: right;">
                                                3.995.212 </td>
                                            <td style="text-align: right;">
                                                166.620 </td>
                                            <td style="text-align: right;">
                                                141.875 </td>
                                            <td style="text-align: right;">
                                                308.495 </td>
                                            <td style="text-align: right;">
                                                2.294.813 </td>

                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr style="font-weight: bold; background: #fce6c4;">
                                            <td>TOTAL</td>
                                            <td style="text-align: right;">
                                                124.698.803 </td>
                                            <td style="text-align: right;">
                                                122.037.921 </td>
                                            <td style="text-align: right;">
                                                246.736.724 </td>
                                            <td style="text-align: right;">
                                                11.963.096 </td>
                                            <td style="text-align: right;">
                                                11.504.097 </td>
                                            <td style="text-align: right;">
                                                23.467.193 </td>
                                            <td style="text-align: right;">
                                                136.661.899 </td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <!-- chart -->
                        <div id="tab-grafik" class="tab-pane">

                            <center>
                                <h4>
                                    <p class="mb-0">Jumlah Penduduk Menurut Wilayah, Kesesuaian Alamat KK dengan Domisili, dan Jenis Kelamin, INDONESIA, Tahun 2020</p>
                                </h4>
                                <small class="font-weight-light">Klik pada bar chart untuk melihat data disagregasi level berikutnya</small>
                            </center>

                            <div id="chart" style="min-height: 600px;"></div>
                            <br />
                            <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-secondary" id="bar">Bar chart</button>
                                    <button class="btn btn-secondary active" id="column">Column chart</button>
                                </div>
                            </div>
                            <br /><br />

                        </div>
                        <div id="tab-peta" class="tab-pane">

                            <div class="row mb-4">

                                <div class="col-lg">
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-2">Wilayah</div>
                                        <div class="col-auto px-0">:</div>
                                        <div class="col">INDONESIA</div>
                                    </div>
                                </div>

                                <div class="col-auto ml-auto">

                                </div>
                            </div>

                            <section class="py-5" style="padding-top: 0 !important">
                                <div class="container">
                                    <div class="card border-0 shadow">
                                        <div class="card-header border-0 bg-accent text-white">
                                            <div class="row">
                                                <div class="col align-self-center">
                                                    Jumlah Penduduk Menurut Wilayah, Kesesuaian Alamat KK dengan Domisili, dan Jenis Kelamin, INDONESIA, Tahun 2020 </div>
                                                <div class="col-auto">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div id="spinner" style="text-align: center;margin: 200px">
                                                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <div class="row" id="mapContainer"></div>
                                            <br />

                                            <div class="col-lg-9">
                                                <div class="form-group row">
                                                    <label for="" class="col-auto">Warna : </label>
                                                    <input type="hidden" name="Wilayah[color_map]" value="">
                                                    <div id="color-picker" class="color-group-select col-auto"><label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="0" checked><span style="background:#03a9f4;"></span></label>
                                                        <label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="1"><span style="background:#4caf50;"></span></label>
                                                        <label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="2"><span style="background:#ab47bc;"></span></label>
                                                        <label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="3"><span style="background:#f44336;"></span></label>
                                                        <label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="4"><span style="background:#1a237e;"></span></label>
                                                        <label class="color-item" style="margin:5px 15px 0 0;"><input type="radio" name="Wilayah[color_map]" value="5"><span style="background:#34495e;"></span></label>
                                                    </div>
                                                </div>
                                                <div id="klasifikasi"></div>
                                                <button class="btn btn-primary" onclick="reload_map();return false;">Terapkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <br />

                    <!-- metadata  -->
                    <div class="card bg-light mb-4">
                        <div class="card-header" data-toggle="collapse" data-target="#indikator-kegiatan" style="background: #ccffcc">
                            <i class="bi bi-plus-circle bi-bw"></i> Metadata Indikator
                        </div>
                        <div id="indikator-kegiatan" class="card-body font-small">
                            <p>
                                <b>Nama</b><br />

                                Jumlah Penduduk <br />
                            </p>
                            <p>
                                <b>Definisi</b><br />

                                Ukuran absolut dari penduduk, dinyatakan dalam jiwa <br />
                            </p>
                            <p>
                                <b>Satuan</b><br />

                                Jiwa <br />
                            </p>
                            <p>
                                <b>Mekanisme perhitungan</b><br />

                                Penjumlahan dari setiap individu <br />
                            </p>
                            <p>
                                <b>Manfaat</b><br />

                                Sebagai dasar perencanaan pembangunan di berbagai bidang <br />
                            </p>
                            <p>
                                <b>Interpretasi</b><br />

                                Semakin tinggi angka semakin banyak jumlah penduduk <br />
                            </p>
                            <p>
                                <b>Frekuensi update</b><br />

                                Lebih dari Dua Tahunan <br />
                            </p>
                            <p>
                                <b>Referensi</b><br />

                                Badan Pusat Statistik <br />
                            </p>
                            <p>
                                <b>Subyek</b><br />

                                Kependudukan dan migrasi <br />
                            </p>
                            <p>
                                <b>Ukuran</b><br />

                                Jumlah <br />
                            </p>
                            <p>
                                <b>Konsep</b><br />

                                <b>Penduduk</b> :<br />Penduduk adalah semua orang yang berdomisili di wilayah Negara Kesatuan Republik Indonesia selama 1 tahun atau lebih dan atau mereka yang berdomisili kurang dari 1 tahun tetapi bertujuan untuk menetap selama 1 tahun atau lebih <br />
                            </p>

                        </div>
                    </div>

                    <!-- klasifikasi -->
                    <div class="card bg-light mb-4">
                        <div class="card-header" data-toggle="collapse" data-target="#deskripsi-klasifikasi" style="background: #ccccff">
                            <i class="bi bi-plus-circle bi-fw"></i> Deskripsi Klasifikasi
                        </div>
                        <div id="deskripsi-klasifikasi" class="card-body font-small collapse">


                            <div class="card-header">
                                <b>Klasifikasi Kesesuaian Alamat KK dengan Domisili</b><br />
                                Merupakan Pengelompokan atau Pengkodean untuk Kesesuaian Alamat KK dengan Domisili
                            </div>
                            <div class="card-body">
                                <p>
                                    <b>Sesuai</b><br />
                                    (definisi jelas) <br />
                                </p>
                                <p>
                                    <b>Tidak Sesuai</b><br />
                                    (definisi jelas) <br />
                                </p>
                                <p>
                                    <b>Total</b><br />
                                    Total (definisi jelas) <br />
                                </p>
                            </div>
                            <div class="card-header">
                                <b>Klasifikasi Jenis Kelamin </b><br />
                                Merupakan Pengelompokan atau Pengkodean untuk Jenis Kelamin
                            </div>
                            <div class="card-body">
                                <p>
                                    <b>Laki-laki</b><br />
                                    Laki-laki (definisi jelas) <br />
                                </p>
                                <p>
                                    <b>Perempuan</b><br />
                                    Perempuan (definisi jelas) <br />
                                </p>
                                <p>
                                    <b>Total</b><br />
                                    Total (definisi jelas) <br />
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- share medsos -->
                    <!-- <div class="row row-share">
                        <div class="col-auto align-self-center">
                            Bagikan :
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="social">
                                <a href="#" title="Bagikan ke facebook" data-link="/topik/hit_data/5?id_wilayah=1&jenis_hit=3" class="hit_data" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsensus.bps.go.id%2Ftopik%2Ftabular%2Fsp2020%2F5%3Fshare%3D1', '_blank', 'location=yes,height=570,width=800,scrollbars=yes,status=yes');">
                                    <img src="/static/images/social/facebook.svg" alt="" width="32">
                                </a>
                                <a href="#" title="Bagikan ke twitter" data-link="/topik/hit_data/5?id_wilayah=1&jenis_hit=4" class="hit_data" onclick="window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fsensus.bps.go.id%2Ftopik%2Ftabular%2Fsp2020%2F5%3Fshare%3D1', '_blank', 'location=yes,height=570,width=800,scrollbars=yes,status=yes');">
                                    <img src="/static/images/social/twitter.svg" alt="" width="32">
                                </a>
                                <a href="#" title="Bagikan ke whatsapp" data-link="/topik/hit_data/5?id_wilayah=1&jenis_hit=5" class="hit_data" onclick="window.open('https://api.whatsapp.com/send?text=http%3A%2F%2Fsensus.bps.go.id%2Ftopik%2Ftabular%2Fsp2020%2F5%3Fshare%3D1', '_blank', 'location=yes,height=570,width=500,scrollbars=yes,status=yes');">
                                    <img src="/static/images/social/whatsapp.svg" alt="" width="32">
                                </a>
                                <a href="#" title="Copy link address" data-link="/topik/hit_data/5?id_wilayah=1&jenis_hit=6&id_wilayah=1" onclick="notifSukses('Link Berhasil Tersalin')" class="urlcopy hit_data" data-url="http://sensus.bps.go.id/topik/tabular/sp2020/5?share=1" onclick="notifSukses('Link Berhasil Tersalin')">
                                    <img src="/static/images/social/link.svg" alt="" width="32">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/js/layananData/select2.min.js"></script>
    <script src="/assets/js/layananData/datatables.min.js"></script>
    <script src="/assets/js/layananData/slick.min.js"></script>
    <script src="/assets/js/layananData/app.js"></script>
    <script src="/assets/js/layananData/jquery.fancybox.min.js"></script>
    <script src="/assets/js/layananData/sweetalert.js"></script>





    <!-- <script>
        $(function() {
            new ClipboardJS(".urlcopy", {
                text: function(trigger) {
                    return trigger.getAttribute('data-url');
                }
            });

            $('.select2').select2({
                theme: "bootstrap"
            });
        });


        $(document).ready(function() {
            $('#datatable').DataTable({
                'paging': false,
                'searching': false,
                'info': false,
                'language': {
                    "decimal": ",",
                    "thousands": "."
                }
            });

            Highcharts.setOptions({
                lang: {
                    thousandsSep: ','
                }
            })
        });


        $(function() {

            Highcharts.chart('chart', {
                chart: {
                    type: 'column',
                    height: 600,
                    width: 600,
                    marginTop: 50
                },
                exporting: {
                    buttons: {
                        contextButton: {
                            align: 'left',
                        }
                    }
                },
                title: {
                    text: ''
                },
                xAxis: [{
                    type: 'category',
                }],
                legend: {
                    enabled: false,
                },
                yAxis: {
                    title: {
                        text: null
                    },
                    labels: {
                        formatter: function() {
                            return Highcharts.numberFormat(Math.abs(this.value), 0);
                        }
                    }
                },
                credits: false,
                plotOptions: {

                },

                tooltip: {
                    formatter: function() {
                        let d = this.point.drilldown;
                        let s = '';
                        if (d)
                            s = '<br/><br/>' + '<small class="text-muted">Klik untuk lebih detail</small>'
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.key + ' : ' + Highcharts.numberFormat(Math.abs(this.point.y), 0) + s;
                    }
                },

                series: [{
                    "name": "",
                    "data": [{
                        "name": "-",
                        "y": {
                            "": null
                        },
                        "drilldown": null
                    }]
                }],
                drilldown: {
                    series: []
                }
            });

            var chart = $('#chart').highcharts(),
                updateChart = function(typeOfChart, ifInvert, thisButton, minW = null, minH = null) {
                    chart.update({
                        chart: {
                            type: typeOfChart,
                            inverted: ifInvert,
                            height: minH,
                            width: minW
                        }
                    });
                };

            $('#bar').on('click', function() {
                $(this).addClass('active').siblings().removeClass('active');
                updateChart('bar', true, this, 1000, 600);
            });

            $('#column').on('click', function() {
                $(this).addClass('active').siblings().removeClass('active');
                updateChart('column', false, this, 1000, 600);
            });
        });


        $(function() {
            $('#klasifikasi').load("/topik/list_klasifikasi" + '/' + 3, function() {
                reload_map();
            });
        });

        $('.select2').select2({
            theme: "bootstrap"
        });

        function reload_map() {
            $('#mapContainer').hide();
            $('#spinner').show();

            var data = {
                item_1: $('select[name=item_1]').val(),
                item_2: $('select[name=item_2]').val(),
                item_3: $('select[name=item_3]').val(),
                item_4: $('select[name=item_4]').val()
            };
            $('#mapContainer').load("/topik/map" + '/' + 3, data, function() {
                $('#spinner').hide();
                $('#mapContainer').show();
            });
        }

        $(document).on('change', '#color-picker', function() {
            $('#mapContainer').hide();
            $('#spinner').show();

            var data = {
                item_1: $('select[name=item_1]').val(),
                item_2: $('select[name=item_2]').val(),
                item_3: $('select[name=item_3]').val(),
                item_4: $('select[name=item_4]').val(),
                warna: $("input:radio[name='Wilayah[color_map]']:checked").val()
            };
            $('#mapContainer').load("/topik/map" + '/' + 3, data, function() {
                $('#spinner').hide();
                $('#mapContainer').show();
            });
        });


        $(document).on('pjax:send', function() {
            $('#loading').show();
        });

        $(document).on('pjax:complete', function(xhr, textStatus, options) {
            $('.btn_delete_all').hide();
            if (options == 'error') {
                window.location.reload();
            }
            if (textStatus.getResponseHeader('redirect-url')) {
                $.pjax({
                    url: textStatus.getResponseHeader('redirect-url'),
                    container: '#pjax-table',
                    method: 'POST'
                });
                return false;
            } else {
                $('#loading').hide();
            }

            $('.tooltips').tooltip({
                animation: false
            });
        });

        $('#pjax-search').submit(function() {
            $.pjax.reload({
                container: '#pjax-table',
                type: 'POST',
                data: $(this).serialize()
            });
            return false;
        });

        $('.search').change(function() {
            $('#pjax-search').submit();
            return false;
        });

        $('.ubah_tahun').change(function() {
            $('#data-tahun').submit();
            location.reload({
                container: '.container',
                type: 'POST',
                data: $(this).serialize()
            });
            return false;
        });

        $('#fox').on('click', function(e) {
            e.preventDefault();
            $('#linkgenerate-verifycode-image').yiiCaptcha('refresh');
        })
    </script> -->
</div>
<?= $this->endSection(); ?>