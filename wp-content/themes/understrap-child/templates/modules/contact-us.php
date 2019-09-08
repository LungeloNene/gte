<section class="ftco-section bg-light" id="contact-us">
    <div class="container">
        <div class="row contact pb-3">
            <div class="col-md-12 heading-section ftco-animate text-center fadeInUp ftco-animated ">
                <h2 class="mb-4">Contact us</h2>
            </div>
            <div class="col-md-6 heading-section ftco-animate text-center fadeInUp ftco-animated form">
                <p><?php the_field('contact-us'); ?></p>
            </div>
            <div class="col-md-6 heading-section ftco-animate text-center fadeInUp ftco-animated ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.386983136667!2d30.986610014982187!3d-29.8531115819524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9f8b4c0042d%3A0x208eac05961c7c5c!2s72%20Mazisi%20Kunene%20Rd%2C%20Bulwer%2C%20Berea%2C%204083!5e0!3m2!1sen!2sza!4v1567856820893!5m2!1sen!2sza"
                    width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <h3 class="contact--details_title">Contact Details</h3>
                <ul class="contact--details">
                    <li class="contact--details_address"><i class="fa fa-map-marker"></i><span><a target="_blank"
                                href="https://goo.gl/maps/CDE2A8qbLNA2"><?php the_field('physical-address'); ?></a></span>
                    </li>
                    <li class="contact--details_email"><i class="fa fa-envelope"></i><span><a
                                href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span></li>
                    <li class="contact--details_phone-number"><i class="fa fa-phone"></i><span><a
                                href="tel:<?php the_field('phone-number'); ?>"><?php the_field('phone-number'); ?></a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>