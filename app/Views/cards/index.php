
<?= $this->extend('Menu/menu')?>
<?= $this->section('contenido')?>
<?php foreach ($datos as $key): ?>

<?php endforeach; ?> 
<!-- Packages Start -->
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                <?php foreach ($datos as $key): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo base_url('assets/imagen/tour/' . $key->url_img); ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $key->ciudad?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $key->dias?></small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i><?php echo $key->personas ?></small>
                            </div>
                            <a class="h5 text-decoration-none" href="<?php echo base_url(); ?>Tours/<?php echo $key->tours_id?>"><?php echo $key->nombre?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h4 class="m-0">S/.<?php echo $key->precio?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Packages End -->
<?= $this->endSection()?>