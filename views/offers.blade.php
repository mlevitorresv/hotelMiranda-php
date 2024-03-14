
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="./css/style.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <title>Offers</title>
</head>
<body>
    <header class="header">
        <div class="header__all">
            <div class="header__all--left">
                <img src="./media/burgerIcon.png" alt="menu icon" class="header__all--left--burger" id="burgerIcon"/>
                <img src="./media/crossBurger.png" alt="cross icon" class="header__all--left--cross" id="crossBurgerIcon"/>                
                <a href="./index.html" class="header__all--left--logo">
                    <h1 class="header__all--left--logo--H">H</h1>
                    <h1 class="header__all--left--logo--name">Hotel<br />Miranda</h1>
                </a>
            </div>

            <div class="header__all--menu" id="menu">
                <ul class="header__all--menu--items">
                    <a href="./about.html" class="header__all--menu--items--link"><li class="header__all--menu--items--about">About Us</li></a>
                    <a href="./rooms.html" class="header__all--menu--items--link"><li class="header__all--menu--items--rooms">Rooms</li></a>
                    <a href="./offers.html" class="header__all--menu--items--link"><li class="header__all--menu--items--offers">Offers</li></a>
                    <a href="./contact.html" class="header__all--menu--items--link"><li class="header__all--menu--items--contact">Contact</li></a>
                </ul>
            </div>

            <div class="header__all--right">
                <img src="./media/personIcon.png" alt="person icon" class="header__all--right--person" />
                <img src="./media/lensIcon.png" alt="lens icon"  class="header__all--right--lens"/>
            </div>
        </div>
    </header>


    <main class="main__offers">
        <div class="main__offers--intro">
            <p class="main__offers--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__offers--intro--title">Our Offers</h1>
            <p class="main__offers--intro--divider">Home | <span class="main__details--intro--divider--gold">Offers</span></p>
        </div>

        <div class="main__offers--elements">
            <div class="main__offers--elements--room">
                <img src="./media/room.jpg" alt="a room of hotel" class="main__offers--elements--room--image">
                <div class="main__offers--elements--room--prices">
                    <p class="main__offers--elements--room--prices--price-old">$500<span class="main__offers--elements--room--prices--price-old--night">/Night</span></p>
                    <p class="main__offers--elements--room--prices--price-new">$350<span class="main__offers--elements--room--prices--price-new--night">/Night</span></p>
                </div>
                <div class="main__offers--elements--room--data">
                    <p class="main__offers--elements--room--data--info">DOUBLE BED</p>
                    <h1 class="main__offers--elements--room--data--title">Luxury Double Bed</h1>
                    <hr class="main__offers--elements--room--data--separator">
                    <div class="main__offers--elements--room--data--content">
                        <p class="main__offers--elements--room--data--content--desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="main__offers--elements--room--data--content--amenities">
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/airConditioner.svg" alt="air conditioner svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Air conditioner
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/smallBreakfast.svg" alt="breakfast svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Breakfast
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/cleaning.svg" alt="cleaning svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Cleaning
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/grocery.svg" alt="grocery svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Grocery
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shopNear.svg" alt="shop svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shop Near
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/wifi.svg" alt="wifi svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                High speed WiFi
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/kitchen.svg" alt="kitchen svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Kitchen
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shower.svg" alt="shower svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shower
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/singleBed.svg" alt="a bed svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Single bed
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/towels.svg" alt="towel svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Towels
                            </p>
                        </div>        
                    </div>
                                
                    <button class="main__offers--elements--room--data--bt" onclick="location.href='./roomDetails.html'">BOOK NOW</button>
                </div>
            </div>
        </div>
        <div class="main__offers--elements">
            <div class="main__offers--elements--room">
                <img src="./media/room.jpg" alt="a room of hotel" class="main__offers--elements--room--image">
                <div class="main__offers--elements--room--prices">
                    <p class="main__offers--elements--room--prices--price-old">$500<span class="main__offers--elements--room--prices--price-old--night">/Night</span></p>
                    <p class="main__offers--elements--room--prices--price-new">$350<span class="main__offers--elements--room--prices--price-new--night">/Night</span></p>
                </div>
                <div class="main__offers--elements--room--data">
                    <p class="main__offers--elements--room--data--info">DOUBLE BED</p>
                    <h1 class="main__offers--elements--room--data--title">Luxury Double Bed</h1>
                    <hr class="main__offers--elements--room--data--separator">
                    <div class="main__offers--elements--room--data--content">
                        <p class="main__offers--elements--room--data--content--desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="main__offers--elements--room--data--content--amenities">
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/airConditioner.svg" alt="air conditioner svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Air conditioner
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/smallBreakfast.svg" alt="breakfast svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Breakfast
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/cleaning.svg" alt="cleaning svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Cleaning
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/grocery.svg" alt="grocery svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Grocery
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shopNear.svg" alt="shop svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shop Near
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/wifi.svg" alt="wifi svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                High speed WiFi
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/kitchen.svg" alt="kitchen svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Kitchen
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shower.svg" alt="shower svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shower
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/singleBed.svg" alt="a bed svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Single bed
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/towels.svg" alt="towel svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Towels
                            </p>
                        </div>        
                    </div>
                                
                    <button class="main__offers--elements--room--data--bt" onclick="location.href='./roomDetails.html'">BOOK NOW</button>
                </div>
            </div>
        </div>
        <div class="main__offers--elements">
            <div class="main__offers--elements--room">
                <img src="./media/room.jpg" alt="a room of hotel" class="main__offers--elements--room--image">
                <div class="main__offers--elements--room--prices">
                    <p class="main__offers--elements--room--prices--price-old">$500<span class="main__offers--elements--room--prices--price-old--night">/Night</span></p>
                    <p class="main__offers--elements--room--prices--price-new">$350<span class="main__offers--elements--room--prices--price-new--night">/Night</span></p>
                </div>
                <div class="main__offers--elements--room--data">
                    <p class="main__offers--elements--room--data--info">DOUBLE BED</p>
                    <h1 class="main__offers--elements--room--data--title">Luxury Double Bed</h1>
                    <hr class="main__offers--elements--room--data--separator">
                    <div class="main__offers--elements--room--data--content">
                        <p class="main__offers--elements--room--data--content--desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="main__offers--elements--room--data--content--amenities">
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/airConditioner.svg" alt="air conditioner svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Air conditioner
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/smallBreakfast.svg" alt="breakfast svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Breakfast
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/cleaning.svg" alt="cleaning svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Cleaning
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/grocery.svg" alt="grocery svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Grocery
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shopNear.svg" alt="shop svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shop Near
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/wifi.svg" alt="wifi svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                High speed WiFi
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/kitchen.svg" alt="kitchen svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Kitchen
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shower.svg" alt="shower svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shower
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/singleBed.svg" alt="a bed svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Single bed
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/towels.svg" alt="towel svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Towels
                            </p>
                        </div>        
                    </div>
                                
                    <button class="main__offers--elements--room--data--bt" onclick="location.href='./roomDetails.html'">BOOK NOW</button>
                </div>
            </div>
        </div>
        <div class="main__offers--elements">
            <div class="main__offers--elements--room">
                <img src="./media/room.jpg" alt="a room of hotel" class="main__offers--elements--room--image">
                <div class="main__offers--elements--room--prices">
                    <p class="main__offers--elements--room--prices--price-old">$500<span class="main__offers--elements--room--prices--price-old--night">/Night</span></p>
                    <p class="main__offers--elements--room--prices--price-new">$350<span class="main__offers--elements--room--prices--price-new--night">/Night</span></p>
                </div>
                <div class="main__offers--elements--room--data">
                    <p class="main__offers--elements--room--data--info">DOUBLE BED</p>
                    <h1 class="main__offers--elements--room--data--title">Luxury Double Bed</h1>
                    <hr class="main__offers--elements--room--data--separator">
                    <div class="main__offers--elements--room--data--content">
                        <p class="main__offers--elements--room--data--content--desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="main__offers--elements--room--data--content--amenities">
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/airConditioner.svg" alt="air conditioner svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Air conditioner
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/smallBreakfast.svg" alt="breakfast svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Breakfast
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/cleaning.svg" alt="cleaning svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Cleaning
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/grocery.svg" alt="grocery svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Grocery
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shopNear.svg" alt="shop svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shop Near
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/wifi.svg" alt="wifi svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                High speed WiFi
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/kitchen.svg" alt="kitchen svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Kitchen
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/shower.svg" alt="shower svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Shower
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/singleBed.svg" alt="a bed svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Single bed
                            </p>
                            <p class="main__offers--elements--room--data--content--amenities--element">
                                <img src="./media/towels.svg" alt="towel svg" class="main__offers--elements--room--data--content--amenities--element--img">
                                Towels
                            </p>
                        </div>        
                    </div>
                                
                    <button class="main__offers--elements--room--data--bt" onclick="location.href='./roomDetails.html'">BOOK NOW</button>
                </div>
            </div>
        </div>
        
            
        <div class="main__offers--popular">
            <p class="main__offers--popular--info">POPULAR LIST</p>
            <h1 class="main__offers--popular--title">Popular Rooms</h1>
            <div class="main__offers--popular--room">
                <div class="main__offers--popular--room--slider">
                    <div class="swiper main__offers--popular--room--slider--swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper main__offers--popular--room--slider--swiper--wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide main__offers--popular--room--slider--swiper--wrapper--slide"><img src="./media/gym.jpg" alt="gym of hotel" class="slide main__offers--popular--room--slider--swiper--wrapper--slide--img" /></div>
                          <div class="swiper-slide main__offers--popular--room--slider--swiper--wrapper--slide"><img src="./media/restaurant.jpg" alt="restaurant of hotel" class="slide main__offers--popular--room--slider--swiper--wrapper--slide--img" /></div>
                          <div class="swiper-slide main__offers--popular--room--slider--swiper--wrapper--slide"><img src="./media/room.jpg" alt="room of hotel" class="slide main__offers--popular--room--slider--swiper--wrapper--slide--img" /></div>
                        </div>
            
                        <div class="swiper-button-prev main__details--room--related--element--slider--swiper--button"></div>
                        <div class="swiper-button-next main__details--room--related--element--slider--swiper--button"></div>
                    </div>
                </div>
                <div class="main__offers--popular--room--icons">
                    <img src="./media/iconBed.png" alt="a bed icon" />
                    <img src="./media/iconWifi.png" alt="a wifi icon" />
                    <img src="./media/iconCar.png" alt="a car icon" />
                    <img src="./media/iconCold.png" alt="a cold icon" />
                    <img src="./media/iconGym.png" alt="a gym icon" />
                    <img src="./media/iconNoSmoke.png" alt="a no smoke icon" />
                    <img src="./media/iconCocktail.png" alt="a cocktail icon" />
                </div>
                <h3 class="main__offers--popular--room--title">Minimal Duplex Room</h3>
                <p class="main__offers--popular--room--desc">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <p class="main__offers--popular--room--price">$345/Night</p>
                <p class="main__offers--popular--room--book">Book now</p>
            </div>
        </div>
    </main>


    <footer class="footer">
        <div class="footer__us">

            <div class="footer__us--logo">
                <p class="footer__us--logo--H">H</p>
                <p class="footer__us--logo--name"><span class="footer__us--logo--name--strong">HOTEL</span><br />MIRANDA</p>
            </div>
            <p class="footer__us--desc">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="footer__us--social">
                <div class="footer__us--social--element">
                    <img src="./media/facebook.svg" alt="facebook  icon" class="footer__us--social--element--icon">
                </div>
                <div class="footer__us--social--element">
                    <img src="./media/twitter.svg" alt="twitter icon" class="footer__us--social--element--icon">
                </div>
                <div class="footer__us--social--element">
                    <img src="./media/behance.svg" alt="behance icon" class="footer__us--social--element--icon">
                </div>
                <div class="footer__us--social--element">
                    <img src="./media/linkedin.svg" alt="linkedin icon" class="footer__us--social--element--icon">
                </div>
                <div class="footer__us--social--element">
                    <img src="./media/yt.svg" alt="youtube icon" class="footer__us--social--element--icon">
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