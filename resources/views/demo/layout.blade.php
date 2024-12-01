<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Layout Demo</h1>
    @yield('content')

    <h1>Footer</h1>
    <!-- @yield('footer') -->
    @section('footer')
        <p>This is the footer.</p>
    @show
</body>
</html>