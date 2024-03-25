<!-- resources/views/feedback/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/logo-png.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/CSS/feedback-style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
        <title>Review Us</title>
    </head>
<body>
<div class="wrapper">
            <div class="nav">
                <ul>
                    <li><img src="Images/logo-new.png" alt="" class="nav-img"></li>
                    <li>
                        <ul class="categories">
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

            <hr> 

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h2>Customer Reviews and Ratings</h2>
@if($feedbacks->isNotEmpty())
    <ul class="feedback-list">
        @php
            $counter = 0;
            $sortedFeedbacks = $feedbacks->sortByDesc('created_at'); // Sort feedbacks by creation date in descending order
        @endphp
        @foreach($sortedFeedbacks as $feedback)
            @if($counter < 3) <!-- Limit the reviews to 3 -->
                <li class="feedback-item">
                    <strong>Rating:</strong> {{ $feedback->rating }}<br>
                    <strong>Review:</strong> {{ $feedback->review }}<br>
                    <strong>Anonymous Name:</strong> {{ $feedback->nickname }}<br>
                    @if($feedback->recommend)
                        <strong>Recommended</strong><br>
                    @endif
                </li>
                @php $counter++; @endphp <!-- Increment the counter -->
            @endif
        @endforeach
    </ul>
@else
    <p>No reviews yet. Be the first to leave a review!</p>
@endif


<form action="{{ route('feedback.store') }}" method="post">
    @csrf
    <label for="nickname">Anonymous Name:</label>
    <input type="text" id="nickname" name="nickname" required><br>
    
    <fieldset>
        <legend>Rating:</legend>
        <input type="radio" id="rating-1" name="rating" value="1">
        <label for="rating-1">1 star</label>
        <input type="radio" id="rating-2" name="rating" value="2">
        <label for="rating-2">2 stars</label>
        <input type="radio" id="rating-3" name="rating" value="3">
        <label for="rating-3">3 stars</label>
        <input type="radio" id="rating-4" name="rating" value="4">
        <label for="rating-4">4 stars</label>
        <input type="radio" id="rating-5" name="rating" value="5">
        <label for="rating-5">5 stars</label>
    </fieldset>

    <label for="review">Review:</label><br>
    <textarea id="review" name="review" rows="4" cols="50" required></textarea><br>
    
    <label for="recommend">Would you recommend our website?</label>
    <input type="checkbox" id="recommend" name="recommend" value="1"><br>
    
    <button type="submit">Submit Feedback</button>
</form>



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

                                   

</body>
</html>