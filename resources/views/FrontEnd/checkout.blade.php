


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style3.css">  
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-container">
    <div class="product-container" style="background: #ffff00;">
        <div class="details">
            <h1 class="cost">Secure Payments</h1>
            <h3 class="title">KicksKorner</h3>
        </div>

       
        <div id="cartItems" class="cart-items-container">
            
        </div>

        <div class="container">
            <p class="total-cost">Total Cost: $<span id="totalCost">0.00</span></p>
            <button class="purchase-button" data-content="PURCHASE" onclick="validateForm()">PURCHASE</button>
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
            <input id="cn" type="text" pattern="\d{16}" title="Card number must be 16 digits." placeholder="1234123412341234" required />
        </div>
        <div class="card-name field">
            <label for="cna">NAME ON CARD</label>
            <input id="cna" type="text" required />
        </div>
        <div class="expires field">
            <label for="exp">EXPIRES</label>
            <input id="exp" type="text" pattern="(0[1-9]|1[0-2])\/?([0-9]{2})" title="Expiration date must be in MM/YY format." placeholder="MM/YY" required />
        </div>
        <div class="cvc field">
            <label for="cvc">CVC</label>
            <input id="cvc" type="text" pattern="\d{3,4}" title="CVC must be 3 or 4 digits." placeholder="123" required />
        </div>
    </div>
</div>


<div id="customModal" class="custom-modal">
   
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    displayCartItems();
});

function displayCartItems() {
    let carts = JSON.parse(localStorage.getItem('cart')) || [];
    let totalCost = 0;


    carts.forEach(function(cartItem) {
        // Assuming fetchProducts is a function that fetches your products.json and returns a promise
        fetchProducts().then(products => {
            const productDetails = products.find(p => p.id == cartItem.product_id);
            if (productDetails) {
                let cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');
                cartItemDiv.innerHTML = `
                    <img src="${productDetails.image}" alt="${productDetails.name}">
                    <p>${productDetails.name} - $${productDetails.price} x ${cartItem.quantity}</p>
                    <p>Total: $${(productDetails.price * cartItem.quantity).toFixed(2)}</p>
                `;
                document.getElementById('cartItems').appendChild(cartItemDiv);
                totalCost += productDetails.price * cartItem.quantity;
                document.getElementById('totalCost').textContent = totalCost.toFixed(2);
            }
        });
    });

    // Updating the total cost
    document.getElementById('totalCost').textContent = totalCost.toFixed(2);
}

function fetchProducts() {
    return fetch('data/products.json').then(response => response.json());
    return fetch('data/products-women.json').then(response => response.json());
    return fetch('data/products-kids.json').then(response => response.json());
}

const purchaseButton = document.querySelector('.purchase-button');

purchaseButton.addEventListener('click', function() {
    alert('Thank you for your purchase!');
});


document.querySelector('.purchase-button').addEventListener('click', function() {
        const orderNumber = Math.floor(Math.random() * 90000) + 10000; // Simple random order number generation
        alert('Thank you for your purchase! Your order number is ' + orderNumber);
        
       
        fetch('/order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                
            },
            body: JSON.stringify({
                total_price: 100.00 // Example total price
            })
        })
        .then(response => response.json())
        .then(data => console.log(data.message))
        .catch(error => console.error('Error:', error));
    });


    

</script>
    



</body>
</html>





<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <script src="https://kit.fontawesome.com/26f8ed069f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-container" style="flex-direction: row; justify-content: space-between; align-items: flex-start;">
    <div class="product-container" style="background: #ffff00; flex-basis: 60%;">
        <div class="details">
            <h1 class="cost">Secure Payments</h1>
            <h3 class="title">KicksKorner</h3>
        </div>

        <div id="cartItems" class="cart-items-container">
            
        </div>

        <div class="container">
            <p class="total-cost">Total Cost: $<span id="totalCost">0.00</span></p>
            <button class="purchase-button" data-content="PURCHASE">PURCHASE</button>
        </div>
    </div>

    <div class="card-container" style="background: #ffff00; flex-basis: 35%; padding: 1rem; margin-left: 2rem;">
   
    </div>
</div>

<div id="customModal" class="custom-modal">
 
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    displayCartItems();
});

function displayCartItems() {
    let carts = JSON.parse(localStorage.getItem('cart')) || [];
    let totalCost = 0;


    carts.forEach(function(cartItem) {
        // Assuming fetchProducts is a function that fetches your products.json and returns a promise
        fetchProducts().then(products => {
            const productDetails = products.find(p => p.id == cartItem.product_id);
            if (productDetails) {
                let cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');
                cartItemDiv.innerHTML = `
                    <img src="${productDetails.image}" alt="${productDetails.name}">
                    <p>${productDetails.name} - $${productDetails.price} x ${cartItem.quantity}</p>
                    <p>Total: $${(productDetails.price * cartItem.quantity).toFixed(2)}</p>
                `;
                document.getElementById('cartItems').appendChild(cartItemDiv);
                totalCost += productDetails.price * cartItem.quantity;
                document.getElementById('totalCost').textContent = totalCost.toFixed(2);
            }
        });
    });

    // Updating the total cost
    document.getElementById('totalCost').textContent = totalCost.toFixed(2);
}

function fetchProducts() {
    return fetch('data/products.json').then(response => response.json());
}
</script>

</body>
</html>

-->

