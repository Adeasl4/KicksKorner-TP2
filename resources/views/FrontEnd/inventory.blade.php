<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <style>@import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');</style>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
            <title>Inventory Management</title>
    </head>
<body>
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        @if ($product->image_url)
                            <img src="{{ $product->image_url }}" alt="Product Image" style="max-width: 100px;">
                        @else
                            No Image Available
                        @endif
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->units_in_stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--buttons-->
    <div class="btn-container">
        <br><button type="button" class="add-btn" data-toggle="modal" data-target="#addProductModal">
            Add Product
        </button>
        <br><br><button type="button" class="update-btn" data-toggle="modal" data-target="#updateProductModal">
            Update Product
        </button>
    </div>

    <!-- Modal for adding a new product -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <!-- The form -->
            <form method="POST" action="{{ route('inventory.store') }}" class="styled-form">
            @csrf 
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
          
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" required><br><br>
          
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required><br><br>

            <label for="units_in_stock">Stock:</label>
            <input type="number" name="units_in_stock" id="units_in_stock" required><br><br>

            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" id="image_ul" required><br><br>
            
            <button type="submit" class="submit-btn">Add Product</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header">
            <h5 class="modal-title" id="updateProductModalLabel">Update Product Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <!-- The form -->
            <form action="{{ route('inventory.update') }}" method="POST" class="styled-form">
            @csrf
            @method('PUT')

            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" required><br><br>

            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="description">Description:</label>
            <input type="text" name="description" id="description" required><br><br>
          
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required><br><br>

            <label for="units_in_stock">Stock:</label>
            <input type="number" name="units_in_stock" id="units_in_stock" required><br><br>

            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" id="image_ul" required><br><br>

            <button type="submit" class="update-btn">Update Information</button>
            </form>
        </div>
        </div>
    </div>
    </div>


<!--Footer-->
    <div class="footer">
        <button type="button" class="manage-btn">
            <a style="color:black;" href="{{ route('home.page') }}">Home</a>
        </button>
        <br><button type="button" class="manage-btn">
            <a style="color:black;" href="{{ route('admin.page') }}">Admin Panel</a>
        </button>
                <p>Follow Us!</p>
                <div class="socials">
                    <a class="socials-button" href="https://www.instagram.com"><i class="fa fa-brands fa fa-instagram" style="color: #D62976;"></i></a>
                    <a class="socials-button" href="https://www.linkedin.com/"><i class="fa fa-brands fa fa-linkedin" style="color: #0A66C2;"></i></a>
                    <a class="socials-button" href="https://twitter.com/"><i class="fa fa-brands fa fa-twitter" style="color: #00ACEE;"></i></a>
                    <a class="socials-button" href="https://www.youtube.com/"><i class="fa fa-brands fa fa-youtube" style="color: #FF0000;"></i></a>
                </div>
                <p>Made With &#x1FA75; By Team 36</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
