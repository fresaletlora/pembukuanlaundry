<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Detail Produk</h1>
          </div>     
    </section>

    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><?php echo $dt->harga_sewa ?></td>
                            </tr>

                        </table>

                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>

                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
