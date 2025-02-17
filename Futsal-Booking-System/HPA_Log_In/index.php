<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page after login</title>
    <link rel="stylesheet" href="style.css">
    <link href='' rel='stylesheet'>

</head>

<body>
<?php
    session_start();
    include("../assets/Login_navU.php");
    ?>
    <div class="container">
        <div class="slides-wrapper">
            <div class="slider">
                <img id="slide-1" src="../assets/1.png">
            </div>
        </div>
    </div>

    <div class="slider-nav">
        <a href="#slide-1"></a>
    </div>

    <div class="location">
        <h1>Futsal Courts</h1>

    </div>

    <div class="court-container">
        <div class="court-box">
            <div class="court">
                <div class="court-img">
                    <img id="court-1" src="../assets/1.png">
                    <h1 class="court-name">Kathmandu</h1>
                </div>
                <div class="court-img">
                    <img id="court-1" src="../assets/1.png">
                    <h1 class="court-name">Kathmandu</h1>
                </div>
                <div class="court-img">
                    <img id="court-1" src="../assets/1.png">
                    <h1 class="court-name">Kathmandu</h1>
                </div>
                <div class="court-img">
                    <img id="court-1" src="../assets/1.png">
                    <h1 class="court-name">Kathmandu</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="near-you-text">
        <h1>Futsal Court Near You</h1>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search.....">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </div>
    <div class="near-you-container">
        <div class="near-you-img">
            <img src="../assets/2.png">
        </div>
        <div class="near-you">
            <h1>Futsal Arena Gongabu</h1>
            <br />

            <p><i class='bx bxs-map' style="color: rgba(161, 254, 107, 1);"></i> Kathmandu</p>
            <p><i class='bx bxs-check-square' style="color: rgba(161, 254, 107, 1);"></i> Court Availability</p>
            <p><i class='bx bxs-check-circle' style="color: rgba(161, 254, 107, 1);"></i> Open 6 AM</p>
            <p><i class='bx bxs-x-circle' style="color: rgba(161, 254, 107, 1);"></i> Close 9 PM</p>
            <br />
            <p>4.1
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star-half' style="color: rgba(161, 254, 107, 1);"></i>
            </p>
            <br />
            <div class="near-you-btn">

                <a href="../Booking/Booking.php" class="button"><strong>Map <i class='bx bx-map'></i></strong></a>
                <a href="../Booking/Booking.php" class="button"><strong>Book Now</strong></a>
            </div>
        </div>
    </div>

    <div class="near-you-container-2">

        <div class="near-you-2">
            <h1>Futsal Arena Gongabu</h1>
            <br />

            <p><i class='bx bxs-map' style="color: rgba(161, 254, 107, 1);"></i> Kathmandu</p>
            <p><i class='bx bxs-check-square' style="color: rgba(161, 254, 107, 1);"></i> Court Availability</p>
            <p><i class='bx bxs-check-circle' style="color: rgba(161, 254, 107, 1);"></i> Open 6 AM</p>
            <p><i class='bx bxs-x-circle' style="color: rgba(161, 254, 107, 1);"></i> Close 9 PM</p>
            <br />
            <p>4.1
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star-half' style="color: rgba(161, 254, 107, 1);"></i>
            </p>
            <br />
            <div class="near-you-btn-2">

                <a href="../Booking/Booking.php" class="button"><strong>Map <i class='bx bx-map'></i></strong></a>
                <a href="../Booking/Booking.php" class="button"><strong>Book Now</strong></a>
            </div>
        </div>
        <div class="near-you-img">
            <img src="../assets/2.png">
        </div>
    </div>

    <div class="near-you-container">
        <div class="near-you-img">
            <img src="../assets/2.png">
        </div>
        <div class="near-you">
            <h1>Futsal Arena Gongabu</h1>
            <br />

            <p><i class='bx bxs-map' style="color: rgba(161, 254, 107, 1);"></i> Kathmandu</p>
            <p><i class='bx bxs-check-square' style="color: rgba(161, 254, 107, 1);"></i> Court Availability</p>
            <p><i class='bx bxs-check-circle' style="color: rgba(161, 254, 107, 1);"></i> Open 6 AM</p>
            <p><i class='bx bxs-x-circle' style="color: rgba(161, 254, 107, 1);"></i> Close 9 PM</p>
            <br />
            <p>4.1
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star' style="color: rgba(161, 254, 107, 1);"></i>
                <i class='bx bxs-star-half' style="color: rgba(161, 254, 107, 1);"></i>
            </p>
            <br />
            <div class="near-you-btn">

                <a href="../Booking/Booking.php" class="button"><strong>Map <i class='bx bx-map'></i></strong></a>
                <a href="../Booking/Booking.php" class="button"><strong>Book Now</strong></a>
            </div>
        </div>
    </div>
    <?php include("../assets/footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>