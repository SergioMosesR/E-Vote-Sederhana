<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Token Verification</title>
    <style>
        /* Styling untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e3f2fd; /* Background biru soft */
            display: flex;
            flex-direction: column; /* Menyusun konten secara vertikal */
            justify-content: center; /* Memusatkan konten secara vertikal */
            align-items: center; /* Memusatkan konten secara horizontal */
            height: 100vh; /* Menggunakan seluruh tinggi viewport */
        }

        /* Menyusun wrapper untuk form dan footer */
        .content {
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Memungkinkan untuk mengisi ruang kosong */
            justify-content: center; /* Memusatkan konten secara vertikal */
            align-items: center; /* Memusatkan konten secara horizontal */
            width: 100%; /* Memastikan lebar 100% */
        }

        /* Styling untuk form box */
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Batas lebar maksimum */
            width: 100%; /* Memungkinkan card menyesuaikan dengan ukuran konten */
            margin: 20px; /* Jarak dari elemen lain */
            display: flex;
            flex-direction: column;
            align-items: center; /* Memusatkan konten di dalam card */
        }

        /* Logo styling */
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px; /* Ukuran logo */
            margin: 0 10px; /* Jarak antar logo */
        }

        /* Heading styling */
        h1 {
            text-align: center;
            color: #0044cc; /* Biru tua */
        }

        /* Styling untuk input dan button */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
            box-sizing: border-box; /* Memastikan padding dan border termasuk dalam width */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0044cc; /* Biru tua */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003399; /* Biru lebih gelap */
        }

        /* Pesan sukses */
        .message {
            color: #28a745; /* Hijau */
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Styling footer */
        footer {
            text-align: center;
            color: #666;
            font-size: 14px;
            padding: 10px 0; /* Jarak vertikal pada footer */
            background-color: #ffffff; /* Warna latar belakang footer */
            width: 100%;
        }

        /* Media Query untuk tampilan mobile */
        @media (max-width: 600px) {
            .form-container {
                padding: 15px;
                max-width: 90%; /* Lebar maksimum pada perangkat kecil */
            }

            .logo img {
                width: 80px; /* Ukuran logo lebih kecil untuk mobile */
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="form-container">
            <!-- Bagian logo -->
            {{-- <div class="logo">
                <img src="{{ asset('img/bn.png') }}" alt="Logo"> <!-- Pastikan path logo benar -->
                <img src="{{ asset('img/kpo.png') }}" alt="Logo"> <!-- Pastikan path logo benar -->
            </div> --}}

            <!-- Pesan sukses -->
            @if(session('message'))
            <div class="message">
                {{ session('message') }}
            </div>
            @endif

            <!-- Form Verifikasi Token -->
            <h1>E-Voting OSIS</h1>
            <form action="{{ route('Verification') }}" method="GET">
                @csrf
                <input type="text" name="token" id="token" placeholder="Enter your token">
                <button type="submit">Verify</button>
            </form>
        </div>
    </div>

    <!-- Copyright -->
    <footer>
        &copy; 2024 SMK Bagimu Negeriku
    </footer>
</body>

</html>
