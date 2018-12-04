<!doctype html>
<html lang="en">
<head>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6185605131625070",
            enable_page_level_ads: true
        });
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/dashboard/assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/highlight.js/styles/vs2015.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/dashboard/assets/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/dashboard/assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="/dashboard/assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>body { display: none; }</style>

    <script>
        var colorScheme = ( localStorage.getItem('dashkitColorScheme') ) ? localStorage.getItem('dashkitColorScheme') : 'light';
    </script>


    <title>@yield('title')</title>
</head>
<body>

<!-- NAVIGATION
================================================== -->

@include('student.layouts.nav')


<!-- MAIN CONTENT
================================================== -->

@yield('content')


<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="/dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/dashboard/assets/libs/chart.js/dist/Chart.min.js"></script>
<script src="/dashboard/assets/libs/chart.js/Chart.extension.min.js"></script>
<script src="/dashboard/assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="/dashboard/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="/dashboard/assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="/dashboard/assets/libs/list.js/dist/list.min.js"></script>
<script src="/dashboard/assets/libs/quill/dist/quill.min.js"></script>
<script src="/dashboard/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="/dashboard/assets/libs/select2/dist/js/select2.min.js"></script>

<!-- Theme JS -->
<script src="/dashboard/assets/js/theme.min.js"></script>

</body>
</html>
