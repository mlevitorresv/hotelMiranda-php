@extends('layouts.app') 
    @section('content')
    <main class="main__details">
        <div class="main__details--intro">
            <p class="main__details--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__details--intro--title">ULTIMATE ROOM</h1>
            <p class="main__details--intro--divider">Home | <span class="main__details--intro--divider--gold">Room Details</span></p>
        </div>       
        <div class="main__details--room">
            <div class="main__details--room--info">
                <p class="main__details--room--info--bed">{{ $room['type']}}</p>
                <h1 class="main__details--room--info--title">{{ $room['bed']}}</h1>
                <p class="main__details--room--info--price"><span class="main__details--room--info--price--number">${{ $room['price']}}</span><span class="main__details--room--info--price--night">/Night</span></p>
            </div>
            <img src="{{ $room['photo']}}" alt="a luxury room" class="main__details--room--image">
            
            <div class="main__details--room--availability">
                <p class="main__details--room--availability--subtitle">
                    Check availability
                </p>
                <form class="main__details--room--availability--form" method="POST" action="../roomDetails.php">
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
                    <input type="hidden" name="room" id="room" value="{{ $room['id'] }}" />
                    <button type="submit" class="main__details--room--availability--form--bt">CHECK AVAILABILITY</button>
                </form>
            </div>
            <p class="main__details--room--desc">
            {{ $room['description']}}
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
    @endsection