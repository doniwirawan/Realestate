<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('includes.admin.style')
    <!-- favicon -->
    <link rel="shortcut icon" href="" alt="ptahbali logo">
    <title>IRH ADMIN</title>
</head>
<body id="body-pd">
    @include('includes.admin.header')
   @include('includes.admin.sidebar')
    <!--Container Main start-->
    <main class="py-5">
        @yield('content')
    </main>
    @include('includes.script')
    @include('includes.admin.script')
</body>
</html>