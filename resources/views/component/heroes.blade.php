<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    
    <style>
        .navbar-custom {
            background-color: #2B465B;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link,
        .navbar-custom .btn {
            color: white;
        }

        .navbar-custom .btn {
            border-color: white;
        }

        .navbar-custom .btn:hover {
            background-color: white;
            color: #2B465B;
        }
    </style>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .hero-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            background-color: #2B465B;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .hero-section .lead {
            margin: 0 auto;
            max-width: 600px; /* Limit the width of the lead text for better readability */
        }
        /* .table-section {
            padding: 20px;
        } */

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="#">Smart Parking</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li> --}}
                </ul>
                <a href="{{ route('login') }}" class="btn btn-outline-light ms-lg-3">Login</a>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-content">
            <h1 class="display-4">Selamat Datang di Smart Parking</h1>
            <p class="lead">Smart Parking hadir untuk membantu anda menemukan lokasi parkir kosong dengan mudah dan cepat. Kami siap mendukung anda untuk memastikan pengalaman parkir yang nyaman dan lancar.</p>
            <br>
            <a href="#lantai1" class="btn btn-primary btn-lg mr-2">Lantai 1</a>
            <a href="#lantai2" class="btn btn-secondary btn-lg">Lantai 2</a>
            {{-- <a href="#lantai2" class="btn btn-secondary btn-lg">Print Report</a> --}}
        </div>
    </div>
</body>
</html>