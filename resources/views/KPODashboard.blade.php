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
            height: 100vh; /* Mengatur tinggi body untuk penuh layar */
            margin: 0; /* Menghapus margin default */
            display: flex; /* Menggunakan flexbox untuk penataan */
            justify-content: center; /* Mengatur konten ke tengah horizontal */
            align-items: center; /* Mengatur konten ke tengah vertikal */
            position: relative; /* Menyimpan posisi relatif untuk overlay */
        }

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
            background-color: rgba(0, 0, 0, 0.5);
            /* Atur intensitas gelapnya */
            z-index: -1;
        }

        .card {
            width: 400px;
            height: 400px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            /* Card tidak lagi transparan */
            border-radius: 15px;
            /* Membuat sudut card melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow agar terlihat terangkat */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-body h1 {
            font-size: 84px;
            margin: 0;
        }

        .card-body p {
            margin-top: 10px;
            font-size: 24px;
            color: #6c757d;
        }

        .logo-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-wrapper img {
            height: 60px;
            margin: 0 10px;
            /* Jarak antar logo */
        }
    </style>
</head>

<body>
    <div class="card shadow-lg">
        <div class="card-body">
            <!-- Logo Wrapper -->
            <div class="logo-wrapper">
                <div style="text-align: center;">
                    <img src="https://smkbagimunegeriku.sch.id/wp-content/uploads/2021/12/cropped-Logo-BN-512x512-1.png"
                        alt="Second Image" style="height: 70px; margin-bottom: 10px;">
                    <img src="https://e-voting.smakaren.sch.id/Assets/img/kpo-new.png" alt="Logo KPO"
                        style="height: 70px; margin-bottom: 10px;">
                </div>
            </div>
            <!-- Konten utama -->
            <h1>{{ $total }}</h1>
            <p>Total Votes</p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
