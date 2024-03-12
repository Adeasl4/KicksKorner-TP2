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
            <title>Inventory Management</title>
    </head>
<body>

    <div class="nav">
        <ul>
            <li><img src="{{ asset('Images/logo-new.png') }}" alt="" class="nav-img"></li>
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
                </li>
        </ul>
    </div>

    <!-- Add a section to display notifications -->
    @if(session()->has('warnings'))
        @foreach(session()->get('warnings') as $warning)
            <div class="alert alert-warning">
                {{ $warning }}
            </div>
        @endforeach
    @endif
    
     <!-- Search Bar -->
    <form action="{{ route('inventory.search') }}" method="GET">
        <input type="text" name="query" placeholder="Search inventory...">
        <button type="submit">Search</button>
    </form><br>

    <div class="container">
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock Level</th>
                    <th>Update?</th>
                    <th>Delete?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <form action="{{ route('inventory.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
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
                        <td>
                            <a class="update-btn" 
                            data-toggle="modal" 
                            data-target="#updateProductModal{{ $product->id }}">
                            Update
                            </a>
                        </td>
                        <td><button type="submit" class="delete-btn" name="selectedProducts[]" value="{{ $product->id }}">Delete</button></td>
                    </tr>
                </form>
                @endforeach
            </tbody>
        </table>
    </div>

    <!--buttons-->
    <div class="btn-container">
        <br><button type="button" class="add-btn" data-toggle="modal" data-target="#addProductModal">
            Add Product
        </button>
        <br><br><button type="button" class="update-btn">
            Generate Report
        </button>
    </div>
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
            <input type="number" min="1" step="0.01" name="price" id="price" required><br><br>

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

    <!-- Modal for updating a product -->
    @foreach ($products as $product)
    <div class="modal fade" id="updateProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel{{ $product->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProductModalLabel{{ $product->id }}">Update Product Information</h5>
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

                        <!--label for="ID">ID:</label>-->
                        <input type="hidden" min="1" name="product_id" value="{{ $product->id }}" required>

                        <label for="update_name">Name:</label>
                        <input type="text" name="name" id="update_name{{ $product->id }}" value="{{ $product->name }}" required><br><br>

                        <label for="update_description">Description:</label>
                        <input type="text" name="description" id="update_description{{ $product->id }}" value="{{ $product->description }}" required><br><br>

                        <label for="update_price">Price:</label>
                        <input type="number" min="1" step="0.01" name="price" id="update_price{{ $product->id }}" value="{{ $product->price }}" required><br><br>

                        <label for="update_units_in_stock">Stock:</label>
                        <input type="number" min="1" step="1" name="units_in_stock" id="update_units_in_stock{{ $product->id }}" value="{{ $product->units_in_stock }}" required><br><br>

                        <label for="update_image_url">Image URL:</label>
                        <input type="text" name="image_url" id="update_image_url{{ $product->id }}" value="{{ $product->image_url }}" required><br><br>

                        <!-- Submit button -->
                        <button type="submit" class="update-btn">Update Information</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach


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
