<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    @include('includes.admin.script')

    <script>

        $('#delete').on('click', function (e) {
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    form.submit();
                }
            });
        });

    </script>
</body>

</html>
