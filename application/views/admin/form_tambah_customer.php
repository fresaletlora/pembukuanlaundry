<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Update Data Transaksi</h1>
          </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
            <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Produk</label>
            <input type="text" name="username" class="form-control">
            <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="alamat" class="form-control">
            <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" name="no_telepon" class="form-control">
            <?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>

    </form>

</div>
