<?php
/**
 * Template Name: Privacy Policy
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage GL_WP
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 0, 0, 0.75),
  rgba(0, 0, 0, 0.75)
), url('<?php the_field('image') ?>') center center;
 height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-4xl mb-5">Privacy Policy</h1>
        </div>
    </div>


    <div class="m-4 md:m-10 lg:max-w-4xl lg:mx-auto privacy-policy">
        <div class="grid grid-cols-12 gap-4">
	        <div class="col-span-12 p-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			else: ?>
                <p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
	        </div>
        </div>
    </div>


<?php get_footer();
