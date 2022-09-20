<?php
require_once __DIR__ . '/header.php'
?>
<!--================Hero Banner Area Start =================-->
<section class="hero-banner d-flex align-items-center">
    <div class="container text-center">
        <h2>Offerte aanvragen</h2>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Offerte</li>
            </ol>
        </nav>
    </div>
</section>
<!--================Hero Banner Area End =================-->

<!--================ Start Portfolio Area =================-->
<section class="offerte-area">
    <div class="container">
        <div class="card b-0">
            <h3 class="heading">Vraag een offerte aan</h3>
            <p class="desc">Vul het formulier hieronder in of neem contact op voor overige vragen!</p>
            <ul id="progressbar" class="text-center">
                <li class="active step0" id="step1"></li>
                <li class="step0" id="step2"></li>
                <li class="step0" id="step3"></li>
                <li class="step0" id="step4"></li>
            </ul>
            <fieldset class="show">
                <div class="form-card">
                    <h5 class="sub-heading">Selecteer plan(en)</h5>
                    <div class="row px-1 radio-group">
                        <div class="card-block text-center radio selected">
                            <div class="image-icon">
                                <i class="fa-solid fa-shop" style="font-size: 6pc;"></i>
                                <!--                                    <img class="icon icon1" src="https://i.imgur.com/vZxfo9x.png">-->
                            </div>
                            <p class="sub-desc">E-commerce</p>
                        </div>
                        <div class="card-block text-center radio">
                            <div class="image-icon">
                                <i class="fa-solid fa-file" style="font-size: 6pc;"></i>
                                <!--                                    <img class="icon icon1 fit-image" src="https://i.imgur.com/HnX40f4.png">-->
                            </div>
                            <p class="sub-desc">Website</p>
                        </div>
                        <div class="card-block text-center radio">
                            <div class="image-icon">
                                <i class="fa-solid fa-mobile-screen" style="font-size: 6pc;"></i>
                                <!--                                    <img class="icon icon1 fit-image" src="https://i.imgur.com/ynKYPkk.png">-->
                            </div>
                            <p class="sub-desc">App</p>
                        </div>
                        <div class="card-block text-center radio">
                            <div class="image-icon"><i class="fa-solid fa-database" style="font-size: 6pc;"></i>
                                <!--                                    <img class="icon icon1 fit-image"-->
                                <!--                                                             src="https://i.imgur.com/6qK7u8Q.png">-->
                            </div>
                            <p class="sub-desc">Hosting / onderhoud</p>
                        </div>
                    </div>
                    <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">Volgende<span
                                class="fa fa-long-arrow-right"></span></button>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-card">
                    <h5 class="sub-heading mb-4">Persoonlijke Informatie</h5> <label class="text-danger mb-3">*
                        Verplicht</label>
                    <div class="form-group"><label class="form-control-label">Voornaam * :</label> <input
                                type="text" id="fname" name="fname" placeholder="" class="form-control"
                                onblur="validate1(1)"></div>
                    <div class="form-group"><label class="form-control-label">Achternaam * :</label> <input
                                type="text" id="lname" name="lname" placeholder="" class="form-control"
                                onblur="validate1(2)"></div>
                    <div class="form-group"><label class="form-control-label">Email * :</label> <input
                                type="text" id="email" name="email" placeholder="" class="form-control"
                                onblur="validate1(3)"></div>
                    <div class="form-group"><label class="form-control-label">Telefoonnummer * :</label> <input
                                type="text" id="mob" name="mob" placeholder="" class="form-control"
                                onblur="validate1(4)"></div>
                    <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4"
                            onclick="validate1(0)">Volgende<span
                                class="fa fa-long-arrow-right"></span></button>
                    <button class="btn-block btn-secondary mt-3 mb-1 prev"><span
                                class="fa fa-long-arrow-left"></span>Vorige
                    </button>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-card">
                    <h5 class="sub-heading mb-4">Bedrijf Informatie</h5> <label class="text-danger mb-3">*
                        Verplicht</label>
                    <div class="form-group"><label class="form-control-label">Bedrijfsnaam * :</label>
                        <input
                                type="text" id="cname" name="cname" placeholder="" class="form-control"
                                onblur="validate2(1)"></div>
                    <div class="form-group"><label class="form-control-label">Postcode * :</label> <input
                                type="text" id="zip" name="zip" placeholder="" class="form-control"
                                onblur="validate2(2)"></div>
                    <div class="form-group"><label class="form-control-label">Provincie * :</label>
                        <input type="text"
                               id="state"
                               name="state"
                               placeholder=""
                               class="form-control"
                               onblur="validate2(3)">
                    </div>
                    <div class="form-group"><label class="form-control-label">Stad * :</label>
                        <input type="text"
                               id="city"
                               name="city"
                               placeholder=""
                               class="form-control"
                               onblur="validate2(4)">
                    </div>
                    <button id="next3" class="btn-block btn-primary mt-3 mb-1 next mt-4"
                            onclick="validate2(0)">
                        Verzend aanvraag<span class="fa fa-long-arrow-right"></span></button>
                    <button class="btn-block btn-secondary mt-3 mb-1 prev"><span
                                class="fa fa-long-arrow-left"></span>Vorige
                    </button>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-card">
                    <h5 class="sub-heading mb-4">Yesss gelukt!</h5>
                    <p class="message">Bedankt voor het kiezen van onde website.<br>Wij zullen zo snel mogelijk uw aanvraag in behandeling nemen.</p>
                    <div class="check"><img class="fit-image check-img"
                                            src="https://i.imgur.com/QH6Zd6Y.gif"></div>
                </div>
            </fieldset>
        </div>
    </div>
</section>
<script type='text/javascript' src='js/offerte.js'></script>

<!-- ================ start footer Area ================= -->
<footer class="footer-area" style="margin-top: 10pc;">
    <div class="container">

        <div class="footer-bottom row align-items-center text-center no-gutters">
            <p class="footer-text m-0 col-lg-12 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                <a href="https://VisionaryPartners.nl"> VisionaryPartners</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>