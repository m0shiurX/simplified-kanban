<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div id="app">
        <app />
    </div>
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
