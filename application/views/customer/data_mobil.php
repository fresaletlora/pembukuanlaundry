    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Promo</h2>
                    <span class="title-line"><i class="fa fa-dollar"></i></span>
                    <p>Berikut adalah promo yang ada di kios kami</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
    <div class="container">
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-12">
                <div class="car-list-content">
                    <div class="row">
                        <!-- Single Car Start -->
                        <?php foreach($mobil as $mb) : ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-car-wrap">
                                <img src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>">
                                <div class="car-list-info without-bar">
                                    <h2><a href="#"><?php echo $mb->merk ?></a></h2>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- Single Car End -->
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->
        </div>
    </div>
    </section>
    <!--== Car List Area End ==-->
    <!-- Footer Bottom Start -->
<div class="footer-bottom-area">
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
