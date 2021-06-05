<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Produk</h1>
          </div>

          <div class="card">
                <div class="card-body">

                    <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="merk" class="form-control">
                                <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="no_plat" class="form-control">
                                <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="submit" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </section>
</div>
