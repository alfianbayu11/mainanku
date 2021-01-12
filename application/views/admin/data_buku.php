<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_buku"><i class="fas fa-plus fa-sm"></i>Tambah Ulasan</button>

  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>NAMA MAINAN</th>
      <th>KETERANGAN</th>
      <th>KATEGORI</th>
      <th>HARGA</th>
      <th colspan="3">AKSI</th>
    </tr>

    <?php
    $no = 1;
    foreach ($buku as $bk) : ?>

      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $bk->nama_buku ?></td>
        <td><?php echo $bk->keterangan ?></td>
        <td><?php echo $bk->kategori ?></td>
        <td><?php echo $bk->harga ?></td>
        <td>
          <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
        </td>
        <td><?php echo anchor('admin/data_buku/edit/' . $bk->id_buku, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
        <td><?php echo anchor('admin/data_buku/hapus/' . $bk->id_buku, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
      </tr>

    <?php endforeach; ?>

  </table>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review Mainan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'admin/data_buku/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label>Nama Mainan</label>
            <input type="text" name="nama_buku" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>chibi</option>
              <option>Nendoroid</option>
              <option>Gundam</option>
            </select>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar Mainan</label><br>
            <input type="file" name="gambar" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>