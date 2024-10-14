<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Token Verification</title>
    <style>
        /* Styling untuk body */
        /* Background Image dengan overlay gelap */
        body::before {
            content: "";
            background-image: url('{{ asset('img/GedungA.jpg') }}');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Overlay hitam di atas gambar untuk menggelapkan */
        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Atur intensitas gelapnya */
            z-index: -1;
        }

        /* Pastikan konten di atas background tetap seperti ini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e3f2fd;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            z-index: 1;
        }

        /* Menyusun wrapper untuk form dan footer */
        .content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Styling untuk form box */
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Logo styling */
        .logo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            margin: 0 10px;
        }

        /* Heading styling */
        h1 {
            text-align: center;
            color: #0044cc;
        }

        /* Styling untuk input dan button */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #c0c0c0;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0044cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003399;
        }

        /* Pesan sukses */
        .message {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Styling footer */
        footer {
            text-align: center;
            color: #666;
            font-size: 14px;
            padding: 10px 0;
            background-color: #ffffff;
            width: 100%;
        }

        /* Media Query untuk tampilan mobile */
        @media (max-width: 600px) {
            .form-container {
                padding: 15px;
                max-width: 90%;
            }

            .logo img {
                width: 80px;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="form-container">
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
