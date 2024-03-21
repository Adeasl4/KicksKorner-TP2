<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Images/logo-png.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/master-style.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
        <script src="JS/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>KicksKorner - Kicks for every corner!</title>
    </head>
    <body>

    <div class="preloaderBg" id="preloader">
            <div class="loader-wrap">
                <div class="preloader"></div>
                <div class="preloader2"></div>
            </div>
        </div>
        <script type="text/javascript">
            var preloadTime;

            function preloader() {
            preloadTime = setTimeout(showPage, 2000);
            }

            function showPage() {
            document.getElementById("preloader").style.display = "none";
            }
            window.onload = preloader;
        </script>
        <div class="wrapper">
            <div class="nav">
                <ul>
                    <li><img src="Images/logo-new.png" alt="" class="nav-img"></li>
                    <li>
                        <ul>
                            <li class="underline" id="men">
                                <a href="http://127.0.0.1:8000/mens">Men</a>
                                <div class="dropdown-container-men">
                                    <div class="drop-col">
                                        <a class="dropdown" href="#">Men's Products 1</a>
                                        <a class="dropdown" href="#">Men's Products 2</a>
                                        <a class="dropdown" href="#">Men's Products 3</a>
                                        <a class="dropdown" href="#">Men's Products 4</a>
                                        <a class="dropdown" href="#">Men's Products 5</a>
                                        <a class="dropdown" href="#">Men's Products 6</a>
                                    </div>
                                </div>
                            </li>
                            <li class="underline" id="women">
                                <a href="http://127.0.0.1:8000/womens">Women</a>
                                <div class="dropdown-container-women">
                                    <div class="drop-col">
                                        <a class="dropdown" href="#">Women's Products 1</a>
                                        <a class="dropdown" href="#">Women's Products 2</a>
                                        <a class="dropdown" href="#">Women's Products 3</a>
                                        <a class="dropdown" href="#">Women's Products 4</a>
                                        <a class="dropdown" href="#">Women's Products 5</a>
                                        <a class="dropdown" href="#">Women's Products 6</a>
                                    </div>
                                </div>
                            </li>
                            <li class="underline" id="kids">
                                <a href="http://127.0.0.1:8000/kids">Kids</a>
                                <div class="dropdown-container-kids">
                                    <div class="drop-col">
                                        <a class="dropdown" href="#">Kid's Products 1</a>
                                        <a class="dropdown" href="#">Kid's Products 2</a>
                                        <a class="dropdown" href="#">Kid's Products 3</a>
                                        <a class="dropdown" href="#">Kid's Products 4</a>
                                        <a class="dropdown" href="#">Kid's Products 5</a>
                                        <a class="dropdown" href="#">Kid's Products 6</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="functions underline">
                            <li><a href="http://127.0.0.1:8000/login">Login</a></li>
                            <li><a href="http://127.0.0.1:8000/register">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="bar">
                    <p>GET 20% OFF NOW WITH CODE GP36</p>
                </div>
            </div>
            <div class="header-section">
                <div class="partners">
                    <!-- <h2>Proud Partners of </h2> -->
                    <img src="Images/adiddas.png" alt="">
                    <img src="Images/nike.png" alt="">
                    <img src="Images/docs.png" alt="">
                    <img src="Images/Converse.png" alt="">
                    <img src="Images/Clarks.png" alt="">
                </div>
                <div class="search-section">
                    <h3>Search</h3>
                    <div class="search-container">
                        <form role="search" method="get" class="form" action="">
                            <label>
                                <input type="search" class="search" placeholder="Search …" value="" name="s" title="Search for:" />
                            </label>
                            <input type="submit" class="submit" value="Search" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="slideshow-container">
                    <div class="slideshows">
                      <div class="slideshow slideshow--hero">
                        <div class="slides">
                          <div class="slide slide1"></div>
                          <div class="slide slide2"></div>
                          <div class="slide slide3"></div>
                        </div>
                      </div>
                      <div class="slideshow slideshow--contrast slideshow--contrast--before">
                        <div class="slides">
                          <div class="slide slide1"></div>
                          <div class="slide slide2"></div>
                          <div class="slide slide3"></div>
                        </div>
                      </div>
                      <div class="slideshow slideshow--contrast slideshow--contrast--after">
                        <div class="slides">
                          <div class="slide slide1"></div>
                          <div class="slide slide2"></div>
                          <div class="slide slide3"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="titles">
                <h1>What is KicksKorner?</h1>
            </div>
            <div class="about">
                <div class="text">
                    <p>
                    Our Goal:<br> 
                        The main goal for Kickskorner is to provide a wide range of footwear for individuals of all ages.<br>
                        Its secondary goal is to redefine the online shoe-shopping experience.<br>
                    </p>
                    <div class="about-buttons">
                        <a href="http://127.0.0.1:8000/about" class="buttons">About Us</a>
                        <a href="http://127.0.0.1:8000/contact" class="buttons">Contact Us</a>
                        <a href="http://127.0.0.1:8000/feedback/create" class="buttons">Review Us</a>

                    </div>
                </div>
                <img src="Images/logo-new-bg.png" alt="" class="about-img">
            </div>
            <div class="titles">
                <h1>Shoe Selection</h1>
            </div>
            <div class="product-previews">
                <div class="cards">
                    <div class="card" onclick="location.href='';">
                        <img src="Images/Shoe.png" alt="" class="card-img">
                        <p>Trainers</p>
                    </div>
                    <div class="card" onclick="location.href='';">
                        <img src="Images/Shoe.png" alt="" class="card-img">
                        <p>Boots</p>
                    </div>
                    <div class="card" onclick="location.href='';">
                        <img src="Images/Shoe.png" alt="" class="card-img">
                        <p>Sandals</p>
                    </div>
                    <div class="card" onclick="location.href='';">
                        <img src="Images/Shoe.png" alt="" class="card-img">
                        <p>Formal Shoes</p>
                    </div>
                    <div class="card" onclick="location.href='';">
                        <img src="Images/Shoe.png" alt="" class="card-img">
                        <p>Converse</p>
                    </div>
                </div>
            </div>
            <div class="product-page">
                <button class="productPage-button" onclick="window.location.href='';"><span>VIEW ALL  <i class="fa fa-solid fa fa-arrow-right" style="color: #000000;"></i></span></button>
            </div>
            <div class="footer">
                            <a class="admin-button" href="http://127.0.0.1:8000/">Home</a>
                            <div class="footer-text">
                                <p>Follow Us!</p>
                                <div class="socials">
                                    <a class="socials-button" href="https://www.instagram.com%22%3E/<i class="fa fa-brands fa fa-instagram" style="color: #fcd12a;"></i></a>
                                    <a class="socials-button" href="https://www.linkedin.com/"><i class="fa fa-brands fa fa-linkedin" style="color: #fcd12a;"></i></a>
                                    <a class="socials-button" href="https://twitter.com/"><i class="fa fa-brands fa fa-twitter" style="color: #fcd12a;"></i></a>
                                    <a class="socials-button" href="https://www.youtube.com/"><i class="fa fa-brands fa fa-youtube" style="color: #fcd12a;"></i></a>
                                </div>
                                <p>Made With &#128155; By Team 36</p>
                            </div>
                            <a class="admin-button" href="http://127.0.0.1:8000/admin/auth/login">Admin Login</a>
                        </div>
        </div>
    </body>
</html>
