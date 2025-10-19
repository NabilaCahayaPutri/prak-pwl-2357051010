
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* Soft pink theme */
        :root{
            --pink-50: #fff5f7;
            --pink-100: #ffeef4;
            --pink-200: #ffd6e6;
            --pink-300: #ffb8d2;
            --pink-500: #ff6fa8;
            --muted: #6b4a5b;
        }
        body{
            background: linear-gradient(180deg, var(--pink-50), #fff);
            color: var(--muted);
        }
        .navbar, .bg-light{
            background-color: var(--pink-100) !important;
            border-bottom: 1px solid rgba(0,0,0,0.04);
        }
        .card{
            background: #fff;
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.04);
        }
        .btn-primary{
            background-color: var(--pink-500);
            border-color: var(--pink-500);
            box-shadow: none;
        }
        .btn-outline-primary{
            color: var(--pink-500);
            border-color: rgba(255,111,168,0.4);
        }
        .btn-primary:hover{ background-color: #ff4c8e; border-color:#ff4c8e }
        .table thead.table-light th{ background: transparent; color:var(--muted) }
        footer.bg-light{ background: transparent; }
        .container .card{ box-shadow: 0 6px 18px rgba(140,45,84,0.06); }
        a.nav-link.active{ color: var(--pink-500) !important; font-weight:600 }
        .form-control:focus{ box-shadow: 0 0 0 0.12rem rgba(255,111,168,0.15); border-color: var(--pink-300); }
    </style>
    </head>
    <body class="d-flex flex-column min-vh-100">
        @include('partials.navbar')

        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguNFkB6L8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"></script>
        @stack('scripts')
    </body>
</html>
