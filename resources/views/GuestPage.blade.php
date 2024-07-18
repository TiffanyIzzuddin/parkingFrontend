<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Parking</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            height: 64px;
            /* Adjust this value to set the height of the rows */
        }

        th:nth-child(2),
        td:nth-child(2) {
            border-top: none;
            border-bottom: none;
        }

        th:nth-child(5),
        td:nth-child(5) {
            border-top: none;
            border-bottom: none;
        }

        .available {
            background-color: #45A29E !important;
            color: white !important;
        }

        .unavailable {
            background-color: #AA4A44 !important;
            color: white !important;
        }

        h1 {
            text-align: center;
        }
    </style>

</head>

<body>
    @include('component.heroes')
    <div class="container mt-5">
        <h1>Ketersediaan lahan parkir</h1>
    </div>

    <div class="table-section">
        <h2 id="lantai1">Table Section - Lantai 1</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <h2 id="lantai2">Table Section - Lantai 2</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Data 1</td>
                    <td>Data 2</td>
                    <td>Data 3</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
