<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Womens Shoes</title>
    <link rel="stylesheet" href="./css/style2.css">
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
</head>

<body>

    <section>

        <div class="nav1">
            <ul>
                <li><img src="assests/logo-png1.png" alt="" class="nav1-img"></li>
                <li>
                    <ul>
                        <li class="underline" id="men">
                            <a href="Mens.html">Men</a>
                            <div class="dropdown-container dropdown-container-men">
                                <!-- Add Men's dropdown content here -->
                            </div>
                        </li>
                        <li class="underline" id="women">
                            <a href="Womens.html">Women</a>
                            <div class="dropdown-container dropdown-container-women">
                                <!-- Add Women's dropdown content here -->
                            </div>
                        </li>
                        <li class="underline" id="kids">
                            <a href="Kids.html">Kids</a>
                            <div class="dropdown-container dropdown-container-kids">
                                <!-- Add Kids' dropdown content here -->
                            </div>
                        </li>
                        <li class="underline">
                            <a href="#">About Us</a>
                        </li>
                        <li class="underline">
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li>

                    <ul class="functions underline">
                        <span onclick="openBucket()" class="cart-icon"><i class="fas fa-shopping-cart"></i></span>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <main>

            <div class="items item-1" data-item="Nike Shoes-9" data-price="150"></div>

            <div class="items item-2" data-item="Nike Shoes-10" data-price="150"></div>

            <div class="items item-3" data-item="Nike Shoes-11" data-price="150"></div>

            <div class="items item-4" data-item="Nike Shoes-12" data-price="150"></div>

            <div class="items item-5" data-item="Nike Shoes-13" data-price="150"></div>

            <div class="items item-6" data-item="Nike Shoes-14" data-price="150"></div>

            <div class="items item-7" data-item="Nike Shoes-15" data-price="150"></div>

            <div class="items item-8" data-item="Nike Shoes-16" data-price="150"></div>

        </main>

        <footer>


            <ul>
                <li><span onclick="openBucket()"><i class="fas fa-shopping-cart"></i></span>
                    <span class="bottom-items-count"></span>
                </li>

            </ul>

        </footer>

        <div class="cart">

            <header> <span><a href="index.html"><i class="fas fa-shopping-bag"></i> CART</a></span> <span
                    class="exit"><i class="fas fa-times"></i></span> </header>

            <main>

                <ol>
                    <li>Item-Name</li>
                    <li>Qty</li>
                    <li>Total</li>
                </ol>

                <section>

                    <ul id="ul">

                    </ul>

                </section>

            </main>

            <footer>

                <ul>
                    <li><button><a href="checkout.html">Checkout </a></button></li>

                </ul>

            </footer>

        </div>

    </section>

    <script src="./js/script2.js"></script>

</body>

</html>
