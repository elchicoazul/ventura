    <?php 
    $imagen=$datos[0]['img_portada'];
    $descripcion=$datos[0]['descripcion'];
    $itinerario=$datos[0]['itinerario'];
    $nombre=$datos[0]['nombre'];
    ?>
    <?= $this->extend('Menu/layout')?>
    <?= $this->section('contenido')?>
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Detalle del Tour</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
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
                    <!-- Blog Detail Start -->
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
                                <a class="text-primary text-uppercase text-decoration-none" href="./">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <h2 class="mb-3">Dolor justo sea kasd lorem clita justo diam amet</h2>
                            <p><?= $descripcion; ?></p>
                            
                            <h4 class="mb-3">Est dolor lorem et ea</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/blog-2.jpg">
                            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                                duo tempor sea kasd clita ipsum et.</p>
                            <h5 class="mb-3">Est dolor lorem et ea</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-3.jpg">
                            <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor
                                invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam
                                lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor
                                rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor
                                sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at
                                lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at
                                sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam
                                dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna
                                sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et
                                duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat
                                aliquyam et ut.</p>
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                            ipsum diam tempor consetetur at sit.</p>
                                        <button class="btn btn-sm btn-outline-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
    
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    
                    <div class="mb-5">
                        <div class="card border-0">
                            <div class="card-header bg-primary text-center p-4">
                                <h3 class="text-white m-0">Vonsulta tu Viaje</h3>
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
                                    <div>
                                        <button class="btn btn-primary btn-block py-3" type="submit">Consulta</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- formualario para usuarios -->
                    <div class="mb-5">
                    <div class="bg-white mb-3 " style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Nombre *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Comenta"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>

                    </div>
                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
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