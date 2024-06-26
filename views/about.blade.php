@extends('layouts.app') 
    @section('content')
    <main class="main__us">
        <div class="main__us--intro">
            <p class="main__us--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__us--intro--title">About Us</h1>
            <p class="main__us--intro--divider">Home | <span class="main__us--intro--divider--gold">About</span></p>
        </div>
        <div class="main__us--video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Bu3Doe45lcU?si=LAQC-6MOY4JAexwE&amp;clip=UgkxtV5CTXwdq5Q9yDxTq9jSjhMjSF8GSJfH&amp;clipt=EKjDARj4yQQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="main__us--video--repro"></iframe>
        </div>

        <div class="main__us--customer">
            <h3 class="main__us--customer--title">
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </h3>
            <div class="main__us--customer--adventages">
                <div class="main__us--customer--adventages--adv">
                    <img src="./media/Breakfast.svg" alt="a plane svg">
                </div>
                <div class="main__us--customer--adventages--adv">
                    <img src="./media/plane.svg" alt="a plane svg">
                </div>
                <div class="main__us--customer--adventages--adv">
                    <img src="./media/cityGuide.svg" alt="a plane svg">
                </div>
                <div class="main__us--customer--adventages--adv">
                    <img src="./media/luxuryRoom.svg" alt="a plane svg">
                </div>
            </div>
        </div>

        <div class="main__us--restaurant">
            <img src="./media/restaurant.jpg" alt="a restaurant" class="main__us--restaurant--image">
            <div class="main__us--restaurant--text">
                <p class="main__us--restaurant--text--info">RESTAURANT</p>
                <h1 class="main__us--restaurant--text--title">Get Restaurant Facilities & Many Other More</h1>
                <p class="main__us--restaurant--text--desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <button class="main__us--restaurant--text--bt" onclick="location.href='./index.php'">TAKE A TOUR</button>
            </div>
            
        </div>

        <div class="main__us--facilities">
            <p class="main__us--facilities--info">FACILITIES</p>
            <h1 class="main__us--facilities--title">Core Features</h1>

            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">01</p>
                        <img src="./media/iconRating.png" alt="icon rating" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Have High Rating</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">02</p>
                        <img src="./media/clock.png" alt="clock icon" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Quiet Hours</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">03</p>
                        <img src="./media/location.png" alt="location icon" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Best Location</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">04</p>
                        <img src="./media/clockCross.png" alt="clock with cross icon" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Free Cancellation</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">05</p>
                        <img src="./media/payment.png" alt="payment icon" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Payment Options</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                    <div class="swiper-slide main__us--facilities--content">
                        <p class="main__us--facilities--content--rating">06</p>
                        <img src="./media/certificate.png" alt="certificate icon" class="main__us--facilities--content--rating--icon">
                        <h4 class="main__us--facilities--content--subtitle">Special Offers</h4>
                        <p class="main__us--facilities--content--desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="main__us--facts">
            <p class="main__us--facts--info">COUNTER</p>
            <h3 class="main__us--facts--title">Some Fun Facts</h3>
            <div class="main__us--facts--elements">
                <div class="main__us--facts--elements--element">
                    <img src="./media/happyUser.svg" alt="a happy user svg" class="main__us--facts--elements--element--image">
                    <p class="main__us--facts--elements--element--data">
                        <span class="main__us--facts--elements--element--data--key"> 8000</span>
                        <br />
                        <span class="main__us--facts--elements--element--data--value">Happy Users</span>
                    </p>
                    <img src="./media/arrow.svg" alt="an arrow svg" class="main__us--facts--elements--element--arrow">
                </div>
                <div class="main__us--facts--elements--element">
                    <img src="./media/handRating.svg" alt="a hand rating svg" class="main__us--facts--elements--element--image">
                    <p class="main__us--facts--elements--element--data">
                        <span class="main__us--facts--elements--element--data--key">10M</span>
                        <br />
                        <span class="main__us--facts--elements--element--data--value">Reviews & Appriciate</span>
                    </p>
                    <img src="./media/arrow.svg" alt="an arrow svg" class="main__us--facts--element--elements--arrow">
                </div>
                <div class="main__us--facts--elements--element">
                    <img src="./media/worldLocation.svg" alt="a world svg" class="main__us--facts--elements--element--image">
                    <p class="main__us--facts--elements--element--data">
                        <span class="main__us--facts--elements--element--data--key">100</span>
                        <br />
                        <span class="main__us--facts--elements--element--data--value">Country Coverage</span>
                    </p>
                    <img src="./media/arrow.svg" alt="an arrow svg" class="main__us--facts--elements--element--arrow">
                </div>
            </div>
            
            <div class="main__us--facts--slider">
                <div class="swiper main__us--facts--slider--swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper main__us--facts--slider--swiper--wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide main__us--facts--slider--swiper--wrapper--slide"><img src="./media/gym.jpg" alt="gym of hotel" class="slide main__us--facts--slider--swiper--wrapper--slide--img" /></div>
                      <div class="swiper-slide main__us--facts--slider--swiper--wrapper--slide"><img src="./media/restaurant.jpg" alt="restaurant of hotel" class="slide main__us--facts--slider--swiper--wrapper--slide--img" /></div>
                    </div>
        
                    <div class="swiper-pagination main__slider--swiper--pagination"></div>
                </div>
            </div>
        </div>
    </main>
    @endsection