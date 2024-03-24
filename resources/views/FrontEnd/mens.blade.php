<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mens Shoes</title>
    <link rel="stylesheet" href="/CSS/mens.css">
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<body>

<div class="">
            <div class="nav">
                <ul>
                    <li><img src="Images/logo-new.png" alt="" class="nav-img"></li>
                    <li>
                    <ul class="categories">
                    <li class="underline" id="men">
                        <a href="#">Men</a>
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
                        <a href="#">Women</a>
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
                        <a href="#">Kids</a>
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
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
            </li>
        </ul>
    </div>
            <div class="container">
        <header>
            <h1>MEN'S KICKS</h1>
            <div class="icon-cart">
                <img src="Images/pics/shopping-bag.svg">
                <span class="quantity">0</span>
            </div>
        </header>



        <div class="filter">

            <div class=" section" id="main">
                <button class="openbtn" onclick="openNav()" href="show-filter">Show Filter</button>
                <p>12 results</p>

                <div class="dropdown">
                    <select class="dropdown-content" id="d-c" name="dropBox">
                        <option>Sort-By</option>
                        <option>Highest to Lowest</option>
                        <option>Lowest to Highest</option>
                        <option>Newest</option>
                        <option>Popular</option>
                    </select>
                </div>
            </div>

            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <div class="search">
                <input type="search" name="name" id="search-input" placeholder="Search product name here..">
                </div>
    


                <div class="category">
                    <h4>Categories</h4>
                    <ul class="types">
                        <li>Loafers</li>
                        <li>High Tops</li>
                        <li>Low Tops</li>
                        <li>Slids </li>
                    </ul>
                </div>

            </div>

        </div>

        <br>

        <div class="listProduct">
            <div class="item">
                <!-- <img src="images/Nike Air VaporMax Plus Women's Shoes (Cedar).jpeg " alt="nikevapour">
                <h2>NAME OF PRODUCT</h2>
                <div class="price">£105</div>
                <button class="addCart">Add to Cart</button>-->
            </div>

        </div>
    </div>


    <div class="cartTab">
        <h1>Your Cart</h1>
        <div class="listCart">

            <div class="item">
                <!-- <div class="image">
                        <img src="images/Nike Air VaporMax Plus Women's Shoes (Cedar).jpeg " alt="nikevapour">
                    </div>
                    <div class="name">NAME</div>
                    <div class="totalPrice"> £105</div>
                    <div class="quantity">
                        <span class="minus">
                            < </span>
                                <span class="1">1</span>
                                <span class="plus">></span>
                    </div>-->
            </div>




        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkout">Check Out</button>
        </div>
    </div>
    <br>


    <div class="footer">
        <p>Follow Us!</p>
        <div class="socials">
            <a class="socials-button" href="https://www.instagram.com"><i class="fa fa-brands fa fa-instagram" style="color: #fcd12a;"></i></a>
            <a class="socials-button" href="https://www.linkedin.com/"><i class="fa fa-brands fa fa-linkedin" style="color: #fcd12a;"></i></a>
            <a class="socials-button" href="https://twitter.com/"><i class="fa fa-brands fa fa-twitter" style="color: #fcd12a;"></i></a>
            <a class="socials-button" href="https://www.youtube.com/"><i class="fa fa-brands fa fa-youtube" style="color: #fcd12a;"></i></a>
        </div>
        <p>Made With &#128155; By Team 36</p>
    </div>
    <script src="JS/menskicks.js"></script>
    <script src="JS/filter-mens.js"></script>
</body>


</html>
