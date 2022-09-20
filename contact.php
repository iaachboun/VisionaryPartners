<?php
require_once __DIR__ . '/header.php'
?>


<!--================Hero Banner Area Start =================-->
<section class="hero-banner d-flex align-items-center">
    <div class="container text-center">
        <h2>Contact</h2>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</section>
<!--================Hero Banner Area End =================-->


<!-- ================ contact section start ================= -->
<section class="contact-section area-padding">
    <div class="container">

<!--        <div class="d-none d-sm-block mb-5 pb-4">-->
<!--            -->
<!--        </div>-->


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Bereik ons</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="../contact_process.php" method="post" id="contactForm"
                      novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                          placeholder="Vul een bericht in"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text"
                                       placeholder="Naam">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email"
                                       placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                       placeholder="Onderwerp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm" style="width: 100%">Verstuur bericht</button>
                    </div>
                </form>


            </div>

            <div class="col-lg-4">
                <!--          <div class="media contact-info">-->
                <!--            <span class="contact-info__icon"><i class="ti-home"></i></span>-->
                <!--            <div class="media-body">-->
                <!--              <h3>Buttonwood, California.</h3>-->
                <!--              <p>Rosemead, CA 91770</p>-->
                <!--            </div>-->
                <!--          </div>-->
                <!--          <div class="media contact-info">-->
                <!--            <span class="contact-info__icon"><i class="ti-tablet"></i></span>-->
                <!--            <div class="media-body">-->
                <!--              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>-->
                <!--              <p>Mon to Fri 9am to 6pm</p>-->
                <!--            </div>-->
                <!--          </div>-->
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:support@colorlib.com">info@visionarpartner.nl</a></h3>
                        <p>Stuur ons een bericht!</p>
                    </div>
                </div>

                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="fa-solid fa-phone"></i></span>
                    <div class="media-body">
                        <h3>06-12345678</h3>
                        <p>Of bel ons</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include_once "footer.php"?>

<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <h2>Bedankt</h2>
                <p>Je bericht is met succes verzonden!</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <h2>Sorry !</h2>
                <p> Er is iets verkeerd gegaan </p>
            </div>
        </div>
    </div>
</div>
<!--================End Contact Success and Error message Area =================-->

</body>
</html>