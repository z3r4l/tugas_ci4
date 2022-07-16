<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1 class="text-center text-light"><?= $title; ?></h1>
    <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" class="mt-3" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="fotoLama" value="<?= $mahasiswa['foto']; ?>">
        <div class="row mb-3">
            <label for="nm_mhs" class="col-sm-2 col-form-label text-light">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nm_mhs')) ? 'is-invalid' : ''; ?>" id="nm_mhs" name="nm_mhs" value="<?= $mahasiswa['nm_mhs']; ?>" autofocus>
                <div id="nm_mhs" class="invalid-feedback">
                    <?= $validation->getError('nm_mhs'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="no_bp" class="col-sm-2 col-form-label text-light">NPM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  <?= ($validation->hasError('no_bp')) ? 'is-invalid' : ''; ?>" id="no_bp" name="no_bp" value="<?= $mahasiswa['no_bp']; ?>">
                <div id="no_bp" class="invalid-feedback">
                    <?= $validation->getError('no_bp'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kelas" class="col-sm-2 col-form-label text-light">Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= $mahasiswa['kelas']; ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="foto" class="col-sm-2 col-form-label text-light">Foto</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input id="foto" name="foto" type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <div id="foto" class="invalid-feedback">
                        <?= $validation->getError('foto'); ?>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mb-5">Tambahkan Data</button>
    </form>
</div>
<?= $this->endSection() ?>