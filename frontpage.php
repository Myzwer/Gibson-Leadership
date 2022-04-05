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

    <div class="bg-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative p-5"
             style="background: linear-gradient(
  rgba(245, 235, 232, 0.45),
  rgba(245, 235, 232, 0.45)
), url('http://gibson-leadership.local/wp-content/uploads/2022/02/background.png') center center;">
            <div class="lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:col-span-6 mx-auto text-center">
                        <div class="w-3/12 pb-6 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="http://gibson-leadership.local/wp-content/uploads/2022/04/Book-Covers.png" alt="">
                        </div>
                        <div class="w-4/12 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="http://gibson-leadership.local/wp-content/uploads/2022/04/Book-Cover-3.jpg"
                                 alt="">
                        </div>
                        <div class="w-3/12 pb-6 inline-block">
                            <img class="shadow-xl rounded-md"
                                 src="http://gibson-leadership.local/wp-content/uploads/2022/04/Book-Cover-2.jpg"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 relative">
                        <div class="content-middle-medium">
                            <div class="text-left mb-1">
                                <h1 class="text-black text-2xl font-bold ">Gibson Leadership Books</h1>
                                <p class="text-xl pb-3">Practical Leadership advice to help you be the best you can
                                    be.</p>
                                <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                    See All Books
                                </button>
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
                            <h1 class="text-2xl font-bold ">Gibson Leadership Courses</h1>
                            <p class="text-xl pb-3">Practical Leadership advice to help you be the best you can
                                be.</p>
                            <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                See All Books
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-5 mx-auto text-center">
                    <img class = "rounded-md shadow-xl" src="http://gibson-leadership.local/wp-content/uploads/2022/03/Homepage-Header.jpg" alt="">
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
            <div class="lg:max-w-6xl lg:mx-auto pt-10">
                <div class="grid grid-cols-12 gap-4 md:gap-8">
                    <div class="col-span-12 md:col-span-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aut consequatur cum dolores eligendi explicabo fuga fugit impedit itaque iusto, laudantium maxime mollitia, quaerat rem similique sunt voluptatibus voluptatum?</p>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aut consequatur cum dolores eligendi explicabo fuga fugit impedit itaque iusto, laudantium maxime mollitia, quaerat rem similique sunt voluptatibus voluptatum?</p>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi aut consequatur cum dolores eligendi explicabo fuga fugit impedit itaque iusto, laudantium maxime mollitia, quaerat rem similique sunt voluptatibus voluptatum?</p>
                    </div>

                    <div class="col-span-12 md:col-start-4 md:col-span-6 pt-10 font-bold uppercase text-center">
                        <p class = "center">Gibson Leadership has helped these brands become something great or whatever</p>
                    </div>
                    <div class="col-span-12 font-bold uppercase text-center mx-auto">
                        <img class = "w-16 md:w-24 inline-block" src="https://images.squarespace-cdn.com/content/v1/575a6067b654f9b902f452f4/1552683653140-0UUVQSSUEWVC73AWAEQG/300Logo.png"
                             alt="Company Logo">
                        <img class = "w-16 md:w-24 inline-block" src="https://images.squarespace-cdn.com/content/v1/575a6067b654f9b902f452f4/1552683653140-0UUVQSSUEWVC73AWAEQG/300Logo.png"
                             alt="Company Logo">
                        <img class = "w-16 md:w-24 inline-block" src="https://images.squarespace-cdn.com/content/v1/575a6067b654f9b902f452f4/1552683653140-0UUVQSSUEWVC73AWAEQG/300Logo.png"
                             alt="Company Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue py-16">
        <div class="lg:max-w-6xl lg:text-center lg:mx-auto py-10 px-5">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-7 relative">
                    <div class="content-middle-medium">
                        <div class="text-left mb-1 text-white">
                            <h1 class="text-2xl font-bold ">Schedule Speaking</h1>
                            <p class="text-xl pb-3">Want Greg to come speak to you or your team? Book a time now.</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-5 mx-auto text-center">
                    <button class="mx-auto lg:mx-0 hover:underline bg-orange text-white font-bold rounded-full py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Schedule A Time
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();