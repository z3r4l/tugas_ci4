<?= $this->extend('layout/template') ?><?= $this->section('content') ?>
<div class="cover d-flex mx-auto flex-column text-center text-white">
    <div class="home" style="margin-bottom:100px;">
        <h1 class="welcome" style="font-size:48px; font-weight:700; margin-top:-40px;">Welcome TO <?= $title; ?></h1>
        <div class="col-10 mx-auto mt-4">
            <p class="lead mt-3">Menjadi universitas unggul, bermartabat, bereputasi nasional, dan internasional, serta berjiwa entrepreneur berbasis imtak tahun 2029.</p>
        </div>
        <p class="mt-5">
            <a href="https://uis.ac.id/" class="btn btn-lg fw-bold border border-white border-3 btn-outline-primary rounded-pill text-white">Lihat Selengkapnya..</a>
        </p>
    </div>
</div>
<?= $this->endSection() ?>