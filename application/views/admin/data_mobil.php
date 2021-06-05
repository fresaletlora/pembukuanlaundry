<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Produk</h1>
          </div>

          <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>
          
          <?php echo $this->session->flashdata('pesan') ?>

          <table class="table table-hover table-striped table-borderd">
                <thread>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                        $no=1;
                        foreach($mobil as $mb) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $mb->nama_produk ?></td>
								<td>Rp. <?php echo number_format($mb->harga,0,',','.') ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/data_mobil/detail_mobil/').$mb->id_produk ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                    <a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$mb->id_produk ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="<?php echo base_url('admin/data_mobil/update_mobil/').$mb->id_produk ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </section>
</div>
