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
            <title>Admin Panel</title>
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
                                <a href="{{ route('process.index') }}">Process Orders</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

<h1>Customer Data</h1>
<div class="container">
  <div class="table-container">
    <form action="{{ route('users.deleteSelected') }}" method="POST"> <!--Use delete method in usercontroller-->
      @csrf
      @method('DELETE')
      <table class="styled-table">
          <!--Table of all information from table-->
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Update?</th>
            <th>Delete?</th>
          </tr>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->email }}</td>
            <td>
                            <a class="update-btn" 
                            data-toggle="modal" 
                            data-target="#updateCustomerModal{{ $user->id }}">
                            Update
                            </a>
            </td>
            <!--<td><input type="checkbox" name="selectedUsers[]" value="{{ $user->id }}"></td>-->
            <!-- delete button for row-->
            <td><button type="submit" class="delete-btn" name="selectedUsers[]" value="{{ $user->id }}">Delete</button></td>
        </tr>
        @endforeach
    </table>
    </form>
  </div>

    <!-- Add, edit, processing orders, and inventory managament buttons-->
  <div class="btn-container">
    <br><button type="button" class="add-btn" data-toggle="modal" data-target="#addCustomerModal">
      Add Customer
    </button>
  </div>

</div>

  <!-- Modal for adding a new customer -->
<div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <h5 class="modal-title" id="addCustomerModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <!-- The form -->
        <form method="POST" action="{{ route('users.store') }}" class="styled-form">
          @csrf 
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required><br><br>
          
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required><br><br>
          
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required><br><br>
          
          <button type="submit" class="submit-btn">Add Customer</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Modal for updating customer data -->
    @foreach ($users as $user)
    <div class="modal fade" id="updateCustomerModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="updateCustomerModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="updateCustomerModalLabel{{ $user->id }}">Update Customer Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <!-- The form -->
                    <form action="{{ route('users.update') }}" method="POST" class="styled-form">
                        @csrf
                        @method('PUT')

                        <input type="hidden" min="1" name="user_id" value="{{ $user->id }}" required>

                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name{{ $user->id }}" value="{{ $user->name }}" required><br><br>

                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password{{ $user->id }}" value="{{ $user->password }}" required><br><br>

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email{{ $user->id }}" value="{{ $user->email }}" required><br><br>

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
