
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Hotel Miranda</title>
</head>

<body>
    <header class="header">
        <div class="header__all">
            <div class="header__all--left">
                <img src="./media/burgerIcon.png" alt="menu icon" class="header__all--left--burger" id="burgerIcon" />
                <img src="./media/crossBurger.png" alt="cross icon" class="header__all--left--cross"
                    id="crossBurgerIcon" />
                <a href="./index.html" class="header__all--left--logo">
                    <h1 class="header__all--left--logo--H">H</h1>
                    <h1 class="header__all--left--logo--name">Hotel<br />Miranda</h1>
                </a>
            </div>

            <div class="header__all--menu" id="menu">
                <ul class="header__all--menu--items">
                    <a href="./about.html" class="header__all--menu--items--link">
                        <li class="header__all--menu--items--about">About Us</li>
                    </a>
                    <a href="./rooms.html" class="header__all--menu--items--link">
                        <li class="header__all--menu--items--rooms">Rooms</li>
                    </a>
                    <a href="./offers.html" class="header__all--menu--items--link">
                        <li class="header__all--menu--items--offers">Offers</li>
                    </a>
                    <a href="./contact.html" class="header__all--menu--items--link">
                        <li class="header__all--menu--items--contact">Contact</li>
                    </a>
                </ul>
            </div>

            <div class="header__all--right">
                <img src="./media/personIcon.png" alt="person icon" class="header__all--right--person" />
                <img src="./media/lensIcon.png" alt="lens icon" class="header__all--right--lens" />
            </div>
        </div>
    </header>

    <main class="main">
        <div class="main__info">
            <p class="main__info--slogan">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h2 class="main__info--title">The Perfect Base For You</h2>
            <button class="main__info--bt main__info--btTour" onclick="location.href='./about.html'">TAKE A TOUR</button>
            <button class="main__info--bt main__info--btLearn" onclick="location.href='./contact.html'">LEARN MORE</button>
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
                <button class="main__about--underground--bt-book" onclick="location.href='./rooms.html'">BOOK NOW</button>
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
            <button class="main__video--bt"  onclick="location.href='./rooms.html'">BOOK NOW</button>
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

    <footer class="footer">
        <div class="footer__us">

            <div class="footer__us--logo">
                <p class="footer__us--logo--H">H</p>
                <p class="footer__us--logo--name"><span class="footer__us--logo--name--strong">HOTEL</span><br />MIRANDA
                </p>
            </div>
            <p class="footer__us--desc">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="footer__us--social">
                <div class="footer__us--social--element">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="5282541_fb_social media_facebook_facebook logo_social network_icon 1"
                            clip-path="url(#clip0_56_2207)" class="footer__us--social--element--icon">
                            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z"
                                fill="#777777" />
                        </g>
                        <defs>
                            <clipPath id="clip0_56_2207">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="footer__us--social--element">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="footer__us--social--element--icon">
                        <g id="5305172_tweet_twitter_twitter logo_icon 1" clip-path="url(#clip0_56_2209)">
                            <path id="Dark_Blue"
                                d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z"
                                fill="#777" />
                        </g>
                        <defs>
                            <clipPath id="clip0_56_2209">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="footer__us--social--element">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="footer__us--social--element--icon">
                        <g id="5282539_behance_portfolio_social network_behance logo_icon 1"
                            clip-path="url(#clip0_56_2205)">
                            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM21.3605 15.4995C21.4035 14.8515 21.3508 14.2328 21.2008 13.6404C21.0494 13.047 20.8066 12.518 20.4667 12.0556C20.1263 11.5922 19.6927 11.2221 19.1646 10.9487C18.6338 10.6718 18.0156 10.536 17.3091 10.536C16.6691 10.536 16.0912 10.6496 15.5671 10.8755C15.0435 11.1027 14.5939 11.4134 14.2144 11.8071C13.8359 12.1985 13.5474 12.6653 13.3397 13.2064C13.1355 13.7456 13.0312 14.3288 13.0312 14.9532C13.0312 15.5989 13.1316 16.1949 13.3308 16.7332C13.5323 17.2742 13.815 17.7349 14.1789 18.1245C14.5526 18.5129 14.9964 18.8102 15.5276 19.0228C16.0593 19.2323 16.6514 19.3388 17.3091 19.3388C18.253 19.3388 19.0625 19.1227 19.7269 18.6891C20.3993 18.2568 20.8914 17.5392 21.2163 16.534H19.1961C19.118 16.7923 18.9156 17.0413 18.5832 17.2742C18.2477 17.5077 17.8483 17.6244 17.3858 17.6244C16.7423 17.6244 16.2457 17.4558 15.9018 17.1203C15.5574 16.7847 15.3346 16.1599 15.3346 15.4995H21.3605ZM8.21423 19.1227C8.73173 19.1227 9.23634 19.0575 9.72225 18.9287C10.214 18.7996 10.652 18.6007 11.0341 18.3305C11.4132 18.0624 11.7207 17.715 11.9466 17.2862C12.1707 16.8624 12.2826 16.3591 12.2826 15.7742C12.2826 15.0526 12.1108 14.4375 11.7607 13.9231C11.4123 13.4123 10.8859 13.0532 10.1772 12.8491C10.6978 12.6023 11.0879 12.285 11.3532 11.898C11.6173 11.5102 11.7487 11.0251 11.7487 10.4446C11.7487 9.90802 11.6603 9.45403 11.485 9.09145C11.3048 8.72353 11.0532 8.4315 10.7319 8.2118C10.4053 7.99214 10.0196 7.83192 9.56695 7.73606C9.11203 7.63711 8.61408 7.58963 8.06245 7.58963H2.625V19.1227H8.21423ZM7.92487 13.9826C8.4712 13.9826 8.91544 14.1082 9.24919 14.3611C9.58158 14.6172 9.74934 15.0397 9.74934 15.6339C9.74934 15.9371 9.70008 16.1883 9.59756 16.3818C9.49547 16.5761 9.35437 16.7297 9.18483 16.8415C9.01439 16.9578 8.81334 17.0368 8.58614 17.0861C8.36245 17.1362 8.12456 17.1584 7.87472 17.1584H5.16398V13.9826H7.92487ZM18.5375 12.7324C18.2646 12.4311 17.8035 12.2677 17.2402 12.2677C16.8737 12.2677 16.5705 12.3294 16.3274 12.455C16.0895 12.5793 15.8951 12.7333 15.7464 12.9152C15.5982 13.0998 15.4979 13.2951 15.4389 13.5037C15.3803 13.707 15.3448 13.8911 15.3346 14.054H19.0661C19.0115 13.4691 18.8113 13.0364 18.5375 12.7324ZM7.54008 9.5543C7.76512 9.55434 7.98394 9.57028 8.19338 9.61111C8.40595 9.64795 8.5897 9.71541 8.75212 9.81352C8.91544 9.90802 9.04547 10.0425 9.14353 10.2147C9.23808 10.3869 9.28467 10.6088 9.28467 10.8768C9.28467 11.3606 9.14353 11.7125 8.85155 11.926C8.55642 12.1425 8.18363 12.2491 7.73405 12.2491H5.16398V9.5543H7.54008ZM19.54 9.50152V8.36358H14.865V9.50152H19.54Z"
                                fill="#777777" />
                        </g>
                        <defs>
                            <clipPath id="clip0_56_2205">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="footer__us--social--element">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="footer__us--social--element--icon">
                        <g id="104493_linkedin_icon 1" clip-path="url(#clip0_56_2201)">
                            <g id="Group">
                                <path id="Vector"
                                    d="M12.6477 10.6753V10.6387C12.6401 10.651 12.632 10.6634 12.6239 10.6753H12.6477Z"
                                    fill="#777777" />
                                <path id="Vector_2"
                                    d="M21.782 0H1.73748C0.778081 0 0 0.759521 0 1.6956V21.9747C0 22.9103 0.778081 23.6698 1.73748 23.6698H21.782C22.7428 23.6698 23.5209 22.9098 23.5209 21.9747V1.6956C23.5209 0.759045 22.7423 0 21.782 0ZM7.12931 19.8146H3.57679V9.12662H7.12931V19.8146ZM5.35329 7.66659H5.32949C4.13787 7.66659 3.36692 6.84568 3.36692 5.82014C3.36692 4.77175 4.16166 3.97368 5.37661 3.97368C6.59203 3.97368 7.33965 4.77175 7.36345 5.82014C7.36345 6.84568 6.59156 7.66659 5.35329 7.66659ZM19.9398 19.8146H16.3873V14.0954C16.3873 12.6592 15.8733 11.6788 14.5879 11.6788C13.6067 11.6788 13.0223 12.3398 12.7648 12.9785C12.6711 13.2064 12.6482 13.5253 12.6482 13.8451V19.8142H9.09569C9.09569 19.8142 9.14233 10.1279 9.09569 9.12615H12.6482V10.639C13.1203 9.91089 13.9645 8.87393 15.8505 8.87393C18.1876 8.87393 19.9403 10.402 19.9403 13.6852V19.8146H19.9398Z"
                                    fill="#777777" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_56_2201">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="footer__us--social--element">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="footer__us--social--element--icon">
                        <g id="5282548_play_player_video_youtube_youtuble logo_icon 1" clip-path="url(#clip0_56_2199)">
                            <path id="Vector" fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM20.085 8.23266C19.8909 7.50661 19.3192 6.93483 18.5931 6.74081C17.277 6.38812 12 6.38812 12 6.38812C12 6.38812 6.72305 6.38812 5.40689 6.74081C4.68098 6.93483 4.10911 7.50661 3.91505 8.23266C3.5625 9.54867 3.5625 12.2945 3.5625 12.2945C3.5625 12.2945 3.5625 15.0402 3.91505 16.3561C4.10911 17.0821 4.68098 17.6541 5.40689 17.8481C6.72305 18.2006 12 18.2006 12 18.2006C12 18.2006 17.277 18.2006 18.5931 17.8481C19.3192 17.6541 19.8909 17.0821 20.085 16.3561C20.4375 15.0402 20.4375 12.2945 20.4375 12.2945C20.4375 12.2945 20.4375 9.54867 20.085 8.23266ZM10.3124 14.8258V9.76317L14.6966 12.2945L10.3124 14.8258Z"
                                fill="#777777" />
                        </g>
                        <defs>
                            <clipPath id="clip0_56_2199">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

        </div>

        <div class="footer__services">
            <h4 class="footer__services--title">Services.</h4>
            <div class="footer__services--elements">
                <p class="footer__services--elements--element">+ Resturent & Bar</p>
                <p class="footer__services--elements--element">+ Swimming Pool</p>
                <p class="footer__services--elements--element">+ Wellness & Spa</p>
                <p class="footer__services--elements--element">+ Restaurant</p>
                <p class="footer__services--elements--element">+ Conference Room</p>
                <p class="footer__services--elements--element">+ Coctail Party House</p>
                <p class="footer__services--elements--element">+ Gaming Zone</p>
                <p class="footer__services--elements--element">+ Marrige Party</p>
                <p class="footer__services--elements--element">+ Party Planning</p>
                <p class="footer__services--elements--element">+ Tour Consultancy</p>
            </div>
        </div>
        <div class="footer__contact">
            <h4 class="footer__contact--title">Contact Us.</h4>
            <div class="footer__contact--element">
                <img src="./media/footerPhone.png" alt="phone icon" class="footer__contact--element-icon">
                <p class="footer__contact--element--data">
                    <span class="footer__contact--element--data--key"> Phone Number</span>
                    <br />
                    <span class="footer__contact--element--data--value">+34 620 46 82 40</span>
                </p>
            </div>
            <div class="footer__contact--element">
                <img src="./media/email.png" alt="email icon" class="footer__contact--element-icon">
                <p class="footer__contact--element--data">
                    <span class="footer__contact--element--data--key">Email Address</span>
                    <br />
                    <span class="footer__contact--element--data--value">levitorres66@gmail.com</span>
                </p>
            </div>
            <div class="footer__contact--element">
                <img src="./media/location.png" alt="location icon" class="footer__contact--element-icon">
                <p class="footer__contact--element--data">
                    <span class="footer__contact--element--data--key"> Office Address</span>
                    <br />
                    <span class="footer__contact--element--data--value">Princesa 31, planta 2 (28008 Madrid)</span>
                </p>
            </div>
        </div>
    </footer>
    <div class="footer__end">
        <p class="footer__end--copy">
            Copyright By Manuel Leví Torres Vicente - 2023
        </p>
        <p class="footer__end--terms">
            Terms of use | Privacy Environmental policy
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
</body>

</html>