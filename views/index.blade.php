@extends('layouts.app') 
    @section('content')
    <main class="main">
        <div class="main__info">
            <p class="main__info--slogan">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h2 class="main__info--title">The Perfect Base For You</h2>
            <button class="main__info--bt main__info--btTour" onclick="location.href='./about.php'">TAKE A TOUR</button>
            <button class="main__info--bt main__info--btLearn" onclick="location.href='./contact.php'">LEARN MORE</button>
        </div>

        <div class="main__availability">
            <form class="main__availability--form">
                <div class="main__availability--form--data">
                    <label for="arrivalDate" class="main__availability--form--data--text">Arrival Date</label>
                    <input type="date" name="arrivalDate" id="arrivalDate"
                        class="main__availability--form--data--input" />
                </div>
                <div class="main__availability--form--data">
                    <label for="leDepartureDate" class="main__availability--form--data--text">LeDeparture Date</label>
                    <input type="date" name="leDepartureDate" id="leDepartureDate"
                        class="main__availability--form--data--input" />
                </div>
                <button class="main__availability--form--bt" id="availabilityForm">CHECK AVAILABILITY</button>
            </form>
        </div>

        <div class="main__about">
            <div class="main__about--underground">
                <p class="main__about--underground--info">ABOUT US</p>
                <h1 class="main__about--underground--title">Discover Our Underground.</h1>
                <p class="main__about--underground--desc">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
                <button class="main__about--underground--bt-book" onclick="location.href='./rooms.php'">BOOK NOW</button>
            </div>
            <img src="./media/hotelUnderground.jpg" alt="Hotel terrace"
                class="main__about--img main__about--img--terrace">
            <div class="main__about--team">
                <div class="main__about--team--strong">
                    <img src="./media/strongTeamGrey.png" alt="people group" class="main__about--team--strong--back" />
                    <img src="./media/strongTeam.png" alt="people group" class="main__about--team--strong--front" />
                    <h3 class="main__about--team--strong--title">Strong Team</h3>
                    <p class="main__about--team--strong--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                    <img src="./media/hotelTeam.jpg" alt="hotel coworkers" class="main__about--team--strong--team">
                </div>
            </div>
            <div class="main__about--luxury">
                <img src="./media/suite.jpg" alt="suite room" class="main__about--luxury--img" />
                <div class="main__about--luxury--desc">
                    <img src="./media/calendarSuite.png" alt="Calendar icon" class="main__about--luxury--desc--icon" />
                    <h3 class="main__about--luxury--desc--title">Luxury Room</h3>
                    <p class="main__about--luxury--desc--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="main__about--rooms">
                <p class="main__about--rooms--info">ROOMS</p>
                <h3 class="main__about--rooms--title">Hand Picked Rooms</h3>
                <div class="main__about--rooms--icons">
                    <img src="./media/iconBed.png" alt="a bed icon" />
                    <img src="./media/iconWifi.png" alt="a wifi icon" />
                    <img src="./media/iconCar.png" alt="a car icon" />
                    <img src="./media/iconCold.png" alt="a cold icon" />
                    <img src="./media/iconGym.png" alt="a gym icon" />
                    <img src="./media/iconNoSmoke.png" alt="a no smoke icon" />
                    <img src="./media/iconCocktail.png" alt="a cocktail icon" />
                </div>
                <div class="main__about--rooms">
                    <div class="swiper main__slider--swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper main__slider--swiper--wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide main__slider--swiper--wrapper--slide"><img src="./media/gym.jpg"
                                    alt="gym of hotel" class="slide main__slider--swiper--wrapper--slide--img" /></div>
                            <div class="swiper-slide main__slider--swiper--wrapper--slide"><img
                                    src="./media/restaurant.jpg" alt="restaurant of hotel"
                                    class="slide main__slider--swiper--wrapper--slide--img" /></div>
                            <div class="swiper-slide main__slider--swiper--wrapper--slide"><img src="./media/room.jpg"
                                    alt="room of hotel" class="slide main__slider--swiper--wrapper--slide--img" /></div>
                        </div>

                        <div class="swiper-button-prev main__slider--swiper--wrapper--button"></div>
                        <div class="swiper-button-next main__slider--swiper--wrapper--button"></div>
                    </div>
                </div>
                <div class="main__about--rooms--duplex">
                    <h4 class="main__about--rooms--duplex--title">Minimal Duplex Room</h4>
                    <p class="main__about--rooms--duplex--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <p><span class="main__about--rooms--duplex--price">$345</span><span
                            class="main__about--rooms--duplex--night">/Night</span></p>
                </div>

            </div>
        </div>
        <div class="main__video">
            <p class="main__video--info">INTRO VIDEO</p>
            <h1 class="main__video--title">Meet With Our Luxury Place.</h1>
            <p class="main__video--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <iframe width="560" height="315"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?si=LAQC-6MOY4JAexwE&amp;clip=UgkxtV5CTXwdq5Q9yDxTq9jSjhMjSF8GSJfH&amp;clipt=EKjDARj4yQQ"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class="main__video--repro"></iframe>
            <button class="main__video--bt"  onclick="location.href='./rooms.php'">BOOK NOW</button>
        </div>
        <div class="main__facilities">
            <p class="main__facilities--info">FACILITIES</p>
            <h1 class="main__facilities--title">Core Features</h1>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">01</p>
                        <img src="./media/iconRating.png" alt="icon rating" class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Have High Rating</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">02</p>
                        <img src="./media/clock.png" alt="clock icon" class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Quiet Hours</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">03</p>
                        <img src="./media/location.png" alt="location icon" class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Best Location</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">04</p>
                        <img src="./media/clockCross.png" alt="clock with cross icon"
                            class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Free Cancellation</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">05</p>
                        <img src="./media/payment.png" alt="payment icon" class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Payment Options</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__facilities--rating">
                        <p class="main__facilities--rating--num">06</p>
                        <img src="./media/certificate.png" alt="certificate icon"
                            class="main__facilities--rating--icon">
                        <h4 class="main__facilities--rating--subtitle">Special Offers</h4>
                        <p class="main__facilities--rating--desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
        <div class="main__menu">
            <img src="./media/iconDonut.png" alt="donut icon" class="main__menu--donut">
            <p class="main__menu--info">MENU</p>
            <h1 class="main__menu--title">Our Foods Menu</h1>

            <div class="swiper main__menu--swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper main__menu--swiper--wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide main__menu--swiper--wrapper--slide">
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/eggs.jpg" alt="eggs and bacon"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Eggs & Bacon</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/coffe.jpg" alt="coffe and tea"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Tea or Coffee</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/chia.jpg" alt="chia breakfast"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Chia Oatmeal</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide main__menu--swiper--wrapper--slide">
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/fruit.jpg" alt="fruit parfait"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Fruit Parfait</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/marmalade.jpg" alt="Marmalade Selection"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Marmalade Selection</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                        <div class="main__menu--swiper--wrapper--slide--food">
                            <img src="./media/cheese.jpg" alt="cheese plate"
                                class="main__menu--swiper--wrapper--slide--food--img">
                            <div class="main__menu--food--text">
                                <h4 class="main__menu--food--text--title">Cheese Plate</h4>
                                <p class="main__menu--food--text--desc">Lorem ipsum dolor sit amet, consectetur adip
                                    isicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-prev main__menu--swiper--wrapper--button"></div>
                <div class="swiper-button-next main__menu--swiper--wrapper--button"></div>
            </div>
        </div>


        <div class="main__slider">
            <div class="swiper main__slider--swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper main__slider--swiper--wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide main__slider--swiper--wrapper--slide"><img src="./media/gym.jpg"
                            alt="gym of hotel" class="slide main__slider--swiper--wrapper--slide--img" /></div>
                    <div class="swiper-slide main__slider--swiper--wrapper--slide"><img src="./media/restaurant.jpg"
                            alt="restaurant of hotel" class="slide main__slider--swiper--wrapper--slide--img" />
                    </div>
                    <div class="swiper-slide main__slider--swiper--wrapper--slide"><img src="./media/room.jpg"
                            alt="room of hotel" class="slide main__slider--swiper--wrapper--slide--img" /></div>


                    <div class="swiper-button-prev main__slider--swiper--button__none"></div>
                    <div class="swiper-button-next main__slider--swiper--button__none"></div>
                </div>

                <div class="swiper-pagination main__slider--swiper--pagination"></div>
            </div>
        </div>
        <div class="main__data">
            <div class="main__data--info">
                <img src="./media/rocket.png" alt="rocket icon" class="main__data--info--icon">
                <div class="main__data--info--text">
                    <p class="main__data--info--text--number">84K<span>+</span></p>
                    <p class="main__data--info--text--desc">Projects are Completed</p>
                </div>
            </div>
            <div class="main__data--info">
                <img src="./media/teamData.png" alt="people icon" class="main__data--info--icon">
                <div class="main__data--info--text">
                    <p class="main__data--info--text--number">10M<span>+</span></p>
                    <p class="main__data--info--text--desc">Active Backers Around World</p>
                </div>
            </div>
            <div class="main__data--info">
                <img src="./media/progress.png" alt="statistics icon" class="main__data--info--icon">
                <div class="main__data--info--text">
                    <p class="main__data--info--text--number">02K<span>+</span></p>
                    <p class="main__data--info--text--desc">Categories Served</p>
                </div>
            </div>
            <div class="main__data--info">
                <img src="./media/book.png" alt="book icon" class="main__data--info--icon">
                <div class="main__data--info--text">
                    <p class="main__data--info--text--number">100M<span>+</span></p>
                    <p class="main__data--info--text--desc">Idea Raised funds</p>
                </div>
            </div>
        </div>
    </main>
    @endsection
