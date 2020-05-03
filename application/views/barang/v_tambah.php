<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h3>Tambah Data Barang</h3>
    <hr>
    <form method="post" action="<?= base_url('barang/tambah_aksi'); ?>">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nama Barang</label>
    <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Kondisi</label>
    <input type="text" name="kondisi" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Stok</label>
    <input type="number" name="stok" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Harga Satuan</label>
    <input type="number" name="harga_satuan" class="form-control" id="exampleFormControlInput1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="<?= base_url(); ?>" class="btn btn-danger">Batal/Kembali</a>
</form>

  </div>
</main>	