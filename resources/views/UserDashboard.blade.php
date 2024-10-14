<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/kpo.png') }}">
    <title>Dashboard PEMILOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #34495e;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #ecf0f1;
        }

        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            color: #2c3e50;
        }

        .paslon-card {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .paslon-card img {
            width: 90%;
            max-width: 350px;
            height: auto;
            border-radius: 15px;
            object-fit: cover;
            object-position: top;
            transform: scale(1.05);
        }

        .paslon-card h5 {
            margin-top: 15px;
            font-size: 1.6rem;
            font-weight: bold;
        }

        .paslon-card p {
            margin-top: 10px;
            font-size: 1rem;
            text-align: justify;
        }

        .btn-vote {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        .visi-misi {
            text-align: left;
        }

        /* Menyelaraskan card dengan ketinggian yang sama */
        .row {
            display: flex;
        }

        .paslon-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- Paslon 1 -->
            <div class="col-md-6 d-flex">
                <div class="paslon-card w-100">
                    <!-- Tambahkan mx-auto untuk membuat gambar center -->
                    <img src="{{ asset('img/1.png') }}" alt="Paslon 1" class="mx-auto">
                    <div class="visi-misi">
                        <p><strong>Visi:</strong> Mewujudkan OSIS yang inklusif dan terbuka bagi seluruh siswa, serta
                            berdaya guna dalam segala aspek, menjadi wadah untuk menyalurkan potensi dan kreativitas siswa.</p>
                        <p><strong>Misi:</strong></p>
                        <ul>
                            <li>Melibatkan siswa dan guru dalam pengambilan keputusan.</li>
                            <li>Mengadakan kegiatan yang seru dan positif berlandaskan nilai-nilai Pancasila.</li>
                            <li>Menyertakan organisasi-organisasi sekolah dalam pelaksanaan kegiatan OSIS.</li>
                            <li>Menjadi sarana penyaluran potensi dan kreativitas siswa.</li>
                            <li>Menjembatani aspirasi siswa untuk sekolah.</li>
                            <li>Meningkatkan kesadaran akan kebersihan lingkungan.</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-vote" onclick="confirmVote('Paslon 1', '{{ route('Paslon1') }}')">Vote Paslon 1</button>
                </div>
            </div>

            <!-- Paslon 2 -->
            <div class="col-md-6 d-flex">
                <div class="paslon-card w-100">
                    <!-- Tambahkan mx-auto untuk membuat gambar center -->
                    <img src="{{ asset('img/2.png') }}" alt="Paslon 2" class="mx-auto">
                    <div class="visi-misi">
                        <p><strong>Visi:</strong> Menjadikan siswa/i SMK Bagimu Negeriku berkarakter budi pekerti, berkualitas,
                            berdaya, dan berprestasi sesuai dengan nilai-nilai Pancasila.</p>
                        <p><strong>Misi:</strong></p>
                        <ul>
                            <li>Mengembangkan nilai-nilai budi pekerti, kualitas, daya saing, dan prestasi (4B).</li>
                            <li>Mengadakan kegiatan yang memberikan dampak positif untuk sekolah.</li>
                            <li>Mewujudkan sikap hormat dan menjaga persatuan antar siswa.</li>
                            <li>Berpartisipasi aktif dalam perlombaan akademik maupun non-akademik.</li>
                            <li>Meningkatkan kedisiplinan melalui peraturan yang tegas dan tanggung jawab.</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-vote" onclick="confirmVote('Paslon 2', '{{ route('Paslon2') }}')">Vote Paslon 2</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmVote(paslon, route) {
            Swal.fire({
                title: 'Apakah Anda yakin memilih ' + paslon + " ?",
                // text: "Akan memberikan vote kepada " + paslon,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Vote sekarang!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = route;
                }
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
