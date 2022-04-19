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
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
  rgba(0, 0, 0, 0.45),
  rgba(0, 0, 0, 0.45)
), url('http://gibson-leadership.local/wp-content/uploads/2022/03/Homepage-Header.jpg') top center;
 height: 60vh;">
        <div class="content-middle text-white text-center">
            <div class="center add-padding w-3/4 md:w-1/2 lg:w-1/3 mx-auto">
                <img src="http://gibson-leadership.local/wp-content/uploads/2022/02/Full-Logo-White.png" alt="">
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative pb-8"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('http://gibson-leadership.local/wp-content/uploads/2022/02/background.png') center center;">
            <div class=" p-4 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 md:col-span-6 bg-blue text-white text-left rounded-t-xl md:rounded-none md:rounded-l-xl">
                        <div class="px-5 md:px-10 py-10 ">
                            <h2 class="text-2xl font-bold uppercase pb-5">About Greg</h2>
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
                            <h2 class="text-2xl font-bold uppercase text-white pb-5">Follow Greg</h2>
                            <div class="col-span-12 md:col-span-4">

                                <div class="grid grid-cols-12 gap-4 text-left text-white pb-5">
                                    <div class="col-span-3 md:col-span-2">
                                        <i class="fa-brands fa-facebook text-6xl inline"></i>
                                    </div>
                                    <div class="col-span-9">
                                        <h2 class="pt-2 font-bold uppercase">Facebook </h2>
                                        <h2 class="">Gregory Gibson</h2>
                                    </div>
                                </div>

                                <div class="grid grid-cols-12 gap-4 text-left text-white pb-5">
                                    <div class="col-span-3 md:col-span-2">
                                        <i class="fa-brands fa-twitter-square text-6xl inline"></i>
                                    </div>
                                    <div class="col-span-9">
                                        <h2 class="pt-2 font-bold uppercase">Twitter </h2>
                                        <h2 class="">@gregorygibson</h2>
                                    </div>
                                </div>

                                <div class="grid grid-cols-12 gap-4 text-left text-white pb-5">
                                    <div class="col-span-3 md:col-span-2">
                                        <i class="fa-brands fa-instagram text-6xl inline"></i>
                                    </div>
                                    <div class="col-span-9">
                                        <h2 class="pt-2 font-bold uppercase">Instagram </h2>
                                        <h2 class="">@thegman</h2>
                                    </div>
                                </div>
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
), url('http://gibson-leadership.local/wp-content/uploads/2022/02/background.png') center center;">
            <div class=" p-4 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12 gap-4 md:gap-8">
                    <div class="col-span-12">
                        <h1 class="text-2xl font-bold uppercase text-center">Explore More</h1>
                    </div>

                    <div class="col-span-12 md:col-span-6">
                        <h2 class="text-xl font-bold uppercase text-center mb-3">Initiatives</h2>
                        <div class="bg-green shadow-xl rounded-xl text-left p-10 md:h-64 relative">
                            <div class="content-middle-medium w-10/12">
                                <h6>Featured Initiative</h6>
                                <h5 class="text-2xl uppercase font-bold">SALT Ukraine</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                    sapiente sint totam. </p>
                                <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    View All
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6">
                        <h2 class="text-xl font-bold uppercase text-center mb-3">Books</h2>
                        <div class="bg-green shadow-xl rounded-xl text-left p-10 md:h-64 relative">
                            <div class="content-middle-medium w-10/12">
                                <h6>Featured Book</h6>
                                <h5 class="text-2xl uppercase font-bold">Church Planted</h5>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-md py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    View All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();