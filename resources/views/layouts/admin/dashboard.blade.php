<!-- -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PTAH - Your Dream Project Become Reality</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Invest in Bali 2021, ptahbali, project management company in bali, invest property in bali, project management company based in bali, ptahbali.com, investing in bali, investing in ubud, investing in lombok, investing in nusa penida, cheap property in bali, villa for sale in bali, cheap villa in bali 2021" name="keywords">
    <meta content="PTAH is a construction consulting and project management company based in Indonesia. We offer custom solutions to materialize your project. Our experience and knowledge in the locally available materials and techniques will help us guide you towards achieving your goals. From tree house to villa, from restaurant to hotel, we can make your project a reality. We have 50+ different partners from legal, architectural, engineering, building, marketing, and operations management. We will pick and manage the ones best suited for your project." name="description">

    @include('includes.admin.style')
    
    <!-- favicon -->
    <link rel="shortcut icon" href="https://ptahbali.com/img/favicon.ico" alt="ptahbali logo">

    <title>PTAH BALI ADMIN</title>
</head>

<body id="body-pd">
    @include('includes.admin.header')
   @include('includes.admin.sidebar')
    <!--Container Main start-->
    <main class="py-5">
        @yield('content')

    </main>
    @include('includes.admin.script')





</body>

</html>