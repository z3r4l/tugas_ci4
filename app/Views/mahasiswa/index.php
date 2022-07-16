<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container text-light">
    <div class="row">
        <div class="col">
            <h1 class="mb-4 text-center"><?= $title; ?></h1>
            <div>
                <div class="d-flex">
                    <div class="d-flex justify-content-end">
                        <a href="/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
                    </div>
                    <div class="ms-auto">
                        <form action="" method="post">
                            <div class="input-group mt-2">
                                <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
                                <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-bordered tableMahasiswa mt-3" style="vertical-align: middle;">
                <thead>
                    <tr class="text-light">
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col" class="text-center">Foto</th>
                        <th scope="col" class="text-center">NPM</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Kelas</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    <?php $i = 1  + (10 * ($currentPage - 1)); ?>
                    <?php foreach ($mahasiswa as $rw) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i++; ?></th>
                            <td class="text-center"><img src="/img/<?= $rw['foto'] ?>" width="100px" class="foto"></td>
                            <td class="text-center"><?= $rw['no_bp'] ?></td>
                            <td class="text-center"><?= $rw['nm_mhs'] ?></td>
                            <td class="text-center"><?= $rw['kelas'] ?></td>
                            <td class="text-center"><a href="/mahasiswa/<?= $rw['id']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?= $pager->links('mahasiswa', 'mhs_pagination'); ?>
    </div>
</div>

<?= $this->endSection() ?>