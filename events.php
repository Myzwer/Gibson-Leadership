<?php
/**
 * Template Name: Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage GL_WP
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
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
                 ), url('<?php the_sub_field('texture_background') ?>') center center">
            <div class="grid grid-cols-12 md:h-3/6">
                <div class="col-span-12 md:col-span-6">
                    <div class="bg-no-repeat bg-scroll bg-cover relative pb-8 photo-split-bg"
                         style="background: linear-gradient(
                             rgba(0, 0, 0, 0.45),
                             rgba(0, 0, 0, 0.45)
                             ), url('<?php the_sub_field('background_image') ?>') <?php the_sub_field('x-position') ?> <?php the_sub_field('y-position') ?> ; background-repeat: no-repeat; background-size: cover;">
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

    <!-- Start Courses Repeater -->
    <div class="bg-blue py-16 relative z-10">
        <div class="lg:max-w-6xl lg:text-center lg:mx-auto py-10 px-5">
            <div class="grid grid-cols-12 gap-4 md:gap-10">

                <!-- Override dates so that it sorts by upcoming to farthest away. -->
                <?php
                // get the entire repeater in a multidimensional array
                $repeater = get_field('events');
                //the actual sorting
                usort($repeater, 'event_sort');

                // usort function - compare everything in the array and sort
                function event_sort($a, $b) {
                    return strtotime($a['start']) - strtotime($b['start']);
                }
                foreach ($repeater as $row) {
                    // Get the current time minus a day.
                    $now = time()-86400;
                    // Get the event start date
                    $start_date = strtotime( $row['start'] );
                    // Compare the two, and show the event if the event is today or upcoming. Hide if not.
                    if ($now < $start_date ) {
                   ?>
                    <div class="col-span-12 bg-green p-10 rounded-xl shadow-xl">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 md:col-span-12 text-left">
                                <h1 class="text-black text-3xl uppercase"><?php echo $row['title'] ?> </h1>
                                <h2 class="text-black text-lg italics uppercase pb-5 inline"><?php echo $row['start'] ?></h2>
                                <!-- Because I'll forget, this checks to see if "end" exists and doesn't display the line if it doesn't. Used when
                                     the event only has a start date given, IE, a single day event. -->
                                <?php if ($row['end'] ): ?>
                                    <?php echo '<h2 class = "text-black text-lg italics uppercase pb-5 inline"> - ' . $row['end'] . "</h2>"?>
                                <?php endif; ?>

                                <div class = "events-wysiwyg"><?php echo $row['copy'] ?></div>

                                <div class="pt-5">
                                    <?php if ($row['button_link'] ): ?>
                                        <a href="<?php echo $row['button_link'] ?>"  target="_blank">
                                            <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                                <?php echo $row['button_text'] ?>
                                            </button>
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                   <?php
                    } else {
                    }
                }?>




            </div>
        </div>
    </div>
    <!-- End Courses Section -->


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
                                        <a href="<?php the_sub_field('button_link') ?>">
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
                                        <a href="<?php the_sub_field('button_link') ?>">
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
