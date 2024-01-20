<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="../../image/logo (1).png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e8ae625125.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <!-- ---------------bootstrap cdn---------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div class="header__content">
            <div class="logo">
                <a href="../index.php"><img src="../image/logoimg.png" alt=""></a>
            </div>
            <div class="navbar">
                <nav>
                    <ul class="" id="navBar">
                        <i class="fa-solid fa-circle-xmark" onclick="closeMenu()"></i>
                        <li><a href="../index.php"> Home</a></li>
                        <li><a href="liveCacino.php">Live Cacino</a> </li>
                        <li><a href="loto.php">Loto</a> </li>
                        <li><a href="keno.php">Keno</a> </li>
                        <li><a href="gameStot.php">Game</a> </li>
                        <li><a href="news.php">Sport News</a> </li>
                        <li><a href="about.php">About Us</a></li>

                    </ul>
                    <i onclick="openMenu()" class="fa-solid fa-bars" id="toggleIcon"></i>
                </nav>
            </div>
            <div class="search__option">
                <div class="serch_opution_input">
                    <input type="search" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <button class="contact__us__btn"><span> </span><a class="text-white" href="contactUs.php">Contact</a> </button>
            </div>
        </div>
    </header>
    <!-- icon fixed side bar -->
    <div class="icon_side_bar_icon">
        <div class="facebook_icon">
            <div class="icon__block">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <span>FACEBOOK</span>
        </div>
        <div class="jion__name">
            <div class="icon__block">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <span>JION NOW</span>
        </div>
        <div class="phone__icon">
            <div class="icon__block">
                <i class="fa-solid fa-phone"></i>
            </div>
            <span>011 558 927</span>

        </div>
        <div class="telegram__icon">
            <div class="icon__block">
                <i class="fa-brands fa-telegram"></i>
            </div>
            <span>TELEGRAM</span>
        </div>
        <div class="Login__icon">
            <div class="icon__block">
                <i class="fa-solid fa-right-to-bracket"></i>
            </div>
            <span>LOGIN NOW</span>
        </div>
    </div>
    <!-- icon fixed side bar -->
    <!--  screen page -->
    <div class="home-page-screen">

        <!-- here content or somthing.........  -->