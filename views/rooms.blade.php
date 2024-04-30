@extends('layouts.app') 
    @section('content')
    <main class="main__rooms">
        <div class="main__rooms--intro">
            <p class="main__rooms--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__rooms--intro--title">ULTIMATE ROOM</h1>
            <p class="main__rooms--intro--divider">Home | <span class="main__rooms--intro--divider--gold">Rooms</span></p>
        </div>

        <div class="main__rooms--elements">
            @foreach ($rooms as $room)
            <div class="main__rooms--elements--element" onclick="location.href='./roomDetails.php'">
                <img src="{{$room['photo']}}" alt="a room of hotel" class="main__rooms--elements--element--image">
                <div class="main__rooms--elements--element--info">
                    <div class="main__rooms--elements--element--info--icons">
                        <img src="./media/iconBed.png" alt="a bed icon" />
                        <img src="./media/iconWifi.png" alt="a wifi icon" />
                        <img src="./media/iconCar.png" alt="a car icon" />
                        <img src="./media/iconCold.png" alt="a cold icon" />
                        <img src="./media/iconGym.png" alt="a gym icon" />
                        <img src="./media/iconNoSmoke.png" alt="a no smoke icon" />
                        <img src="./media/iconCocktail.png" alt="a cocktail icon" />
                    </div>
                    <h3 class="main__rooms--elements--element--info--title">{{ $room['type'] }}</h3>
                    <p class="main__rooms--elements--element--info--desc">{{ $room['description'] }}</p>
                </div>
                <div class="main__rooms--elements--element--booking">
                    <p class="main__rooms--elements--element--booking--price">${{ $room['price'] }}/Night</p>
                    <p class="main__rooms--elements--element--booking--book">Book now</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    @endsection