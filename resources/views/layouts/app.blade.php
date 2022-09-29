<html>
    <head>
        <title>Laravel Static Website Development</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container">
            @include('inc.topnav')
            <br>
            <!--Welcome to APWT-->
            <div>
                @yield('content')
            </div>
        </div>
    </body>
    </html>