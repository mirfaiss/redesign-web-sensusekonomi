<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-md">
    <h1 class="my-3" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | SE2016 Lanjutan</strong></h1>

    <div class="d-flex flex-column flex-sm-row gap-2 mb-5">
        <a href="/se2016-lanjutan/pendataan-umk-umb" class="fw-800 hover:shadow-black text-reset text-decoration-none text-center text-base text-muted p-2" style="border-radius: 10px; cursor: pointer;">Pendataan UMK UMB</a>

        <a href="/se2016-lanjutan/surat-dukungan" class="fw-800 hover:shadow-black text-reset text-decoration-none text-center text-base text-black bg-orange-carrot p-2" style="border-radius: 10px; cursor: pointer;">Surat Dukungan SE2016 Lanjutan</a>
    </div>

    <div class="d-flex mb-3 mt-3 justify-content-end">
        <div class="dropdown">
            <button class="btn btn-darkbrown dropdown-toggle px-md-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pilih Kategori Dukungan
            </button>
            <ul class="dropdown-menu" style="height: 300px; overflow: scroll;">
                <li> <a id="00" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('00')">Kementrian/Instansi dan Lembaga</a></li>
                <li> <a id="10" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('10')">Asosiasi dan Perusahaan</a></li>
                <li> <a id="11" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('11')">Provinsi Aceh</a></li>
                <li> <a id="12" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('12')">Provinsi Sumatera Utara</a></li>
                <li> <a id="13" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('13')">Pemerintah Provinsi Sumatera Barat</a></li>
                <li> <a id="14" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi Riau')">Pemerintah Provinsi Riau</a></li>
                <li> <a id="15" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('15')">Pemerintah Provinsi Jambi</a></li>
                <li> <a id="16" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('16')">Pemerintah Provinsi Sumatera Selatan</a></li>
                <li> <a id="17" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('17')">Pemerintah Provinsi Bengkulu</a></li>
                <li> <a id="18" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('18')">Pemerintah Provinsi Lampung</a></li>
                <li> <a id="19" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('19')">Pemerintah Provinsi Bangka Belitung</a></li>
                <li> <a id="21" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('21')">Pemerintah Provinsi Kepulauan Riau</a></li>
                <li> <a id="31" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi DKI Jakarta')">Pemerintah Provinsi DKI Jakarta</a></li>
                <li> <a id="32" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('32')">Pemerintah Provinsi Jawa Barat</a></li>
                <li> <a id="33" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('33')">Pemerintah Provinsi Jawa Tengah</a></li>
                <li> <a id="34" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('34')">Pemerintah Provinsi DI Yogyakarta</a></li>
                <li> <a id="35" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi Jawa Timur')">Pemerintah Provinsi Jawa Timur</a></li>
                <li> <a id="36" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi Banten')">Pemerintah Provinsi Banten</a></li>
                <li> <a id="51" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('51')">Pemerintah Provinsi Bali</a></li>
                <li> <a id="52" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('52')">Pemerintah Provinsi NTB</a></li>
                <li> <a id="53" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('53')">Pemerintah Provinsi NTT</a></li>
                <li> <a id="61" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('61')">Pemerintah Provinsi Kalimantan Barat</a></li>
                <li> <a id="62" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('62')">Pemerintah Provinsi Kalimantan Tengah</a></li>
                <li> <a id="63" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('63')">Pemerintah Provinsi Kalimantan Selatan</a></li>
                <li> <a id="64" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('64')">Pemerintah Provinsi Kalimantan Timur</a></li>
                <li> <a id="65" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi Kalimantan Utara')">Pemerintah Provinsi Kalimantan Utara</a></li>
                <li> <a id="71" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('71')">Pemerintah Provinsi Sulawesi Utara</a></li>
                <li> <a id="72" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('72')">Pemerintah Provinsi Sulawesi Tengah</a></li>
                <li> <a id="73" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('73')">Pemerintah Provinsi Sulawesi Selatan</a></li>
                <li> <a id="74" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('74')">Pemerintah Provinsi Sulawesi Tenggara</a></li>
                <li> <a id="75" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('75')">Pemerintah Provinsi Gorontalo</a></li>
                <li> <a id="76" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('76')">Pemerintah Provinsi Sulawesi Barat</a></li>
                <li> <a id="81" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('81')">Pemerintah Provinsi Maluku</a></li>
                <li> <a id="82" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('82')">Pemerintah Provinsi Maluku Utara</a></li>
                <li> <a id="91" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('91')">Pemerintah Provinsi Papua Barat</a></li>
                <li> <a id="94" class="dropdown-item sd-option" href="#" onclick="viewSuratDukungan('000', 'Pemerintah Provinsi Papua')">Pemerintah Provinsi Papua</a></li>

            </ul>
        </div>
    </div>

    <div id="judul-surat" class="text-center p-4 md:text-1xl fw-600" style="display: none; justify-content: center; align-items: center;"></div>
    <div id="instruksi" class="text-muted text-base fw-600 text-center" style="display: flex; justify-content: center; align-items: center; height: 280px;"> Pilih Kategori Dukungan untuk Menampilkan Surat Dukungan</div>

    <iframe id="docviewer" class="mb-5 sd-viewer" src="https://se2016.bps.go.id/umkumb/files/dukungan1/00.pdf" width="100%" height="500" style="display: none;"></iframe>

</div>

<script>
    function viewSuratDukungan(id, title) {
        docviewer = document.getElementById('docviewer');
        instruksi = document.getElementById('instruksi');
        judul = document.getElementById('judul-surat');

        if (id == "000") {
            docviewer.style.display = "none";
            judul.style.display = "flex";
            judul.style.padding = "0px";
            judul.innerHTML = "Surat Dukungan " + title;
            instruksi.innerHTML = "Maaf, dokumen belum tersedia";
            instruksi.style.display = "flex";
            instruksi.style.height= "180px";
        } else {
            docviewer.setAttribute("src", "https://se2016.bps.go.id/umkumb/files/dukungan1/" + id + ".pdf");
            docviewer.style.display = "block";
            instruksi.style.display = "none";
            judul.innerHTML = "Surat Dukungan " + document.getElementById(id).innerHTML;
            judul.style.display = "flex";
        }


    }
</script>

<?= $this->endSection(); ?>