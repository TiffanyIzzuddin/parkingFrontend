@extends('adminlte::page')

@section('title', 'Admin Page')

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@section('content')
    <!-- Upper Card -->
    <div class="custom-double-content">
        <div class="card mb-3 upper-card" style="height: 8cm;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <br><br>
                        <h3 class="text-center mb-3">Bella Saputra</h3>
                        <h5 class="text-center mb-2">bellaSaput053@gmail.com</h5>
                        <h5 class="text-center mb-2">Laki-laki</h5>
                        <h5 class="text-center mb-2">085785774444</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center" style="height: 85%;">

                        <img src="{{ asset('asset/sittingVector.jpg') }}" class="img-fluid" alt="Image"
                            style="max-width: 100%; max-height: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lower Card with Table -->
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Tabel Admin</h4>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Admin</a>
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <select class="form-control form-control-navbar">
                            <option value="">Search by</option>
                            <option value="name">Nama</option>
                            <option value="email">Alamat Email</option>
                            <!-- Add more options as needed -->
                        </select>
                        <input class="form-control form-control-navbar ml-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table table-bordered table-striped">
                <thead class="custom-thead">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat Email</th>
                        <th>No Telp</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['gender'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['no_telp'] }}</td>

                            {{-- <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td> --}}
                            <td>
                                {{-- <a href="{{ route('users.update', $user->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a> --}}
                                <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-sm btn-warning"><i
                                        class="fas fa-edit"></i></a>


                                <form action="{{ route('users.delete', $user['id']) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fas fa-trash"></i></button>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('css')
    <style>
        .custom-thead {
            background-color: #2ECC71;
            color: white;
        }
    </style>
@stop

<style>
    .upper-card {
        /* height: 33vh; */
    }

    .upper-card .card-body {
        min-height: 200px;
        text-align:
            justify-content: center;
        /* Adjust minimum height as needed */
    }

    /* .upper-card .card-body {
        display: flex;
        flex-direction: column;
        text-align:
            justify-content: center;
        height: 100%;
    } */

    .upper-card img {
        height: 100%;
        object-fit: cover;
    }

    .custom-thead {
        background-color: #2ECC71;
        color: white;
    }

    .custom-double-content {
        padding-top: 15px;
    }
</style>
