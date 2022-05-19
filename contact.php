<?php
/**
 * Template Name: Contact
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage GL_WP
 * @since 1.0.0
 */

get_header(); ?>

<?php if (have_rows('header_settings')): ?>
    <?php while (have_rows('header_settings')): the_row(); ?>
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.<?php the_sub_field('tint') ?>),
                rgba(0, 0, 0, 0.<?php the_sub_field('tint') ?>)
                ), url('<?php the_sub_field('background_image') ?>') <?php the_sub_field('x_position') ?> <?php the_sub_field('y_position') ?>;
                height: 60vh;">
            <div class="content-middle text-white text-center">
                <div class="center add-padding w-3/4 md:w-1/2 lg:w-1/3 mx-auto">
                    <img src="<?php the_field('gl_logo') ?>" alt="Gibson Leadership Logo">
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative pb-8"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('<?php the_field('explore_background_image') ?>') center center;">
            <div class=" p-4 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 md:col-span-6 bg-blue text-white text-left rounded-t-xl md:rounded-none md:rounded-l-xl">
                        <div class="px-5 md:px-10 py-10 ">
                            <h2 class="text-2xl font-bold uppercase pb-5"><?php the_field('form_title') ?></h2>
                            <!-- This will generate your form when you add it in WP Admin. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                            else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 bg-orange rounded-b-xl md:rounded-none md:rounded-r-xl">
                        <div class="px-5 md:px-10 py-10 text-left">
                            <h2 class="text-2xl font-bold uppercase text-white pb-5"><?php the_field('social_title') ?></h2>
                            <div class="col-span-12 md:col-span-4">

                                <?php
                                // Check rows exists.
                                if (have_rows('social_medias')):
                                    while (have_rows('social_medias')) : the_row(); ?>
                                        <div class="grid grid-cols-12 gap-4 text-left text-white pb-5">
                                            <div class="col-span-3 md:col-span-2">
                                                <a href="<?php the_sub_field('link') ?>">
                                                    <div class="text-6xl">
                                                        <?php the_sub_field('icon') ?>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-span-9">
                                                <a href="<?php the_sub_field('link') ?>">
                                                    <h2 class="pt-2 font-bold uppercase"><?php the_sub_field('social_media') ?> </h2>
                                                    <h2 class=""><?php the_sub_field('username') ?></h2>
                                                </a>
                                            </div>
                                        </div>

                                    <?php
                                    endwhile;
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative pb-8"
             style="background: linear-gradient(
                     rgba(245, 235, 232, 0.45),
                     rgba(245, 235, 232, 0.45)
                     ), url('<?php the_field('explore_background_image') ?>') center center;">
            <div class=" p-4 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12 gap-4 md:gap-8">
                    <div class="col-span-12">
                        <h1 class="text-2xl font-bold uppercase text-center"><?php the_field('explore_title') ?></h1>
                    </div>

                    <?php if (have_rows('item_1')): ?>
                        <?php while (have_rows('item_1')): the_row(); ?>
                            <div class="col-span-12 md:col-span-6">
                                <h2 class="text-xl font-bold uppercase text-center mb-3">
                                    <?php the_sub_field('type') ?>s
                                </h2>
                                <div class="bg-green shadow-xl rounded-xl text-left p-10 md:h-64 relative">
                                    <div class="content-middle-medium w-10/12">
                                        <h6>Featured <?php the_sub_field('type') ?></h6>
                                        <h5 class="text-2xl uppercase font-bold"><?php the_sub_field('title') ?></h5>
                                        <p class="mb-3"><?php the_sub_field('copy') ?></p>
                                        <a href="<?php the_sub_field('button_link') ?>"></a>
                                        <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text') ?>
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <?php if (have_rows('item_2')): ?>
                        <?php while (have_rows('item_2')): the_row(); ?>
                            <div class="col-span-12 md:col-span-6">
                                <h2 class="text-xl font-bold uppercase text-center mb-3">
                                    <?php the_sub_field('type') ?>s
                                </h2>
                                <div class="bg-green shadow-xl rounded-xl text-left p-10 md:h-64 relative">
                                    <div class="content-middle-medium w-10/12">
                                        <h6>Featured <?php the_sub_field('type') ?></h6>
                                        <h5 class="text-2xl uppercase font-bold"><?php the_sub_field('title') ?></h5>
                                        <p class="mb-3"><?php the_sub_field('copy') ?></p>
                                        <a href="<?php the_sub_field('button_link') ?>"></a>
                                        <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text') ?>
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();