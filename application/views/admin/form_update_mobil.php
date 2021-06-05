<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Update Data Mobil</h1>
          </div>

          <div class="card">
                <div class="card-body">

                    <?php foreach ($mobil as $mb) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                                <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
                                <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>No. Plat</label>
                                <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
                                <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Transmisi</label>
                                <select name="transmisi" class="form-control">
                                        <option <?php if($mb->transmisi == "1"){echo "selected='selected'";} echo $mb->transmisi; ?> value="1">Automatic</option>
                                        <option <?php if($mb->transmisi == "0"){echo "selected='selected'";} echo $mb->transmisi; ?> value="0">Manual</option>
                               </select>
                                <?php echo form_error('transmisi','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Sewa/Hari</label>
                                <input type="text" name="harga_sewa" class="form-control" value="<?php echo $mb->harga_sewa ?>">
                                <?php echo form_error('harga_sewa','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Denda/Hari</label>
                                <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                                <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                        <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status; ?> value="0">Tidak Tersedia</option>
                               </select>
                                <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="submit" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
</div>