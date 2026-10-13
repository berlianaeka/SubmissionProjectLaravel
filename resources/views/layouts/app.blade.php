<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Praktikum Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #222;
        }

        nav {
            background-color: #e5e7eb;
            padding: 15px;
            margin-bottom: 20px;
        }

        nav a {
            margin-right: 18px;
            color: #1d4ed8;
            text-decoration: none;
        }

        main {
            min-height: 300px;
        }

        footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #ccc;
        }

        .alert {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-sukses {
            background-color: #d1fae5;
            color: #065f46;
        }

        .alert-bahaya {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .alert-info {
            background-color: #dbeafe;
            color: #1e40af;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e5e7eb;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Praktikum Laravel
    </footer>
</body>
</html>