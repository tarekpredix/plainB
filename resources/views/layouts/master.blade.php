<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-bootstrap.png">
</head>

<body>
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')
</body>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

</html>