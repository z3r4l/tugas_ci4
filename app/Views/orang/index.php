<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-light">
  <h2 class="mb-5 text-center">Data Orang</h2>
  <div class="row">
    <div class="col-6">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan keyword pencarian..." name="keyword">
          <button class="btn btn-primary" type="submit" name="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class=" row">
    <div class="col">
      <table class="table">
        <thead class="header">
          <tr class="text-light">
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody class="text-light">
          <?php $i = 1 + (6 * ($currentPage - 1));
          foreach ($orang as $o) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o['alamat']; ?></td>
              <td>
                <a href="" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('orang', 'orang_pagination'); ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>