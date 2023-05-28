# PANDUAN ALUR KERJA
**Project UAS IMK - Redesign Website Sensus Ekonomi 2016**

## A.  Clone dan Instalasi Awal
1. Siapkan folder / tempat untuk menyimpan project, kemudian buka git bash pada lokasi tersebut.
2. Clone repository dengan menjalankan perintah berikut : `git clone https://github.com/ShawnaClaire/redesign-web-sensusekonomi.git`. Pastikan git sudah terinstall di komputer Anda.
3. Masuk ke folder proyek dengan menjalankan perintah : `cd [nama project]`
4. Jalankan perintah : `composer install` pada folder proyek untuk menginstall library yang dibutuhkan. Pastikan composer sudah terinstall di komputer Anda. (INGAT : Composer install hanya dilakukan SEKALI saat pertama clone repository).
5. Buat file .env (contoh file .env dapat dilihat pada file env.example). Lakukan konfigurasi dengan mengubah Environment menjadi Development dan mengganti base url menjadi http://localhost:8080/ (JANGAN HAPUS file env.example tetapi copy dan rename menjadi .env).
6. Jalankan perintah `php spark serve` untuk menjalankan server lokal. Buka browser dan akses localhost:8080 untuk melihat hasilnya.


## B. ALUR KERJA MENGERJAKAN TUGAS/FITUR BARU
1. Jalankan perintah: `git fetch`
    -  Jika branch kita sudah up to date dengan repository github, lanjutkan ke langkah no 2.
    -  Jika branch kita tertinggal, jalankan : `git pull`
2. Buka repo github > klik tab Projects > lihat detail card Task yang diassign kepada Anda > jika sudah, drag and drop card item task yang diassign kepada Anda dari **Todo** ke **In Progess**
3. Buat branch baru dengan menjalankan perintah : `git branch [nama fitur yang dikerjakan (tanpa petik)]`\
Contoh : *`git branch halaman-beranda`*  (nama branch lowercase dan gunakan dash "-" sebagai pemisah kata)\
    - **INGAT** : **SELALU** buat branch baru untuk tiap **FITUR/TASK BARU** (**JANGAN** ngoding di branch main)
5. Masuk ke branch tersebut (sesuai dengan fitur yang akan dikerjakan) dengan menjalankan perintah : `git checkout [nama branch (tanpa petik)]`\
Contoh : *`git checkout halaman-beranda`*
    - **TIPS** : Jika menggunakan git bash, pastikan nama branch aktif sudah berubah menjadi nama branch yang baru (sesuai fitur). Alternatif lain lihat nama branch aktif di vscode bagian pojok kiri bawah. Pastikan **BUKAN** branch main yang aktif.
6. [Kerjakan fitur sesuai tugas masing-masing]
7. Jika fitur sudah selesai, jalankan perintah (pastikan berada di branch yang benar): 
    - `git add .`
    - `git commit -m "pesan commit"`
    - `git push -u origin [nama branch (sesuai fitur)]`
8. Masuk ke repo project github > tab Code > compare & pull request > tulis comment/deskripsi (jika ada) > create pull request
9. Infokan di grup WA jika sudah compare&pull request. Tunggu review, jika sudah di approve, pindahkan card task di repo github > Projects ke bagian Done.


## C. TIPS
1. Setiap mau ngoding melanjutkan pengerjaan fitur, pastikan branch yang aktif adalah branch sesuai fitur (BUKAN branch main)
2. Jalankan perintah : git checkout `[nama branch fitur (tanpa petik)]` untuk masuk ke branch sesuai fitur
3. PERHATIKAN : Push codingan ke branch yang sesuai dengan fitur yang sedang dikerjakan
4. Selalu komunikasi di grup WA setiap melakukan push
    
    
## D. RULES TEKNIS NGODING
1. Buat Controller terpisah untuk tiap halaman sesuai menu di navbar (Beranda, Layanan Data, SE2016 Lanjutan, Produk Statistik, dan TentangSe2016) sesuai tugas masing-masing.
2. Masukkan asset seperti file css, javascript, maupun image ke dalam folder public/assets.
3. Jika ingin menambahkan CSS external, buat file css baru untuk tiap halaman spesifik. JANGAN menambahkan di main.css (file main.css hanya digunakan untuk menambahkan css yang diterapkan untuk semua halaman).
4. Jika ingin menambahkan CSS external untuk komponen tertentu pada halaman tertentu, SELALU gunakan id atau class custom untuk stylingnya (jangan pakai nama tag atau class bootstrap umum untuk styling).
5. Jika ingin meng-custom color hubungi Shawna.


Happy Coding :)

