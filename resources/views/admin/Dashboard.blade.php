<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    {{-- <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script> --}}
    {{-- visualization --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Dashboard</title>
</head>

<style>
    .custom-content-padding {
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .custom-double-content {
        padding-top: 15px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }
</style>

<body>
    @extends('adminlte::page')

    @section('content')
        <div class="custom-content-padding">
            <div class="card">
                <div class="card-body text-center"><br>
                    <h3>Smart Parking</h3>
                    <p class="card-text">layanan untuk membantu Anda mencari lokasi parkir kosong dengan mudah.<br>
                        Silakan cek grafik minggu dan bulanan kondisi terkini untuk mendapatkan informasi terbaru mengenai
                        ketersediaan parkir. <br>
                        Kami berkomitmen untuk memberikan pengalaman parkir yang nyaman dan efisien bagi semua pengguna.
                    </p><br>
                    <button class="btn btn-primary">
                        <i class="bi bi-download"></i> Download
                    </button>
                </div>
            </div>
        </div>

        <div class="custom-double-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Chart 1: Weeks vs Time
                            </div>
                            <div class="card-body">
                                <canvas id="chart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Chart 2: Total Cars vs Months
                            </div>
                            <div class="card-body">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx1 = document.getElementById('chart1').getContext('2d');
            var chart1 = new Chart(ctx1, {
                type: 'line', // or 'bar'
                data: {
                    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [{
                        label: 'Time (hours)',
                        data: [10.30, 20.15, 15.20, 17.20, 10.30, 20.15, 15.20],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var ctx2 = document.getElementById('chart2').getContext('2d');
            var chart2 = new Chart(ctx2, {
                type: 'bar', // or 'line'
                data: {
                    labels: ['January', 'February', 'March', 'April', 'Mei', 'Juni', 'July'],
                    datasets: [{
                        label: 'Total Cars',
                        data: [15, 25, 35, 45],
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @stop

</body>
</html>
