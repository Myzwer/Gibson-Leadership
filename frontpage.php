<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage GL_WP
 * @since 1.0.0
 */

get_header(); ?>

    <!-- The Modal -->
    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-top bg-orange relative">

                        <div class="modal-icon">
                            <img src="<?php the_field('modal_icon'); ?>" alt="GL Icon">
                        </div>
                    </div>
                    <div class="modal-inner bg-white rounded-b-xl">
                        <p class="pb-5"><?php the_field('modal_text'); ?></p>
                        <div class="text-left">
                        <?php echo do_shortcode("[gravityform id='3']"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal-->

    <video class="header-video"
           src="<?php the_field('video_background') ?>" autoplay loop
           playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container">
            <div class="center add-padding w-3/4 md:w-1/2 lg:w-1/3 mx-auto">
                <img src="<?php the_field('gl_logo') ?>" alt="Gibson Leadership Logo">
            </div>
            <div class="p-5">
                <h2 class="text-white uppercase text-xl pt-5"><?php the_field('header_tagline') ?></h2>

               <!-- <?php /*if (have_rows('primary_cta_button')): */?>
                    <?php /*while (have_rows('primary_cta_button')): the_row(); */?>
                            <button id="two"class=" button mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <?php /*the_sub_field('button_text') */?>
                            </button>
                    <?php /*endwhile; */?>
                --><?php /*endif; */?>
            </div>
        </div>
    </div>


    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative pb-8"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('<?php the_field('waves_background') ?>') center center;">
            <div class="m-4 md:m-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="text-center mb-1 wysiwyg">
                            <?php the_field('all_copy') ?>
                            <?php if (have_rows('copy_cta_button')): ?>
                                <?php while (have_rows('copy_cta_button')): the_row(); ?>
                                    <a href="<?php the_sub_field('button_link') ?>">
                                        <button class="mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text') ?>
                                        </button>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue relative">
        <div class="grid grid-cols-12 md:h-3/6">
            <div class="hidden md:block md:col-span-6">
                <div class="bg-no-repeat bg-scroll bg-cover relative pb-8 h-full"
                     style="background: linear-gradient(
                      rgba(0, 0, 0, 0.0),
                      rgba(0, 0, 0, 0.0)
                    ), url('<?php the_field('side_photo') ?>') top center; background-repeat: no-repeat; background-size: cover;">
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 relative p-5 md:px-10 md:py-40">
                <div class="">
                    <h2 class="uppercase text-white font-bold text-4xl md:text-5xl"><?php the_field('form_title') ?></h2>
                    <h3 class="uppercase text-white text-2xl md:text-3xl pt-3"><?php the_field('form_subtitle') ?></h3>
                    <div class="text-white pt-10">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                        <p class = "opacity-60 text-xs">This site is protected by reCAPTCHA and the Google
                            <a class = "underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                            <a class = "underline" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative p-5"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('<?php the_field('waves_background') ?>') center center;">
            <div class="lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-6 mx-auto text-center">
                        <div class="w-3/12 pb-6 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="<?php the_field('book_2') ?>" alt="Book Cover">
                        </div>
                        <div class="w-4/12 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="<?php the_field('featured_book') ?>"
                                 alt="Book Cover">
                        </div>
                        <div class="w-3/12 pb-6 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="<?php the_field('book_3') ?>"
                                 alt="Book Cover">
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 relative">
                        <div class="content-middle-medium">
                            <div class="text-left mb-1">
                                <h1 class="text-black text-2xl font-bold "><?php the_field('books_title') ?></h1>
                                <p class="text-xl pb-3"><?php the_field('books_subtitle') ?></p>
                                <?php if (have_rows('books_cta')): ?>
                                    <?php while (have_rows('books_cta')): the_row(); ?>
                                        <a href="<?php the_sub_field('button_link') ?>">
                                            <button class="mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php the_sub_field('button_text') ?>
                                            </button>
                                        </a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue">
        <div class="lg:max-w-6xl lg:text-center lg:mx-auto py-10 px-5">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-7 relative">
                    <div class="content-middle-medium">
                        <div class="text-left mb-1 text-white">
                            <h1 class="text-2xl font-bold "><?php the_field('courses_title') ?></h1>
                            <p class="text-xl pb-3"><?php the_field('courses_subtitle') ?></p>
                            <?php if (have_rows('courses_cta')): ?>
                                <?php while (have_rows('courses_cta')): the_row(); ?>
                                    <a href="<?php the_sub_field('button_link') ?>">
                                        <button class="mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                            <?php the_sub_field('button_text') ?>
                                        </button>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-5 mx-auto text-center">
                    <img class="rounded-md shadow-xl"
                         src="<?php the_field('courses_photo') ?>" alt="Courses Thumbnail Promo">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative p-5"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('http://gibson-leadership.local/wp-content/uploads/2022/02/background.png') center center;">
            <div class="lg:max-w-6xl lg:text-center lg:mx-auto py-24 px-5">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-7 relative">
                        <div class="content-middle-medium">
                            <div class="text-left mb-1 text-black">
                                <h1 class="text-2xl font-bold "><?php the_field('speaking_title') ?></h1>
                                <p class="text-xl pb-3"><?php the_field('speaking_subtitle') ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-5 mx-auto text-center">
                        <?php if (have_rows('speaking_cta')): ?>
                            <?php while (have_rows('speaking_cta')): the_row(); ?>
                                <a href="<?php the_sub_field('button_link') ?>">
                                    <button class="mx-auto mt-3 lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                        <?php the_sub_field('button_text') ?>
                                    </button>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();