<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Transactions</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Plate Car</th>
                <th>Entry Time</th>
                <th>Out Time</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction['id'] }}</td>
                    <td>{{ $transaction['plate_car'] }}</td>
                    <td>{{ $transaction['entry_time'] }}</td>
                    <td>{{ $transaction['out_time'] }}</td>
                    <td>{{ $transaction['id_user'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
