<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link rel="shortcut icon" href="Images/logo-png.png" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
            <title>Processing Orders</title>
    </head>
<body>

<div class="nav">
                <ul>
                    <li><img src="Images/logo-new.png" alt="" class="nav-img"></li>
                    <li>
                        <ul>
                            <li class="underline">
                                <a href="{{ route('home.page') }}">Back to Store</a>
                            </li>
                            <li class="underline">
                                <a href="{{ route('admin.page') }}">Customer Data</a>
                            </li>
                            <li class="underline">
                                <a href="{{ route('inventory.management') }}">Inventory Management</a>
                            </li>
                            <li class="underline">
                                <a href="{{ route('process.orders') }}">Process Orders</a>
                            </li>
                        </ul>
                        <ul>
                    </li>
                </ul>
            </div>


<div class="footer">
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
                        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
