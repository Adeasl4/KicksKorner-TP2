<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Images/logo-png.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/contact-style.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
        <script src="JS/contactus-script.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>KicksKorner - Kicks for every corner!</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="nav">
                <ul>
                    <li><img src="Images/logo-new.png" alt="" class="nav-img"></li>
                    <li>
                        <ul>
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
            <div class="registration" id="reg">
                <div class="registration-box">
                    <div class="registration-form animate">
                        <div>
                            <a href="#" id="hide" class="hide">X</a>
                        </div>
                        <h2>Join Us Today!</h2>
                        <form action="PHP/register.php" method="post">
                            <input type="text" id="name" placeholder=" Your Name" required>
                            <input type="email" id="email" placeholder=" Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            <textarea id="message" placeholder="Message" required></textarea>
                            <input type="submit" id="register" value="Send">
                        </form>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="text">
                    <div class="titles">
                        <h1>Contact Us</h1>
                    </div>
                    <p>
                        Welcome to our Contact Us page! Whether you have questions, feedback, or simply want to get in touch,<br> 
                        you're in the right place. Fill out the form below or give us a call, and we'll be happy to assist<br>
                        you. Your feedback is valuable to us, and we look forward to hearing from you.
                        
                    </p>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <h1>PHONE</h1>
                    <p>Need to speak with us directly? Here are our contact numbers:</p>
                    <ul>
                        <li>24/7 Customer Support</li>
                        <li>Local no. - <i class="fa fa-solid fa fa-phone" style="color: #000000;"></i> +44 7543678976</li>
                        <li>International no. - <i class="fa fa-solid fa fa-globe" style="color: #000000;"></i> 0121 211 8279</li>
                    </ul>
                </div>
                <div class="card">
                    <h1>EMAIL</h1>
                    <p>Get in contact! Fill out the form below to reach us, and we'll reply as soon as possible.</p>
                    <button class="buttons" type="button" id="popup">Email Us!</button>
                    <p>Alternatively, email us at - KicksKorner@gmail.com</p>
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
                                       <a class="admin-button" href="">Admin Login</a>
                                   </div>
        </div>
    </body>
</html>
