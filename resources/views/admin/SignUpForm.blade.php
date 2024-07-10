<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 2rem;
        }
        .login-form {
            margin-bottom: 1rem;
        }
        .login-img {
            height: 100%;
            object-fit: cover;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-4">Login Form</h4>
                                <form action="{{ route('users.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp">Nomor Telephone</label>
                                        <input type="text" name="no_telp" id="no_telp" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp">Jenis Kelamin</label>
                                        <input type="text" name="gender" id="gender" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Create User</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            {{-- <img src="{{ asset(asset/Adventure.jpg) }}" class="card-img login-img" alt="Image"> --}}
                            <img src="{{ asset('asset/Adventure.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
