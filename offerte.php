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
                <h3 class="heading">Request a Quote</h3>
                <p class="desc">Fill out the form or call <span class="yellow-text">123 456 7891</span><br>to
                    start
                    protecting your business today!</p>
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1"></li>
                    <li class="step0" id="step2"></li>
                    <li class="step0" id="step3"></li>
                    <li class="step0" id="step4"></li>
                </ul>
                <fieldset class="show">
                    <div class="form-card">
                        <h5 class="sub-heading">Select Service(s)</h5>
                        <div class="row px-1 radio-group">
                            <div class="card-block text-center radio selected">
                                <div class="image-icon"><img class="icon icon1"
                                                             src="https://i.imgur.com/vZxfo9x.png">
                                </div>
                                <p class="sub-desc">One time paper cleanout</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"><img class="icon icon1 fit-image"
                                                             src="https://i.imgur.com/HnX40f4.png"></div>
                                <p class="sub-desc">Shredding service on a regular schedule</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"><img class="icon icon1 fit-image"
                                                             src="https://i.imgur.com/ynKYPkk.png"></div>
                                <p class="sub-desc">Hard Drive destruction</p>
                            </div>
                            <div class="card-block text-center radio">
                                <div class="image-icon"><img class="icon icon1 fit-image"
                                                             src="https://i.imgur.com/6qK7u8Q.png"></div>
                                <p class="sub-desc">Other Material destruction</p>
                            </div>
                        </div>
                        <button id="next1" class="btn-block btn-primary mt-3 mb-1 next">NEXT<span
                                    class="fa fa-long-arrow-right"></span></button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Personal Details</h5> <label class="text-danger mb-3">*
                            Required</label>
                        <div class="form-group"><label class="form-control-label">First Name * :</label> <input
                                    type="text" id="fname" name="fname" placeholder="" class="form-control"
                                    onblur="validate1(1)"></div>
                        <div class="form-group"><label class="form-control-label">Last Name * :</label> <input
                                    type="text" id="lname" name="lname" placeholder="" class="form-control"
                                    onblur="validate1(2)"></div>
                        <div class="form-group"><label class="form-control-label">Email ID * :</label> <input
                                    type="text" id="email" name="email" placeholder="" class="form-control"
                                    onblur="validate1(3)"></div>
                        <div class="form-group"><label class="form-control-label">Contact No. * :</label> <input
                                    type="text" id="mob" name="mob" placeholder="" class="form-control"
                                    onblur="validate1(4)"></div>
                        <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4"
                                onclick="validate1(0)">NEXT<span
                                    class="fa fa-long-arrow-right"></span></button>
                        <button class="btn-block btn-secondary mt-3 mb-1 prev"><span
                                    class="fa fa-long-arrow-left"></span>PREVIOUS
                        </button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Company Details</h5> <label class="text-danger mb-3">*
                            Required</label>
                        <div class="form-group"><label class="form-control-label">Company Name * :</label>
                            <input
                                    type="text" id="cname" name="cname" placeholder="" class="form-control"
                                    onblur="validate2(1)"></div>
                        <div class="form-group"><label class="form-control-label">Zip Code * :</label> <input
                                    type="text" id="zip" name="zip" placeholder="" class="form-control"
                                    onblur="validate2(2)"></div>
                        <div class="form-group"><label class="form-control-label">State * :</label>
                            <input type="text"
                                   id="state"
                                   name="state"
                                   placeholder=""
                                   class="form-control"
                                   onblur="validate2(3)">
                        </div>
                        <div class="form-group"><label class="form-control-label">City * :</label>
                            <input type="text"
                                   id="city"
                                   name="city"
                                   placeholder=""
                                   class="form-control"
                                   onblur="validate2(4)">
                        </div>
                        <div class="form-group"><label class="form-control-label">Shredding Job Size * :</label>
                            <div class="select mb-3"><select name="shred-info" class="form-control">
                                    <option>NA</option>
                                    <option>1-20 boxes</option>
                                    <option>20-50 boxes</option>
                                    <option>50-100 boxes</option>
                                    <option>100+ boxes</option>
                                </select></div>
                        </div>
                        <button id="next3" class="btn-block btn-primary mt-3 mb-1 next mt-4"
                                onclick="validate2(0)">
                            SUBMIT REQUEST<span class="fa fa-long-arrow-right"></span></button>
                        <button class="btn-block btn-secondary mt-3 mb-1 prev"><span
                                    class="fa fa-long-arrow-left"></span>PREVIOUS
                        </button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Success!</h5>
                        <p class="message">Thank You for choosing our website.<br>Quotation will be sent to your
                            Email
                            ID and Contact Number.</p>
                        <div class="check"><img class="fit-image check-img"
                                                src="https://i.imgur.com/QH6Zd6Y.gif"></div>
                    </div>
                </fieldset>
            </div>
        </div>
    </section>
    <script type='text/javascript' src='js/offerte.js'></script>

<?php include_once "footer.php" ?>