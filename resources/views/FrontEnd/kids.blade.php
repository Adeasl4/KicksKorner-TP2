<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid's Shoes</title>
    <link rel="stylesheet" type="text/css" href="CSS/mens-style.css">
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<body>
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
               
            </div>



                <div class="container">
        <header>
            <div class="title">KID'S KICKS</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                </svg>
                <span>0</span>
            </div>
        </header>
        <div class="listProduct">

        </div>
    </div>
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <a href="http://127.0.0.1:8000/checkout" class="checkOut">
            <button class="checkout-btn">Check Out</button>
        </a>
        </div>
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

                        <script src="JS/app-kids.js"></script>
</body>

</html>
