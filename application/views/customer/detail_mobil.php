<div class="container mt-5 mb-5">

    <div class="card" style="margin-top: 170px">
    
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 90%" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Plat</th>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi</th>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php if($dt->status == '1'){
                                    echo "Tersedia";
                                }else{
                                    echo "Tidak Tersedia/Sedang Disewa";
                                } ?>
                                
                                </td>
                            </tr>

                            <tr>
                            <td></td>
                                <td>
                                    <?php

                                    if ($dt->status == "0"){
                                        echo "<span class='btn btn-danger' disable>Sedang di Sewa</span>";
                                    }else{
                                        echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '<button class="btn btn-success">Sewa</button>');
                                    }

                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Footer Bottom Start -->
<div class="footer-bottom-area fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright LoraRentCar&copy;<script>document.write(new Date().getFullYear());</script> | Design by Fresa Mikhael 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->