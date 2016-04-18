<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package start
 */
?>

	</div><!-- #content -->




	<footer id="colophon" class=""role="contentinfo">
        <div class="divider"></div>
        <div id="footerInfo">
            <a href="index.html"><div style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/bilder/vafintfoto.jpg);" class="footerLogo"></div></a>

            <p id="footerTitle">
                KRISTINA ACZÉL NEBRON
            </p>
            <div id="footerInfoCont">
                <a href="https://www.facebook.com/vafintfoto/"><img class="fb" src="<?php bloginfo('stylesheet_directory'); ?>/bilder/facebook.png" alt="facebook" /></a>
                <p>
                    OSKARSVÄGEN 8, 70214 ÖREBRO
                </p>
                <p>
                    INFO@VAFINTFOTO.COM | WWW.VAFINTFOTO.COM
                </p>
                <p>
                    019 - 33 13 00 | 070 - 156 13 82
                </p>

                <p id="copy">
                    &copy; Kristina Aczél Nebron 2015
                </p>
            </div>
        </div>
        <div style="text-align:center;width:100%; background-color:#2F2F2F">
            <img class="sff" src="<?php bloginfo('stylesheet_directory'); ?>/bilder/sff.png" alt="Svenska Fotografers Förbund" />

        </div>
    </footer>

<?php wp_footer(); ?>


	</div><!-- #page -->


</body>
</html>
