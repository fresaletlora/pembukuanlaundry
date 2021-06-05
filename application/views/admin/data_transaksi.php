<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

		<a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>


        <table class="table table-bordered table-striped">

            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Produk</th>
                <th>Tgl. Masuk</th>
                <th>Tgl. Keluar</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>

            <?php $no=1;
            foreach($transaksi as $tr) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->nama_produk ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_masuk)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_keluar)); ?></td>
                    <td>Rp.<?php echo number_format($tr->total_biaya,0,',','.') ?></td>
					<td>
						<a href="<?php echo base_url('admin/data_mobil/delete_mobil/').$tr->id_produk ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
						<a href="<?php echo base_url('admin/data_mobil/update_mobil/').$tr->id_produk ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
					</td>
                </tr>

            <?php endforeach; ?>
        </table>
    </section>

</div>
