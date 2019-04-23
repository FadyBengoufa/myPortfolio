<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Fady Bengoufa</title>
</head>
<style>

</style>
<body>
    <!--NAVBAR FILE INCLUDE-->
    @include('includes.nav')

    <!--MAIN-->
    
        @yield('content')


    <!--FOOTER FILE INCLUDE-->
    @include('includes.footer')
    @yield('script-navbar-change')

</body>
</html>