<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container text-light">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Kontak saya</h1>
            <p></p>
            <?php foreach ($contact as $a) : ?>
                <ul class="contact d-flex flex-column align-items-center">
                    <li class=""><a class="text-light text-decoration-none" href="https://www.facebook.com/zeri.aldi">
                        <i class="fa-brands fa-facebook me-2"></i> <?= $a['facebook']; ?></a> </li>
                    <li class=""><a class="text-light text-decoration-none" href="https://www.instagram.com/zeryaldi/">
                        <i class="fa-brands fa-instagram me-2"></i> <?= $a['instagram']; ?></a></li>
                    <li class="whatsapp"><a class="text-light text-decoration-none" 
                    href="https://api.whatsapp.com/send/?phone=%2B62895385165778&text&type=phone_number&app_absent=0">
                        <i class="fa-brands fa-whatsapp me-2"></i> <?= $a['whatsapp']; ?></a></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>