<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h3>Edit Data Barang</h3>
    <hr>
<?php foreach ($barang as $row) { ?>
    <form method="post" action="<?= base_url('barang/edit_aksi'); ?>">
    <div class="form-group">

    <label for="exampleFormControlInput1">Nama Barang</label>
    <input type="hidden" name="id" value="<?= $row->id_barang; ?>">
    <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" value="<?= $row->nama_barang;  ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Kondisi</label>
    <input type="text" name="kondisi" class="form-control" id="exampleFormControlInput1" value="<?= $row->kondisi;  ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Stok</label>
    <input type="number" name="stok" class="form-control" id="exampleFormControlInput1" value="<?= $row->stok;  ?>">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Harga Satuan</label>
    <input type="number" name="harga_satuan" class="form-control" id="exampleFormControlInput1" value="<?= $row->harga_satuan;  ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="<?= base_url(); ?>" class="btn btn-danger">Batal/Kembali</a>
</form>
<?php }  ?>  

  </div>
</main>	