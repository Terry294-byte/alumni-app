<!DOCTYPE html>
<html>
<head>
    <title>Alumni Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding-top: 70px; /* height of navbar */
            padding-bottom: 50px; /* height of footer */
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .content {
            max-width: 960px;
            margin: auto;
            background: white;
            padding: 20px;
            min-height: calc(100vh - 120px); /* adjusted for header+footer */
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
