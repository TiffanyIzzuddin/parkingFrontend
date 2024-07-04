<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column: Payment Information -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Payment Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="rate" class="form-label">Rate per Hour (in Rupiah)</label>
                            <input type="text" class="form-control" id="rate" value="3000" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="info" class="form-label">Information</label>
                            <textarea class="form-control" id="info" rows="4" readonly>
The cost of parking is 3000 rupiah per hour. If you have any questions, feel free to contact our support.
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Checkout Information -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Checkout Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="/checkout" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="entryTime" class="form-label">Entry Time</label>
                                <input type="text" class="form-control" id="entryTime" value="2024-06-28 08:00:00" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exitTime" class="form-label">Exit Time</label>
                                <input type="text" class="form-control" id="exitTime" value="2024-06-28 12:00:00" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="hours" class="form-label">Hours Parked</label>
                                <input type="number" class="form-control" id="hours" value="4" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total Cost (in Rupiah)</label>
                                <input type="text" class="form-control" id="total" value="12000" readonly>
                            </div>
                            <button type="submit" class="btn btn-success w-100 mt-2">Generate QRIS</button>
                        </form>
                    </div>
                </div>
                @if(session('message'))
                    <div class="alert alert-success mt-3">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
