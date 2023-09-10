<?php
/**
 * Template Name: Form Submission Successful
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage GL_WP
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">



                <h1 class="md:mt-10 uppercase text-2xl md:text-3xl"><?php the_field('title'); ?></h1>
                <p class=" text-xl"><?php the_field('subtitle'); ?></p>
                <p><?php the_field('instructions'); ?></p>
                <?php if (have_rows('button')): ?>
                    <?php while (have_rows('button')): the_row(); ?>
                        <a href="<?php the_sub_field('button_link') ?>">
                            <button class="mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <?php the_sub_field('button_text') ?>
                            </button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.45),
                rgba(0, 0, 0, 0.45)
                ), url('<?php the_field('background_image'); ?>') top center;
                height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();
