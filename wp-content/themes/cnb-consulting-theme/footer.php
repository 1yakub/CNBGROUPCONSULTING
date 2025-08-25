<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CNB_Consulting_Theme
 */


require_once get_template_directory() . '/template-parts/footer/fallback-menu.php';
?>

</main><!-- #main -->

<footer id="colophon" class="bg-slate-900 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php get_template_part('template-parts/footer/social-bar'); ?>

        <!-- Main Footer Content -->
        <div class="py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <?php get_template_part('template-parts/footer/company-info'); ?>

                <?php get_template_part('template-parts/footer/legal-services'); ?>

                <?php get_template_part('template-parts/footer/important-links'); ?>

                <?php get_template_part('template-parts/footer/contact-info'); ?>

            </div><!-- .footer-widgets -->
        </div><!-- .footer-main -->

        <?php get_template_part('template-parts/footer/copyright'); ?>

    </div><!-- .container -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>