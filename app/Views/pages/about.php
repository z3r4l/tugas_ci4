<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container text-light">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-4">About Me</h1>
            <div class="card mb-5 bg-light m-auto" style="max-width: 720px; height: 300px; border-radius: 23px;
background: linear-gradient(145deg, #282cb9, #2f34dc);
box-shadow:  11px 11px 22px #262ab1,
             -11px -11px 22px #3238eb;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/zery.jpeg" class="img-fluid " style="width: 410px; height:300px; border-radius: 23px;  margin-top: -1px;" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-light mt-5 border-bottom border-dark">Nama : Zery Aldi</h5>
                            <h5 class="card-title fw-bold text-light border-bottom border-dark">NPM : 201055201120</h5>
                            <p class="card-text fw-bold text-light border-bottom border-dark">Saya mahasiswa dari Universitas Ibnu Sina 
                                Kelas 4A disini saya membuat website tugas praktikum sebagai syarat untuk menyelesaikan matakuliah Pemograman Berbasis Internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>