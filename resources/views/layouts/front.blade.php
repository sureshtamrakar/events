<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Karla&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Home Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline text-right pt-3">
                    <li class="list-inline-item">
                        <a class="text-dark" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer fixed-bottom">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-12 text-center">
                    <p class="mb-2">
                        <a href="#" target="_blank" class="text-muted"><strong>Event App</strong></a> ©
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $("body").on('change', '.orderby', function(e) {
            $('#filter-event').submit();
        });
    </script>
</body>

</html>