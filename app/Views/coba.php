<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col">
            <h1 class="fw-bolder">Coba masing-masing tulis apapun di sini : </h1>
            <ul>
                <li><h2>Hai, ini Shawna</h2></li>
                <!-- TULIS DI SINI -->
            </ul>
        </div>
    </div>
    
    <div class="row mt-5 pt-5">
        <div class="col">
            <h1 class="fw-bolder">Jenis Fonts</h1>
            <div>
                <h2>Font Default Bawaan Bootstrap</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quisquam, dolore id asperiores quam reiciendis expedita neque quo rem, maxime in nihil. Eveniet nobis sequi illo beatae dolorem cum debitis.</p>

            </div>
            <div style="font-family: 'Roboto', sans-serif;">
                <h2>Ini Font Roboto</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
            
            <div style="font-family: 'Lato', sans-serif;">
                <h2>Ini Font Lato</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
            
            <div style="font-family: 'Open Sans', sans-serif;">
                <h2>Ini Font Open Sans</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
            
            <div style="font-family: 'Poppins', sans-serif;">
                <h2>Ini Font Poppins</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
            
            <div style="font-family: 'Nunito', sans-serif;">
                <h2>Ini Font Nunito</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
           
            <div style="font-family: 'Montserrat', sans-serif;">
                <h2>Ini Font Montserrat</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit blanditiis libero harum similique quisquam eos aperiam, eaque quos aspernatur, tempora totam soluta commodi inventore amet distinctio illum modi animi esse!</p>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>