<div class="container-fluid">

	<div class="card">
		<div class="card-header">
			Detail
		</div>
		<div class="card-body">

			<?php foreach ($buku as $bk) : ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url() . '/uploads/' . $bk->gambar ?>" class="card-img-top">
					</div>
					<div class="col-md-8">

						<table class="table">
							<tr>
								<td>Nama Mainan</td>
								<td><strong><?php echo $bk->nama_buku ?></strong></td>
							</tr>

							<tr>
								<td>Harga</td>
								<td><strong>
										<div class="btn btn-sm btn-success">Rp. <?php echo number_format($bk->harga, 0, ',', '.') ?></div>
									</strong></td>
							</tr>

							<tr>
								<td>Kategori</td>
								<td><strong><?php echo $bk->kategori ?></strong></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td><strong><?php echo $bk->keterangan ?></strong></td>
							</tr>

						</table>

						<?php echo anchor('welcome/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>



					</div>
				</div>

			<?php endforeach; ?>
		</div>
	</div>

</div>