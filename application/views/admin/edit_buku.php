<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA</h3>

	<?php foreach ($buku as $bk) : ?>

		<form method="post" action="<?php echo base_url() . 'admin/data_buku/update' ?>">

			<div class="form-group">
				<label>Nama Mainan</label>
				<input type="text" name="nama_buku" class="form-control" value="<?php echo $bk->nama_buku ?>">
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input type="hidden" name="id_buku" class="form-control" value="<?php echo $bk->id_buku ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $bk->keterangan ?>">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $bk->kategori ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $bk->harga ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>
</div>