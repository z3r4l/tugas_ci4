<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container text-light">
    <h1><?= $title; ?></h1>
    <form action="/mahasiswa/save" class="mt-3" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="nm_mhs" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nm_mhs')) ? 'is-invalid' : ''; ?>" id="nm_mhs" name="nm_mhs" value="<?= old('nm_mhs'); ?>" autofocus>
                <div id="nm_mhs" class="invalid-feedback">
                    <?= $validation->getError('nm_mhs'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="no_bp" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  <?= ($validation->hasError('no_bp')) ? 'is-invalid' : ''; ?>" id="no_bp" name="no_bp" value="<?= old('no_bp'); ?>">
                <div id="no_bp" class="invalid-feedback">
                    <?= $validation->getError('no_bp'); ?>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= old('kelas'); ?>">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input id="foto" name="foto" type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <div id="foto" class="invalid-feedback">
                        <?= $validation->getError('foto'); ?>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tambahkan Data</button>
    </form>
</div>
<?= $this->endSection() ?>