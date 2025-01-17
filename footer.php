<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trungta
 */

?>

	        <!--Footer-->
			<footer class="footer">
            <div class="row">
                <div class="col-1-of-4 footer__logo-box">
                        <a href="#">
                            <img src=<?php echo get_theme_file_uri( './images/Trung-Ta-footer.png' ) ?> alt="Trung Ta Logo" class="footer__logo">
                        </a>

                    <ul class="footer__social-links">
                        <li>
                            <a class="footer__link" href="https://www.instagram.com/trung.ta.fi/?hl=fi"><i class="footer__icon fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="footer__link" href="https://www.facebook.com/TrungTaFinland"><i class="footer__icon fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="footer__link" href="https://www.youtube.com/channel/UC9LQdfz3AYb2zrAxS3CNRmg"><i class="footer__icon fab fa-youtube"></i></a>
                        </li>
                    </ul>

                    <p class="footer__copyright">
                        Trung Ta &copy; <span class="year">2022</span> 
                        All rights reserved.<br>
                        
                    </p>
                    <p class="footer__copyright">
                        Verkkototeutus Trung Ta
                    </p>
                </div>

            
                <div class="col-1-of-4 footer-1">
                    <p class="footer__heading">Yhteystiedot</p>
                    <address class="footer__contacts">
                    <p class="footer__address">
                        Suomen nettimyynti Oy<br>
                        Trung Ta<br>
                        Palstakatu 7-9<br>
                        11100 Riihimäki<br>
                        Y-tunnus: 2885161-6
                    </p>
                    <p>
                        <a class="footer__link" href="tel:+35844123776">+358440123776</a> (myös Whatappissa)
                    </p>
                </div>

                <div class="col-1-of-4">
                    <p class="footer__heading">Uusimmat Julkaisut</p>
                    <?php 
                        if(is_active_sidebar( 'footer-one' )){
                            dynamic_sidebar( 'footer-one' );
                        }
                    ?>
                </div>

                <div class="col-1-of-4 footer-2">
                    <p class="footer__heading">Sivukartat</p>

                    <?php 
                        wp_nav_menu( array(
                            'theme_location'    => 'footerLocationTwo'
                        ) )
                    ?>
                    <!--
                    <ul class="footer__nav">
                      <li><a class="footer__link" href="<?php echo site_url( '/tietosuojaseloste' ) ?>">Tietosuojaseloste</a></li>
                      <li><a class="footer__link" href="#">Pyydä tarjous</a></li>
                      <li><a class="footer__link" href="#">Hinnasto</a></li>
                    </ul>
                    -->
                </div>
            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
