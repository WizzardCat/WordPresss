<?php
/*
    Template Name: Contact Us
*/

get_header();
the_post();
?>

<section id="content" class="clearfix">

    <div class="container clearfix">

        <header class="page-header">

            <h1 class="page-title">We'd love to hear from you</h1>

        </header><!-- end .page-header -->

    </div><!-- end .container -->

    <section id="map">
        <p class="container">Something went wrong... Try to enable your JavaScript!</p>
    </section><!-- end #map -->

    <div class="container clearfix">

        <div class="one-fourth">

            <h3>Contact Info</h3>

            <p>30 South Park Avenue<br/>
                San Francisco, CA 94108<br/>
                USA</p>

            <p>Phone: (123) 456-7890<br/>
                Fax: +08 (123) 456-7890<br/>
                Email: contact@companyname.com<br/>
                Web: companyname.com</p>

            <div class="one-fourth last">
                <p align="center">

                <ul class="social-links">
                    <li class="twitter"><a href="#">Twitter</a></li>
                    <li class="facebook"><a href="#">Facebook</a></li>
                    <li class="youtube"><a href="#">YouTube</a></li>
                </ul><!-- end .social-links -->
                </p>
            </div><!-- end .one-fourth.last -->

        </div><!-- end .one-fourth -->

        <div class="three-fourth last">

            <h3>Let's keep in touch</h3>

                <div>
                    <?php echo do_shortcode("[contact-form-7 id=\"58\" title=\"Formulaire de contact 1\"]");  ?>
                </div>



        </div><!-- end .three-fourth.last -->

    </div><!-- end .container -->



</section><!-- end #content -->

<?php get_footer() ?>