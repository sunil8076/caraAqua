<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(<?= base_url() ?>assets/home/img/plumbero-img40.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Contact</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->

    <!-- contact page html start -->
    <section class="contact-page-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="contact-deatil-form">
                    <div class="section-head-info">
                        <h6 class="section-sub-title">GET IN TOUCH</h6>
                        <h3 class="section-title">Get In Touch And Contact Us !</h3>
                        <p class="section-paragraph">
                            We’re here to help! Whether you have questions about our products, need assistance with your RO system, or would like to schedule an appointment, don’t hesitate to reach out.
                        </p>
                    </div>
                    <form class="contact-form">
                        <p>
                            <input type="hidden" name="type" value="1">
                            <input type="text" name="name" placeholder="Name">
                            <span class="message" id="msgcname"></span>
                        </p>
                        <p class="half-width">
                            <input type="email" name="email" placeholder="Email">
                            <span class="message" id="msgcemail"></span>
                        </p>
                        <p class="half-width">
                            <input type="text" name="phone" placeholder="Phone No">
                            <span class="message" id="msgcphone"></span>
                        </p>
                        <p>
                            <textarea rows="8" name="message" placeholder="Message"></textarea>
                            <span class="message" id="msgmessage"></span>
                        </p>
                        <p>
                            <button class="button-round-primary" id="authenticateContact" type="button">SEND MESSAGE</button>
                        </p>
                    </form>
                </div>
                <div class="contact-info contact-list">
                    <div class="contact-para">
                        <figure class="contact-icon icons-list">
                            <i aria-hidden="true" class="icon icon-envelope3"></i>
                        </figure>
                        <aside class="contact-deatils">
                            <span class="contact-heading">
                                Send your message :
                            </span>
                            <p><a href="mailto:support@karaaqua.com"><?= $contactDat['email1']; ?></a></p>
                            <p><a href="mailto:info@karaaqua.com"><?= $contactDat['email2']; ?></a></p>
                        </aside>
                    </div>

                    <div class="contact-para">
                        <figure class="contact-icon icons-list">
                            <i aria-hidden="true" class="icon icon-phone-handset"></i>
                        </figure>
                        <aside class="contact-deatils">
                            <span class="contact-heading">
                                Call us now:
                            </span>
                            <p><a href="tel: +9220241010"> +91<?= $contactDat['phone1']; ?></a></p>
                            <p><a href="tel: +9220241010"> +91 <?= $contactDat['phone2']; ?></a></p>
                        </aside>
                    </div>
                    <div class="contact-para">
                        <figure class="contact-icon icons-list">
                            <i aria-hidden="true" class="icon icon-map-marker1"></i>
                        </figure>
                        <aside class="contact-deatil">
                            <span class="contact-heading">
                                Address:
                            </span>
                            <?php if ($addressLis) {
                                foreach ($addressLis as $address) { ?>
                                    <p><?= $address['address']; ?><?= $address['country']; ?> <?= $address['state']; ?> <?= $address['city']; ?> <?= $address['pincode']; ?>
                                    </p>
                            <?php }
                            } ?>
                            <!-- </p>
                                    <p><strong class="contact-address"> Europe Address: </strong>Rua Josefa Obidos 80, 5 - A Sao Domingos de Rana, 2785-504 Lisbon Portugal</p> -->
                        </aside>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3494.701189104989!2d77.08720007550868!3d28.847754975547847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDUwJzUxLjkiTiA3N8KwMDUnMjMuMiJF!5e0!3m2!1sen!2sin!4v1741420474765!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</main>

<script src="<?= base_url() ?>assets/admin/js/contactme.js"></script>