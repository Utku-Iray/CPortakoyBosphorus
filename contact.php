<!DOCTYPE html>
<html lang="zxx">
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<!-- Page Banner Start -->
<section class="page-banner-area pt-170 rpt-110 pb-190 rpb-125 rel z-1 bgs-cover bgc-black text-center" style="background-image: url(assets/images/blog/istanbul-koprusu-1920.png)">
    <div class="container">
        <div class="banner-inner text-white">
            <h1 class="page-title wow fadeInUp delay-0-2s">İletişim</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                    <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                    <li class="breadcrumb-item active">İletişim</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="bg-lines">
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
    </div>
</section>
<!-- Page Banner End -->


<!-- Contact Form Area start -->
<section class="contact-page-area py-130 rpy-100 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="our-location-part rmb-55 wow fadeInUp delay-0-2s">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="section-title mb-60">
                                <span class="sub-title mb-15">İletişim</span>
                                <h2>Bizim ile İletşime geçin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content wow fadeInUp delay-0-2s">
                        <div class="tab-pane fade active show" id="australia">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="flaticon-location-1"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Lokasyon</span>
                                    <span class="text">Crowne Plaza Istanbul - Ortakoy Bosphorus, an IHG Hotel, Ortaköy, Dereboyu Cd. No10, 34347 Beşiktaş/İstanbul</span>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content">
                                    <span class="title">Telefon Numarası</span>
                                    <span class="text">
                                        <a href="calto:+905309196456">+90 530 919 6456</a>
                                    </span>
                                </div>
                              
                            </div>
                            <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="flaticon-email-marketing"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">Email Address</span>
                                        <span class="text">
                                            <a href="infocportakoybosphorus.com">info@cportakoybosphorus.com</a>,
                                        </span>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-page-form wow fadeInUp delay-0-2s">
                    <div class="section-title mb-15">
                        <h3>Mesaj Gönder</h3>
                        
                    </div>
                    <form id="contactForm" class="contactForm" action="assets/php/form-process.php" name="contactForm" method="post">
                        <div class="row gap-20 pt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Ad" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="Telefon" required data-error="Please enter your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="E-mail" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Konu" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="3" placeholder="MEsaj" required data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group pt-5 mb-0">
                                    <button type="submit" class="theme-btn">Mesaj Gönder<i class="far fa-arrow-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lines for-bg-white">
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
        <span></span><span></span>
    </div>
</section>
<!-- Contact Form Area end -->


<!-- Location Map Area Start -->
<div class="contact-page-map pb-120 rpb-90 wow fadeInUp delay-0-2s">
    <div class="container-fluid">
        <div class="our-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2008.2142298039196!2d29.02583913713448!3d41.048845968784036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7c90dd0733f%3A0x8c9e4986f0e0e090!2sCrowne%20Plaza%20Istanbul%20-%20Ortakoy%20Bosphorus%2C%20an%20IHG%20Hotel!5e0!3m2!1str!2str!4v1706109442008!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Location Map Area End -->


<!-- Instagram Area start -->
<section class="instagram-area">
    <div class="instagram-item wow fadeInUp delay-0-2s">
        <a class="instagram-gallery" href="assets/images/insta-1.png">
            <img src="assets/images/insta-1.png" alt="instagram">
        </a>
    </div>
    <div class="instagram-item wow fadeInUp delay-0-3s">
        <a class="instagram-gallery" href="assets/images/insta-2.png">
            <img src="assets/images/insta-2.png" alt="instagram">
        </a>
    </div>
    <div class="instagram-item wow fadeInUp delay-0-4s">
        <div class="content text-white">
            <div class="icon"><i class="fab fa-instagram"></i></div>
            <h2><a href="https://www.instagram.com">Bizi İnstagram'dan Takip Edin!</a></h2>
            <hr>
            <div class="call-text">Telefon</div>
            <a class="h2" href="tell:+905309196456">+90 530 919 6456</a>
        </div>
    </div>
    <div class="instagram-item wow fadeInUp delay-0-5s">
        <a class="instagram-gallery" href="assets/images/insta-3.png">
            <img src="assets/images/insta-3.png" alt="instagram">
        </a>
    </div>
    <div class="instagram-item wow fadeInUp delay-0-6s">
        <a class="instagram-gallery" href="assets/images/insta-4.png">
            <img src="assets/images/insta-4.png" alt="instagram">
        </a>
    </div>
</section>
<!-- Instagram Area end -->



<!-- footer area start -->
<?php include 'php/footer.php' ?>
</body>

</html>