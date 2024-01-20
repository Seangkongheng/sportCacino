<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- ------------------------fontawesom-------------------- -->
    <script src="https://kit.fontawesome.com/e8ae625125.js" crossorigin="anonymous"></script>
    <!-- ---------------style css---------------------- -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- ---------------bootstrap cdn---------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header>
        <div class="header__content">
            <div class="logo">
              <a href="index.php">  <img src="image/logoimg.png" alt=""></a>
            </div>
            <div class="navbar">
                <nav>
                    <ul class="" id="navBar">
                        <i class="fa-solid fa-circle-xmark" onclick="closeMenu()"></i>
                        <li><a href="index.php"> Home</a></li>
                        <li><a href="./screen page/liveCacino.php">Live Cacino</a> </li>
                        <li><a href="./screen page/loto.php">Loto</a> </li>
                        <li><a href="./screen page/keno.php">Keno</a> </li>
                        <li><a href="./screen page/gameStot.php">Game</a> </li>
                        <li><a href="./screen page/news.php">Sport News</a> </li>
                        <li><a href="./screen page/about.php">About Us</a></li>
                    </ul>
                    <i onclick="openMenu()" class="fa-solid fa-bars" id="toggleIcon"></i>
                </nav>
            </div>
            <div class="search__option">
                <div class="serch_opution_input">
                    <input type="search" placeholder="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <button class="contact__us__btn"><span> </span><a class="text-white" href="./screen page/contactUs.php">Contact</a> </button>
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
    <!-- home screen -->
    <div class="home-page-screen">

        <!-- content slide -->
        <div class="slide-content ">
            <div class="slide-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <!-- img-slide -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/cacino3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/cacino2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/casino-facebook-cover__front.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- img-slide end -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- game content -->
        <div class="game-content">
            <h3 class="relate__game text-center mt-5 text-white">
                OUR RATED GAMES
            </h3>
            <P class="text-center text__ralate">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore repudiandae a debitis provident error iure! Natus tempore quisquam eos, placeat quis voluptas soluta eaque mollitia amet vero recusandae nisi doloribus!</P>
            <div class="block-game">
                <!-- game box 1 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/Baccarat.jpg" alt="">
                </div>
                <!-- game box 2 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/RCB-Fish.jpg" alt="">
                </div>
                <!-- game box 3 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/Dragon.jpg" alt="">
                </div>
                <!-- game box 4 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/Sicbo.jpg" alt="">
                </div>
                <!-- game box 5 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/Xoc Dia.jpg" alt="">
                </div>
                <!-- game box 6 -->
                <div class="game-box">
                    <div class="button-jion">
                        <button class="btn-play">PLAY NOW</button>
                        <button class="btn-play">ROLE PLAY</button>
                    </div>
                    <img src="image/Roulette.jpg" alt="">
                </div>

            </div>
            <!-- --------button see more -------------- -->
            <div class="button__see_more_game mt-5 text-center">
                <button><span></span><a href="./screen page/liveCacino.php" class="text-decoration-none text-white">See more </a></button>
            </div>
            <!-- --------button see more end -------------- -->
        </div>
        <!-- list of foodball -->
        <div class="table-foodball-list">
            <h1>FOOTBALL FIXTURES THIS WEEKEND</h1>
        </div>
    </div>
    <!--end home screen -->
    <!-- footer content -->
    <div class="footer-content mt-5">
        <div class="all__blog__footer">
            <div class="socail__icon__footer">
                <p class="text-info">Socail Media</p>
                <p>Copyright2024</p>
                <p>All rights reserve</p>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </div>
            <div class="cacino__game__footer">
                <p class="text-info">Cacino Game</p>
                <li><a href="../index.php"> Home</a></li>
                <li><a href="./screen page/liveCacino.php">Live Cacino</a> </li>
                <li><a href="./screen page/sport.php">Sport</a> </li>
                <li><a href="./screen page/loto.php">Loto</a> </li>
                <li><a href="./screen page/keno.php">Keno</a> </li>
                <li><a href="./screen page/gameStot.php">Game slot</a> </li>
                <li><a href="./screen page/news.php"> News</a> </li>
            </div>
            <div class="about__cacino__footer">
                <p class="text-info">About Cacino</p>
                <li><a href="../index.php">About Us</a></li>
                <li><a href="./screen page/liveCacino.php">Games</a> </li>
                <li><a href="./screen page/sport.php">FAQ</a> </li>
                <li><a href="./screen page/loto.php">News</a> </li>
                <li><a href="./screen page/keno.php">Sport</a> </li>
                <li><a href="./screen page/gameStot.php">Contact</a> </li>
            </div>
            <div class="decription__footer">
                <p class="text-info">About Website</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iste, ducimus, sapiente, debitis commodi in modi vero quod ipsum quaerat recusandae vel nulla. Ullam delectus fugit quo suscipit in ea.</p>
            </div>
        </div>
    </div>

    <!--end footer content -->
    <script src="./js/main.js"></script>
</body>

</html>