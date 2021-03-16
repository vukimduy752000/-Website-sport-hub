<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0376e78535.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <title>Sport</title>
</head>

<body>
    <!-- Header will be reusable by using Promise later -->
    <header>
        <div id="header__top" class="header__flex">
            <h1>
                <a class="header__logo" href="/index.html">
                    <span class="header__icon">🅂🄿🄾🅁🅃 🄷🅄🄱</span>
                </a>
            </h1>
            <ul class="header__menu">
                <li><a href="#"><i class="fas fa-comment"></i><span>Contact Us</span></a></li>
                <li><a href="#"><i class="fas fa-user-alt"></i><span>Login</span></a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i><span>Cart</span></a></li>
            </ul>
        </div>

        <div id="header__bottom" class="header__flex">
            <!-- Content will be populated later on-->
            <ul class="header__menu">
                <li><a href="#">Home</a></li>
                <li class="header__main__category">
                    <a href="#">Soccer</a>
                    <ul>
                        <li><a href="#">Sub-Category</a></li>
                        <li class="header__main__category">
                            <a href="#">Sub-Category</a>
                            <ul class="list__sub__categories">
                                <li><a href="#">Sub-Category</a></li>
                                <li><a href="#">Sub-Category</a></li>
                                <li><a href="#">Sub-Category</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                    </ul>
                </li>

                <li class="header__main__category">
                    <a href="#">Volleyball</a>
                    <ul>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                    </ul>
                </li>
                <li class="header__main__category">
                    <a href="#">Baseball</a>
                    <ul>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                    </ul>
                </li>
                <li class="header__main__category">
                    <a href="#">Basketball</a>
                    <ul>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                        <li><a href="#">Sub-Category</a></li>
                    </ul>
                </li>
            </ul>

            <form id="header__div__search">
                <input type="search" name="header__search__query" id="header__search__query" placeholder="Search products..." autocomplete="off" spellcheck="false">
                <button type="submit" name="header__search__submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </header>

    <!--End File -->