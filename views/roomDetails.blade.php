
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
    <title>Room Details</title>
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


    <main class="main__details">
        <div class="main__details--intro">
            <p class="main__details--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__details--intro--title">ULTIMATE ROOM</h1>
            <p class="main__details--intro--divider">Home | <span class="main__details--intro--divider--gold">Room Details</span></p>
        </div>       
        <div class="main__details--room">
            <div class="main__details--room--info">
                <p class="main__details--room--info--bed">DOUBLE BED</p>
                <h1 class="main__details--room--info--title">Luxury Double Bed</h1>
                <p class="main__details--room--info--price"><span class="main__details--room--info--price--number">$345</span><span class="main__details--room--info--price--night">/Night</span></p>
            </div>
            <img src="./media/luxury.jpg" alt="a luxury room" class="main__details--room--image">
            
            <div class="main__details--room--availability">
                <p class="main__details--room--availability--subtitle">
                    Check availability
                </p>
                <form class="main__details--room--availability--form">
                    <label for="arrivalDate" class="main__details--room--availability--form--text">Arrival Date</label>
                    <input type="date" name="arrivalDate" id="arrivalDate" class="main__details--room--availability--form--input" />
                    <label for="leDepartureDate"  class="main__details--room--availability--form--text">LeDeparture Date</label>
                    <input type="date" name="leDepartureDate" id="leDepartureDate"  class="main__details--room--availability--form--input" />
                    <label for="fullName"  class="main__details--room--availability--form--text">FullName</label>
                    <input type="text" name="fullName" id="fullName"  class="main__details--room--availability--form--input" />
                    <label for="email"  class="main__details--room--availability--form--text">Email</label>
                    <input type="text" name="email" id="email"  class="main__details--room--availability--form--input" />
                    <label for="phone"  class="main__details--room--availability--form--text">Phone</label>
                    <input type="number" name="phone" id="phone"  class="main__details--room--availability--form--input" />
                    <label for="message"  class="main__details--room--availability--form--text">Message(Special Request)</label>
                    <input type="text" name="message" id="message"  class="main__details--room--availability--form--input" />
                    <button type="submit" class="main__details--room--availability--form--bt">CHECK AVAILABILITY</button>
                </form>
            </div>
            <p class="main__details--room--desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </p>
        </div>
        <div class="main__details--room--amenities">
            <h3 class="main__details--room--amenities--title">Amenities</h3>
            <hr class="main__details--room--amenities--separator" />
            <div class="main__details--room--amenities--elements">
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/airConditioner.svg" alt="air conditioner svg" class="main__details--room--amenities--elements--element--img">
                    Air conditioner
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/smallBreakfast.svg" alt="breakfast svg" class="main__details--room--amenities--elements--element--img">
                    Breakfast
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/cleaning.svg" alt="cleaning svg" class="main__details--room--amenities--elements--element--img">
                    Cleaning
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/grocery.svg" alt="grocery svg" class="main__details--room--amenities--elements--element--img">
                    Grocery
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/shopNear.svg" alt="shop svg" class="main__details--room--amenities--elements--element--img">
                    Shop Near
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/onlineSupport.svg" alt="online support svg" class="main__details--room--amenities--elements--element--img">
                    24/7 Online Support
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/smartSecurity.svg" alt="Smart Security" class="main__details--room--amenities--elements--element--img">
                    Smart Security
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/wifi.svg" alt="wifi svg" class="main__details--room--amenities--elements--element--img">
                    High speed WiFi
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/kitchen.svg" alt="kitchen svg" class="main__details--room--amenities--elements--element--img">
                    Kitchen
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/shower.svg" alt="shower svg" class="main__details--room--amenities--elements--element--img">
                    Shower
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/singleBed.svg" alt="a bed svg" class="main__details--room--amenities--elements--element--img">
                    Single bed
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/towels.svg" alt="towel svg" class="main__details--room--amenities--elements--element--img">
                    Towels
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/strongLocker.svg" alt="a key svg" class="main__details--room--amenities--elements--element--img">
                    Strong Locker
                </p>
                <p class="main__details--room--amenities--elements--element">
                    <img src="./media/expertTeam.svg" alt="a person with laptop svg" class="main__details--room--amenities--elements--element--img">
                    Expert Team
                </p>
            </div>
        </div>
        <div class="main__details--room--person">
            <div class="main__details--room--person--face">
                <img src="./media/levi.jpeg" alt="a face img" class="main__details--room--person--face--img">
            </div>
            <img src="./media/tick.svg" alt="a tick svg" class="main__details--room--person--tick">
            <h3 class="main__details--room--person--name">Manuel L. Torres</h3>
            <p class="main__details--room--person--occupation">Desarrollador FullStack</p>
            <p class="main__details--room--person--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>

        <div class="main__details--room--cancellation">
            <h3 class="main__details--room--cancellation--title">
                Cancellation
            </h3>
            <hr class="main__details--room--cancellation--separator" />
            <p class="main__details--room--cancellation--desc">
                Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.
            </p>
        </div>

        <div class="main__details--room--related">
            <h3 class="main__details--room--related--title">Related Rooms</h3>
            <hr class="main__details--room--related--separator" />

            <div class="main__details--room--related--element">
                <div class="main__details--room--related--element--slider">
                    <div class="swiper main__details--room--related--element--slider--swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper main__details--room--related--element--slider--swiper--wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide main__details--room--related--element--slider--swiper--wrapper--slide"><img src="./media/gym.jpg" alt="gym of hotel" class="slide main__details--room--related--element--slider--swiper--wrapper--slide--img" /></div>
                          <div class="swiper-slide main__details--room--related--element--slider--swiper--wrapper--slide"><img src="./media/restaurant.jpg" alt="restaurant of hotel" class="slide main__details--room--related--element--slider--swiper--wrapper--slide--img" /></div>
                          <div class="swiper-slide main__details--room--related--element--slider--swiper--wrapper--slide"><img src="./media/room.jpg" alt="room of hotel" class="slide main__details--room--related--element--slider--swiper--wrapper--slide--img" /></div>
                        </div>
                        <div class="swiper-button-prev main__details--room--related--element--slider--swiper--button"></div>
                        <div class="swiper-button-next main__details--room--related--element--slider--swiper--button"></div>
                    </div>
                </div>
                <div class="main__details--room--related--element--icons">
                    <img src="./media/iconBed.png" alt="a bed icon" />
                    <img src="./media/iconWifi.png" alt="a wifi icon" />
                    <img src="./media/iconCar.png" alt="a car icon" />
                    <img src="./media/iconCold.png" alt="a cold icon" />
                    <img src="./media/iconGym.png" alt="a gym icon" />
                    <img src="./media/iconNoSmoke.png" alt="a no smoke icon" />
                    <img src="./media/iconCocktail.png" alt="a cocktail icon" />
                </div>
                <h3 class="main__details--room--related--element--title">Minimal Duplex Room</h3>
                <p class="main__details--room--related--element--desc">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <p class="main__details--room--related--element--price">$345/Night</p>
                <p class="main__details--room--related--element--book">Book now</p>
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