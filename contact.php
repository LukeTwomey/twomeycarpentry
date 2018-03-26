<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
    <title>Twomey Carpentry - Contact</title>
    <meta name="robots" content="noindex,nofollow">
</head>

<body>
	<div id="fouc">
        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content contact">

                <div class="home-banner">
                    <img src="images/contact-banner.jpg"/>
                </div>

                <div class="text first">
                    <div class="content">
                        <h1>Contact Us</h1>
                        <p>Please do not hesitate to get in touch. We would be delighted to hear from you and discuss your requirements.</p>
                        <p>No job is considered too small, and we can help with a wide range of <a href="services">services</a>.</p>
                    </div>
                </div>

                <div class="contact-cta-container">
                    <a href="tel:+447923227280" class="button phone">Phone</a>
                    <a href="mailto:info@twomeycarpentry.com?subject=Website Enquiry" class="button email">Email</a>
                </div>

                <div class="text form-instruct">
                    <div class="content">
                        <p>Or send us a message using the form below.</p>
                    </div>
                </div>

                <div class="contact-form">
                    <div class="content">
                        <form class="contactForm" method="post" name="contactForm" novalidate="novalidate">
                            <input id="name" name="name" required="" placeholder="Name" type="text" aria-required="true" style="background-image: none; background-position: 0% 0%; background-repeat: repeat;">
                            <input id="email" name="email" required="" placeholder="E-mail" type="email" aria-required="true">
                            <input name="subject" value=" has sent a new message via the website" type="hidden">
                            <textarea id="message" name="message" required="" rows="3" placeholder="Message" aria-required="true"></textarea>
                            <input type="submit" value="Send message">
                        </form>
                    </div>
                </div>

                <div class="text success-text">
                    <h2 class="success-message-sent hidden">Thank you for your message. We will be in touch as soon as possible.</h2>
                </div>

            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>

    <?php include('backToTop.php'); ?>
    <?php include("javascript-files.php"); ?>

</body>
