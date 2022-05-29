<?php
/**
 * The template for displaying the footer on the site.
 * It does not use tailwind, it's SCSS file can be found at ./assets/src/sass/components/footer.scss.
 * The "Footer Columns" generated by PHP can be configured in functions.php.
 *
 * Contains the footer of the site as well as WP's required code and the closing body and HTML tags.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage GL_WP
 * @since 1.0.0
 */
?>

<!--Start Footer-->
<footer class="footer">
    <div class="footer-outer">

        <!--Company Logo-->
        <img src=<?php the_field('footer_icon_wp', 'options'); ?>"">
        <div class="footer-inner">
            <hr>
            <!--Company Info-->
            <div class="footer-links">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-column-1' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-column-2' ) ); ?>
            </div>
            <div class="footer-icons text-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <p class = "copyright">© <?php echo date("Y"); ?> Gibson Leadership</p>
        </div>
    </div>

</footer>
<!--End Footer-->


<!--Wordpress Requires This-->
<?php wp_footer(); ?>

</body>
</html>

