
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="./css/style.css">
    <title>Contact</title>
</head>
<body>
    <main class="main__contact">
        <div class="main__contact--intro">
            <p class="main__contact--intro--slogan">THE ULTIMATE LUXURY</p>
            <h1 class="main__contact--intro--title">New Details</h1>
            <p class="main__contact--intro--divider">Home | <span class="main__details--intro--divider--gold">Blog</span></p>
        </div>

        <div class="main__contact--forms">
            <div class="main__contact--forms--element">
                    <img src="./media/location.png" alt="location icon" class="main__contact--forms--element--icon">
                    <p class="main__contact--forms--element--number">01</p>
                    <div class="main__contact--forms--element--data">
                        <p class="main__contact--forms--element--data--key">Hotel Address</p>
                        <p class="main__contact--forms--element--data--value">Princesa 31, planta 2 (28008 Madrid)</p>
                    </div>
            </div>
            <div class="main__contact--forms--element">   
                <img src="./media/footerPhone.png" alt="footer icon" class="main__contact--forms--element--icon">
                <p class="main__contact--forms--element--number">02</p>
                <div class="main__contact--forms--element--data">
                    <p class="main__contact--forms--element--data--key">Phone Number</p>
                    <p class="main__contact--forms--element--data--value">+34 620 46 82 40</p>
                </div>
            </div>
            <div class="main__contact--forms--element">
                <img src="./media/email.png" alt="email icon" class="main__contact--forms--element--icon">
                <p class="main__contact--forms--element--number">03</p>
                <div class="main__contact--forms--element--data">
                    <p class="main__contact--forms--element--data--key">Email</p>
                    <p class="main__contact--forms--element--data--value">levitorres66@gmail.com</p>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1327030933285!2d-3.7172707234691624!3d40.42806035494868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1700066841065!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="main__contact--map"></iframe>

        <form class="main__contact--data">
            <input type="text" class="main__contact--data--element " placeholder="Your full name" />
            <input type="text" class="main__contact--data--element" placeholder="Add phone number" />
            <input type="text" class="main__contact--data--element" placeholder="Enter email address" />
            <input type="text" class="main__contact--data--element" placeholder="Enter subject" />
            <textarea id="" class="main__contact--data--element--textarea" cols="30" rows="10" placeholder="Enter message"></textarea>
            <button class="main__contact--data--send" id="formContact">SEND</button>
        </form>
    </main>
    </body>
</html>