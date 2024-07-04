@extends('adminlte::page')

@section('title', 'Tabel Laporan')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tabel Laporan</h1>
        {{-- <a href="{{ route('reports.download') }}" class="btn btn-primary">Download Report</a> --}}
        <a href="#" class="btn btn-primary">Download Report</a>
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
                    {{-- @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->admin_name }}</td>
                        <td>{{ $report->plate_number }}</td>
                        <td>{{ $report->entry_time }}</td>
                        <td>{{ $report->out_time }}</td>
                        <td>{{ $report->total_payment }}</td>
                        <td>{{ $report->status }}</td>
                    </tr>
                    @endforeach --}}
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