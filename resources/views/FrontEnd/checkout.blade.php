<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <!-- Combining external CSS and font links, ensuring no duplicates -->
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Main container to wrap product details and payment process for layout control -->
<div class="main-container">
    <div class="product-container">
        <div class="details">
            <h1 class="cost">Secure Payments</h1>
            <h3 class="title">KicksKorner</h3>
        </div>

        <div id="cartItems" class="checkout-container">
            <!-- Cart items will be dynamically inserted here -->
        </div>

        <div class="container">
            <p class="total-cost">Total Cost: $<span id="totalCost">0.00</span></p>
            <button class="purchase-button" data-content="PURCHASE">PURCHASE</button>
        </div>
    </div>

    <div class="card-container">
        <div class="mastercard">
            <div class="logo"></div>
            <div class="name">mastercard</div>
        </div>
        <div class="visa">
            <div class="logo"></div>
            <div class="name">visa</div>
        </div>
        <div class="card-details">
            <div class="card-number field">
                <label for="cn">CARD NUMBER</label>
                <input id="cn" type="number" />
            </div>
            <div class="card-name field">
                <label for="cna">NAME ON CARD</label>
                <input id="cna" type="text" />
            </div>
            <div class="expires field">
                <label for="exp">EXPIRES</label>
                <input id="exp" type="number" />
            </div>
            <div class="cvc field">
                <label for="cvc">CVC</label>
                <input id="cvc" type="number" />
            </div>
        </div>
    </div>
</div>

<!-- Custom Modal for Checkout Confirmation -->
<div id="customModal" class="custom-modal">
    <div class="custom-modal-content">
        <span class="close-button">×</span>
        <h2>Thank You</h2>
        <p>Our company values each and every customer. If you have any questions or feedback, please don't hesitate to reach out.</p>
        <p>Your order number is: <span id="orderNumber"></span></p>
        <button class="modal-done-button">DONE</button>
    </div>
</div>

<!-- Including jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Original script for displaying cart items and handling the checkout process
document.addEventListener('DOMContentLoaded', function () {
    displayCartItems();
});

// Modified function to accommodate both cart display and random order number generation
function displayCartItems() {
    let carts = JSON.parse(localStorage.getItem('cart')) || [];
    let totalCost = 0;

    carts.forEach(function(cartItem) {
        let cartItemDiv = document.createElement('div');
        cartItemDiv.classList.add('cart-item');
        let cartItemDetails = document.createElement('p');
        cartItemDetails.textContent = `${cartItem.name} - $${cartItem.price} x ${cartItem.quantity}`;
        cartItemDiv.appendChild(cartItemDetails);
        document.getElementById('cartItems').appendChild(cartItemDiv);
        totalCost += cartItem.price * cartItem.quantity;
    });

    document.getElementById('totalCost').textContent = totalCost.toFixed(2);
}

// Combining checkout processing and random order number generation
document.querySelector('.purchase-button').addEventListener('click', function() {
    processCheckout();
    showThankYouPopup(); // This now also triggers the popup upon purchase
});

// Original checkout processing with added functionality for a random order number
function processCheckout() {
