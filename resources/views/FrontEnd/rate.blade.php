<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Images/logo-png.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS/rate-style.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
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
            <div class="content">
                <div class="container">
                    <h1>Leave Us A Review!</h1>
                    <form id="reviewForm" onsubmit="return validateForm()">
                        <div class="form-group1">
                            <label for="rating">Rating:</label>
                            <div class="rating-stars">
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1">&#9733;</label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2">&#9733;</label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3">&#9733;</label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4">&#9733;</label>
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5">&#9733;</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="review">Leave a Review:</label>
                            <textarea id="review" name="review" rows="5" cols="30" maxlength="300"></textarea>
                            <div class="character-count">Characters left: <span id="charCount">300</span></div>
                        </div>
                        <div class="form-group checkbox-group">
                            <label>Email Notifications:</label>
                            <input type="checkbox" id="emailNotifications" name="emailNotifications">
                        </div>
                        <div class="form-group checkbox-group">
                            <label>Anonymous Review:</label>
                            <input type="checkbox" id="anonymousReview" name="anonymousReview">
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" id="image" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="experience">Overall Experience:</label>
                            <select id="experience" name="experience" onchange="validateExperience()">
                                <option value="" disabled selected>Please select an option</option>
                                <option value="excellent">Excellent</option>
                                <option value="good">Good</option>
                                <option value="average">Average</option>
                                <option value="poor">Poor</option>
                                <option value="veryPoor">Very Poor</option>
                            </select>
                            <div id="experienceError" style="color: red;"></div>
                        </div>

                        <div class="form-group radio-group">
                            <label>Would you recommend this website?</label>
                            <input type="radio" id="recommendYes" name="recommendation" value="yes">
                            <label for="recommendYes">Yes</label>
                            <input type="radio" id="recommendNo" name="recommendation" value="no">
                            <label for="recommendNo">No</label>
                        </div>
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="termsConditions" name="termsConditions" required>
                                I agree to the Terms and Conditions
                            </label>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
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
        </div>
        <script src="JS/rate.js"></script>
    </body>
</html>
