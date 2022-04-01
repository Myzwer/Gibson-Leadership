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

    <video class="header-video"
           src="https://foothillscollective.com/wp-content/uploads/2021/04/Res-Power-Background.mp4" autoplay loop
           playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container">
            <div class="center add-padding w-3/4 md:w-1/2 lg:w-1/3 mx-auto">
                <img src="http://gibson-leadership.local/wp-content/uploads/2022/02/Full-Logo-White.png" alt="">
            </div>
            <h2 class="text-white uppercase text-lg pt-5">Learn how to lead yourself</h2>
            <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Begin Your Journey
            </button>
        </div>
    </div>


    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative pb-8"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('http://gibson-leadership.local/wp-content/uploads/2022/02/background.png') center center;">
            <div class="m-4 md:m-10 lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="text-left mb-1">
                            <h1 class="text-black text-4xl pb-3">The most important person you will ever lead is
                                YOU.</h1>
                            <p class="text-xl">Gibson Leadership exists to build leaders. It is simple. If you want to
                                start something that makes an impact, you need to learn how to do 4 things: </p>
                            <ul class="text-black text-2xl pb-3">
                                <li>1. Lead Yourself</li>
                                <li>2. learn your strengths</li>
                                <li>3. Launch your why</li>
                                <li>4. leave a legacy</li>
                            </ul>
                            <p class="text-xl pb-5">Every relationship and every result flows out of those four main
                                quadrants of a leader's life. No matter where you find yourself on the leadership
                                journey today, it is never too late to become a healthy leader who leaves a legacy.</p>
                            <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Discover More
                            </button>
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
                      rgba(0, 0, 0, 0.45),
                      rgba(0, 0, 0, 0.45)
                    ), url('http://gibson-leadership.local/wp-content/uploads/2022/03/Homepage-Header.jpg') top center;">
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 relative p-5 md:px-10 md:py-40">
                <div class="">
                    <h2 class="uppercase text-white font-bold text-4xl md:text-5xl">Get your free resource today</h2>
                    <h3 class="uppercase text-white text-2xl md:text-3xl pt-3">5 ways you can be a better leader <span
                                class="text-orange">today</span></h3>
                    <div class="text-white pt-10">
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();