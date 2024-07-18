@extends('adminlte::page')

@section('title', 'Tabel Laporan')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tabel Laporan</h1>
        {{-- <a href="{{ route('transactions.download') }}" class="btn btn-primary">Download PDF</a> --}}
        {{-- <a href="{{ route('reports.download') }}" class="btn btn-primary">Download Report</a> --}}
        <a href="{{ route('transactions.download') }}" class="btn btn-primary">Download Report</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="custom-thead">
                    <tr>
                        <th>ID number</th>
                        <th>Admin Name</th>
                        <th>Plate number</th>
                        <th>Entry Time</th>
                        <th>Out Time</th>
                        <th>Total Payment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction['id'] }}</td>
                            <td>{{ $transaction['id_user'] }}</td>
                            <td>{{ $transaction['plate_car'] }}</td>
                            <td>{{ $transaction['entry_time'] }}</td>
                            <td>{{ $transaction['out_time'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

<style>
    .custom-thead {
        background-color: #367FA9;
        color: white;
    }
</style>
