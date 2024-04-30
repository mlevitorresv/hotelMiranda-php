@extends('layouts.app')
    @section('content')
    <main class="main__offers">
        <div class="main__offers--intro">
            <p class="main__offers--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__offers--intro--title">Our Offers</h1>
            <p class="main__offers--intro--divider">Home | <span class="main__details--intro--divider--gold">Offers</span></p>
        </div>

        @foreach ($rooms as $room)
        <div class="main__offers--elements">
            <div class="main__offers--elements--room">
                <img src="{{ $room['photo']}}" alt="a room of hotel" class="main__offers--elements--room--image">
                <div class="main__offers--elements--room--prices">
                    <p class="main__offers--elements--room--prices--price-old">{{ $room['price'] }}<span class="main__offers--elements--room--prices--price-old--night">/Night</span></p>
                    @php
                        $discounteredPrice = $room['price'] - ($room['price'] * ($room['discount'] / 100));
                    @endphp
                    <p class="main__offers--elements--room--prices--price-new">${{ $discounteredPrice }}<span class="main__offers--elements--room--prices--price-new--night">/Night</span></p>
                </div>
                <div class="main__offers--elements--room--data">
                    <p class="main__offers--elements--room--data--info">{{ $room['bed'] }}</p>
                    <h1 class="main__offers--elements--room--data--title">{{ $room['type'] }}</h1>
                    <hr class="main__offers--elements--room--data--separator">
                    <div class="main__offers--elements--room--data--content">
                        <p class="main__offers--elements--room--data--content--desc">
                            {{ $room['description'] }}
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
                                
                    <button class="main__offers--elements--room--data--bt" onclick="location.href='./roomDetails.php'">BOOK NOW</button>
                </div>
            </div>
        </div>
        @endforeach
    </main>
    @endsection