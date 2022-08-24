<?php include_once 'includes/dbh.inc.php' ?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en-US" class="background-100-e">

<!--    head section                -->

<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Pastor Anderson Sermons" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="fwbc,kjv,1611,censored,censorship,sanderson1611,sanderson,steven,anderson,pastor,faithful,word,faithful word,osas,kjvo,grace,bible,jesus,christ,banned,preaching,ban,truth,king,james,post,trib,pre,wrath,creation,soul,winning,independent,fundemental,ifb,nifb,red,hot,fire,breathing,leather,lung,uncensored" />
    <meta property="og:locale" content="en_US" />
    <meta property=”og:type” content=”article” />
    <meta property="og:title" content="Pastor Anderson Sermons" />
    <meta property="og:description" content="Pastor Anderson Sermons" />
    <meta property="og:url" content="http://www.pastorandersonsermons.allthepreaching.com/dev/index.php" />
    <meta property="og:image" content="https://www.pastorandersonsermons.allthepreaching.com/dev/images/pasLogo.png" />
    <meta property="og:image:alt" content="All The Preaching" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hidden.css">
    <link rel="stylesheet" href="css/newest.css">
    <link rel="stylesheet" href="css/sermons.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/button.css">

    <!-- JS -->
    <script defer src="js/navScript.js"></script>
    <script defer src="js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



    <!-- Title -->
    <title>Pastor Anderson Sermons</title>

</head>

<!--    body section                -->

<body class="">

    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo">
                <a href="index.php">Pastor Anderson Sermons</a>
            </span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo">
                        <a href="index.php">Pastor Anderson Sermons</a>
                    </span>
                    <i class='bx bx-x sidebarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="http://faithfulwordbaptist.org/donate.html">
                            <button class="button-78" role="button">
                                Donate to Faithful Word
                            </button>
                        </a>
                    </li>
                    <li><a href="https://www.faithfulwordbaptist.org/page5.html">The Preaching</a></li>
                    <li><a href="https://www.allthepreaching.com/">All The Preaching</a></li>
                    <li><a href="https://bannedpreaching.com/">Banned Preaching</a></li>
                </ul>
            </div>
            <div id="lightDark" class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-sun sun'></i>
                </div>
                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search' onclick="focusInput()"></i>
                    </div>
                    <div class="search-field">
                        <form action="search.php" method="POST">
                            <input id="search-input" type="text" name="search" placeholder="Search...">
                            <button type="submit" name="submit-search">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>