<?php require_once "header.php" ?>
    <!-- End Top Header Area -->

    <!-- Start Contact Area -->
    <section class="echo-contact-area">
        <div class="echo-contact-content">
            <div class="container">
                <div class="echo-contact-full-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="echo-contact-input-field">
                                <div class="echo-contact-title">
                                    <h2 class="text-capitalize">
                                        General Customer Care & Technical Support
                                    </h2>
                                </div>
                                <div class="echo-main-contact-form">
                                    <form method="POST" action="contactform.php">
                                        <div class="echo-contact-input-flexing">
                                            <div class="echo-contact-name echo-df-input">
                                                <input name="name" type="text" placeholder="Name" required/>
                                            </div>
                                            <div class="echo-contact-email echo-df-input">
                                                <input name="email" type="email" placeholder="Email" required/>
                                            </div>
                                        </div>
                                        <div class="echo-contact-input-flexing echo-df-input">
                                            <div class="echo-contact-number echo-df-input">
                                                <input name="contact" type="text" placeholder="Phone" required/>
                                            </div>
                                            <div class="echo-contact-url echo-df-input">
                                                <input name="subject" type="text" placeholder="Subject"/>
                                            </div>
                                        </div>
                                        <div class="echo-contact-texting-fild">
                                            <textarea name="text"
                                                      placeholder="Write your message here..."></textarea>
                                        </div>
                                        <input type="submit" class="echo-contact-btn" name="submit" value="Submit Now"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="echo-info">
                                <div class="echo-address">
                                    <h6 class="text-capitalize">
                                        Location
                                    </h6>
                                    <span>
                                        <?= $Nizam["unvan"] ?>
                                    </span>
                                </div>
                                <div class="echo-address">
                                    <h6 class="text-capitalize">
                                        Email
                                    </h6>
                                    <span>
                                        <?= $Nizam["email"] ?>
                                    </span>
                                </div>
                                <div class="echo-address">
                                    <h6 class="text-capitalize">
                                        Phone
                                    </h6>
                                    <span>
                                        <?= $Nizam["tel"] ?>
                                    </span>
                                </div>
                                <div class="echo-map">
                                    <iframe class="contact-map"
                                            src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3035.4489132429653!2d49.913603377909844!3d40.46533268124282!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDI3JzU2LjQiTiA0OcKwNTQnNDkuMCJF!5e0!3m2!1str!2saz!4v1697652634551!5m2!1str!2saz"
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Footer Area -->
<?php require_once "footer.php" ?>