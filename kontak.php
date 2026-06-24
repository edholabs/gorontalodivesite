<?php
$title = "CONTACT US";
include_once "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-hero">
                <h1>Get in Touch</h1>
                <p style="font-size: 1.2em; color: #666; max-width: 600px; margin: 0 auto;">Have questions about dive sites in Gorontalo? Need help planning your trip? Send us a message and we'll be happy to assist you!</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <h3>Our Location</h3>
                <p style="color: #666; margin-top: 15px;">Dinas Pariwisata Provinsi Gorontalo<br>Gorontalo, Indonesia</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <p style="color: #666; margin-top: 15px;">info@gorontalodivesite.com<br>support@gorontalodivesite.com</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fa fa-phone"></i>
                </div>
                <h3>Call Us</h3>
                <p style="color: #666; margin-top: 15px;">+62 435 123456<br>+62 811 0000 000</p>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px; margin-bottom: 50px;">
        <div class="col-md-6">
            <div class="contact-form">
                <h3 style="margin-top: 0; color: #023e8a; font-weight: 700; margin-bottom: 25px;">Send a Message</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label style="color: #666;">Your Name</label>
                        <input type="text" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label style="color: #666;">Email Address</label>
                        <input type="email" class="form-control" placeholder="john@example.com">
                    </div>
                    <div class="form-group">
                        <label style="color: #666;">Message</label>
                        <textarea class="form-control" rows="5" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="button" class="btn btn-hero" style="width: 100%; border-radius: 10px; margin-top: 10px;">Send Message</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Optional embedded map or just a nice image -->
            <div style="border-radius: 20px; overflow: hidden; height: 100%; min-height: 400px; box-shadow: 0 15px 35px rgba(0,0,0,0.05);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.62534571991!2d123.0514!3d0.5489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327ed5d05e55b1f9%3A0xc3b8a3683f8b04a!2sGorontalo!5e0!3m2!1sen!2sid!4v1680000000000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>
