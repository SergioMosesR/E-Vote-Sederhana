<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/kpo.png') }}">
    <title>KPO</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .card {
            width: 350px;
            text-align: center;
            margin: 15px;
        }

        .card-body h1 {
            font-size: 48px;
            margin: 0;
        }

        .card-body p {
            margin-top: 10px;
            font-size: 18px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Paslon 1 Votes Card -->
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1>{{ $paslon1 }}</h1>
                        <p>Total Votes Paslon 1</p>
                    </div>
                </div>
            </div>

            <!-- Paslon 2 Votes Card -->
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1>{{ $paslon2 }}</h1>
                        <p>Total Votes Paslon 2</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Votes Card -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1>{{ $total }}</h1>
                        <p>Total Votes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
