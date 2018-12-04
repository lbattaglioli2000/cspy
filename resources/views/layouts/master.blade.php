<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CodeGeek.org">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/brand/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Page plugins -->
    <link type="text/css" href="/assets/vendor/highlight.js/styles/atom-one-dark.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/css/theme.css">


</head>

<body>

@include('layouts.nav')

@yield('content')

@include('layouts.footer')

<!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/in-view/dist/in-view.min.js"></script>

<!-- Page plugins -->
<script src="/assets/vendor/highlight.js/lib/highlight.js"></script>

<!-- Theme JS -->
<script src="/assets/js/theme.min.js"></script>

</body>

</html>
