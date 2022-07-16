<?php $this->extend('./layout/template') ?>

<?php $this->section('content') ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <div class="card mb-5" style="max-width: 1040px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $mahasiswa['foto']; ?>" width="300px" class="img-fluid rounded-start" alt="<?= $mahasiswa['foto']; ?>">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-text">Nama : <?= $mahasiswa['nm_mhs']; ?></h5>
                            <h5 class="card-text">NPM : <?= $mahasiswa['no_bp']; ?></h5>
                            <h5 class="card-text">Kelas : <?= $mahasiswa['kelas']; ?></h5>
                            <a href="/edit/<?= $mahasiswa['id']; ?>" class="btn btn-info text-light">Edit</a>
                            <form action="/mahasiswa/<?= $mahasiswa['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <br>
                            <a href="/mahasiswa">Kembali Kehalaman Index</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>