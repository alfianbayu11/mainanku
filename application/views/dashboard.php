<div class="container-fluid">

  <div class="row text-center mt-3">

    <?php foreach ($buku as $bk): ?>
    <div class="card ml-3 mb-3" style="width: 16rem;">
      <img src="<?php echo base_url().'/uploads/'.$bk->gambar ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $bk->nama_buku ?></h5>
        <small><?php echo $bk->keterangan ?></small><br>
        <span class="badge badge-success mb-3">Rp. <?php echo number_format($bk->harga,0,',','.') ?></span><br>
         <?php echo anchor('dashboard/detail/'.$bk->id_buku,'<div class="btn btn-sm btn-success">Detail</div>') ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>
