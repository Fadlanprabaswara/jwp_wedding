<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Page Header End -->

 <!-- About Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="<?= base_url('assets/landing/') ?>img/about-11.jpg" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="<?= base_url('assets/landing/') ?>img/about-13.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="<?= base_url('assets/landing/') ?>img/about-14.jpg" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="<?= base_url('assets/landing/') ?>img/about-12.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h1 class="display-6">The success history of JeWePe WO in 25 years</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?= base_url('assets/landing/') ?>img/about-15.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>Our Wedding Organizer is one of the most popular in the world</h5>
                            <p class="mb-0"> JeWePe WO has built a reputation as a reputable event organizer in the industry. With high dedication and creativity, JeWePe WO has managed to realize various client's dreams into reality through spectacular and unforgettable events.</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>JEWEPE Wedding Organizer has achieved various proud achievements throughout its journey</h5>
                            <p class="mb-0">JEWEPE Wedding Organizer has received various prestigious awards in the wedding industry, such as "Best Wedding Organizer" and "Most Creative Wedding Organizer".</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="<?= base_url('assets/landing/') ?>img/about-16.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

      <!-- Contact Start -->
      <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Kontak Kami</p>
                <p class="display-8">Silahkah Hubungi Kami pada Kontak dibawah ini</p>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->email1; ?></p>
                    <p class="mb-0"><?= $getDataWeb->email2; ?></p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->phone_number1 ;?></p>
                    <p class="mb-0"><?= $getDataWeb->phone_number2 ;?></p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->address ;?></p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <?= $getDataWeb->maps ;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->