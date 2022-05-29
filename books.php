<?php
/**
 * Template Name: Books
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage GL_WP
 * @since 1.0.0
 */

get_header(); ?>

    <!-- Header Section | Split Image + Texture -->
<?php if (have_rows('header_settings')): ?>
    <?php while (have_rows('header_settings')): the_row(); ?>
        <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative split-bg"
             style="background: linear-gradient(
                     rgba(245, 235, 232, 0.45),
                     rgba(245, 235, 232, 0.45)
                     ), url('<?php the_sub_field('texture_background') ?>') center center;">
            <div class="grid grid-cols-12 md:h-3/6">
                <div class="col-span-12 md:col-span-6">
                    <div class="bg-no-repeat bg-scroll bg-cover relative pb-8 photo-split-bg"
                         style="background: linear-gradient(
                                 rgba(0, 0, 0, 0.45),
                                 rgba(0, 0, 0, 0.45)
                                 ), url('<?php the_sub_field('background_image') ?>') <?php the_sub_field('x-position') ?> <?php the_sub_field('y-position') ?> ;">
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 relative p-5 md:px-10 md:py-40">
                    <div class="content-middle-medium md:px-5">
                        <h1 class="uppercase text-black font-bold text-4xl md:text-5xl"><?php the_sub_field('title') ?></h1>
                        <h2 class="uppercase text-black text-2xl md:text-3xl pt-3"><?php the_sub_field('subtitle') ?></h2>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Header Section -->

    <!-- Start Books Repeater -->
    <div class="bg-blue py-16 relative z-10">
        <div class="lg:max-w-6xl lg:text-center lg:mx-auto py-10 px-5">
            <div class="grid grid-cols-12 gap-4 md:gap-10">

                <?php
                // Check rows exists.
                if (have_rows('books')):
                    while (have_rows('books')) : the_row(); ?>
                        <div class="col-span-12 bg-green p-10 rounded-xl shadow-xl mb-12 <?php the_sub_field('is_visible') ?>">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-4">
                                    <img <img class="rounded-xl w-3/4 -mt-24" src="<?php the_sub_field('image') ?> "
                                              alt="Course Image">
                                </div>

                                <div class="col-span-12 md:col-span-8 text-left">
                                    <h1 class="text-black text-3xl uppercase"><?php the_sub_field('title') ?> </h1>
                                    <div class="wysiwyg">
                                        <?php the_sub_field('copy') ?>
                                    </div>

                                    <div class="pt-5">
                                        <?php if (get_sub_field('button_link')): ?>
                                            <a href="<?php the_sub_field('button_link') ?>">
                                                <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                    <?php the_sub_field('button_text') ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (get_sub_field('button_link_2')): ?>
                                            <a href="<?php the_sub_field('button_link_2') ?>">
                                                <button class="mx-auto lg:mx-0 hover:underline border-orange border-2 text-orange font-bold rounded-md py-1 px-8 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                    <?php the_sub_field('button_text_2') ?>
                                                </button>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
    <!-- End Books Repeater -->

    <!-- Start Explore More -->
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
    <!-- End Explore More -->


<?php
get_footer();
