@extends('frontend.layouts.main')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5">
    <div class="container mt-4">

        <div class="section-title">
            <h2>{{ $pageName }}</h2>
            <p>Hubungi kami dengan kontak yang tertera dan silahkan tinggalkan pesan serta saran melalui form yang kami
                sediakan.</p>
        </div>
    </div>

    <div class="mx-3">
        <iframe style="border:0; width: 100%; height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.266588724002!2d99.8174168!3d0.0524723!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a7ecbd1d024a5%3A0x2130c501343366f5!2sRSUD%20Pasaman%20Barat!5e0!3m2!1sid!2sid!4v1664778023342!5m2!1sid!2sid"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>WhatsApp:</h4>
                        <p>081267325091</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="#" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection