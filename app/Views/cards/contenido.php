    <?php 
    $imagen=$datos[0]['img_portada'];
    $imagenT=$datos[0]['url_img'];
    $descripcion=$datos[0]['descripcion'];
    $itinerario=$datos[0]['itinerario'];
    $lista=$datos[0]['lista_viaje'];
    $nombre=$datos[0]['nombre'];
    $duracion=$datos[0]['dias'];
    $lugar=$datos[0]['ciudad'];
    $personas=$datos[0]['personas'];
    $viaje=$datos[0]['tipo_viaje'];
    $altitud=$datos[0]['altitud_max'];
    $dificultad=$datos[0]['dificultad'];
    $precio=$datos[0]['precio']

    ?>
    <?= $this->extend('Menu/layout')?>
    <?= $this->section('contenido')?>
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Detalle del Tour</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="<?php echo base_url(); ?>">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><?= $nombre; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">

                            <div class="container pt-6 pb-4">
                                <div class="row">
                                    <!-- Duración -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-clock" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Duracion:</small><br>
                                                    <small style="color: #80b434;"><?= $duracion?></small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Lugar -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-map-marker-alt" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Lugar:</small><br>
                                                    <small style="color: #80b434;"><?= $lugar?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Personas -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-users" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Max.Personas:</small><br>
                                                    <small style="color: #80b434;"><?= $personas?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tipo de viaje  -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-walking" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Tipo.Viaje:</small><br>
                                                    <small style="color: #80b434;"><?= $viaje?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Altitud Maxima  -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-mountain" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Max.Altitud:</small><br>
                                                    <small style="color: #80b434;"><?= $altitud?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dificultad  -->
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="package-item bg-white mb-2 rounded">
                                            <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                                                <i class="fas fa-tachometer-alt" style="color: #80b434; font-size: 24px; margin-left: 30px;margin-right: 10px;"></i>
                                                <div class="ms-5">
                                                    <small class="m-2">Dificultad:</small><br>
                                                    <small style="color: #80b434;"><?= $dificultad?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= $imagen; ?>" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>

                            <!-- Sección de Descripción -->
                            <div>
                                <h2 class="mb-3">Descripcion</h2>
                                <hr style="border-color: #80b434;">
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="<?= $imagenT; ?>">
                                <p><?= $descripcion; ?></p>
                            </div>
                            <!-- Fin de la sección de Descripción -->
                        </div>
                    </div> 

                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h2 class="mb-3">Itinerario</h2>
                        <hr style="border-color: #80b434;">
                        <p><?= $itinerario; ?></p>
                    </div>
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h2 class="mb-3">Que incluye el Paquete</h2>
                        <hr style="border-color: #80b434;">
                        <p><?= $lista; ?></p>
                    </div>
                </div>

                
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="mb-5">
                            <div class="bg-white text-center" style="padding: 30px;">
                            <h4 class="text-uppercase mb-4 " style="letter-spacing: 5px;">  ¡PRECIO! </h4>

                                <h1 style="color: #80b434;">S/. <?= $precio; ?></h1>

                            </div>
                        </div>
                    <div class="mb-5">
                        <div class="card border-0">
                            <div class="card-header bg-primary text-center p-4">
                                <h3 class="text-white m-0">Contáctanos</h3>
                            </div>
                            <div class="card-body rounded-bottom bg-white p-5">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="nombre" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" placeholder="email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select px-4" style="height: 47px;">
                                            <option selected>selecciona el destino</option>
                                            <option value="1">destination 1</option>
                                            <option value="2">destination 1</option>
                                            <option value="3">destination 1</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" cols="30" rows="5" class="form-control" placeholder='Dejanos un mensaje ...'></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-block py-3" type="submit">Contacta</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Otros Paquetes</h4>
                        <div class="bg-white" style="padding: 30px;">
                        <?php foreach ($tours as $key): ?>
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="<?php echo base_url(); ?>Tours/<?php echo $key->tours_id?>"><i class="fa fa-angle-right text-primary mr-2"></i><?php echo $key->nombre?></a>
                                    <span class="badge badge-primary badge-pill">S/. <?php echo $key->precio?></span>
                                </li>
                            </ul>
                        <?php endforeach; ?> 
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <?= $this->endSection()?>