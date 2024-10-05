<!-- resources/views/pemilos.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/kpo.png') }}">
    <title>Dashboard PEMILOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            margin: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            max-height: 250px; /* Membatasi tinggi maksimal gambar */
            width: 100%;
            object-fit: contain; /* Gambar tetap proporsional */
            padding: 15px; /* Padding di sekitar gambar */
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .modal-content {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .modal-title {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .modal-body p {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Card Paslon 1 -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('img/bn.png') }}" alt="Paslon 1">
                    <div class="card-body">
                        <h5 class="card-title">Paslon 1</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPaslon1">
                            Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Paslon 2 -->
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="{{ asset('img/bn.png') }}" alt="Paslon 2">
                    <div class="card-body">
                        <h5 class="card-title">Paslon 2</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPaslon2">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Paslon 1 -->
    <div class="modal fade" id="modalPaslon1" tabindex="-1" aria-labelledby="modalPaslon1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPaslon1Label">Paslon 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ini adalah detail Paslon 1. Visi: Membawa perubahan dan kesejahteraan.</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('Paslon1') }}">Vote</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Paslon 2 -->
    <div class="modal fade" id="modalPaslon2" tabindex="-1" aria-labelledby="modalPaslon2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPaslon2Label">Paslon 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ini adalah detail Paslon 2. Misi: Memberikan solusi yang terbaik untuk semua masalah.</p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('Paslon2') }}">Vote</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
