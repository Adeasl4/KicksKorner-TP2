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


<!--Footer-->
    <div class="footer">
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
