<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Token Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Token Table</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Token</th>
            </tr>
        </thead>
        <tbody>
            @foreach($token as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->token }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
