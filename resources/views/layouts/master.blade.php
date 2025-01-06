<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=100%, maximum-scale=1.0" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/create.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/globals.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/table-container.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-container.css') }}" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 0; background: #e9ecef">
    <div class="container-center-horizontal">
        <div class="master screen">
            <div class="overlap-group11">
                <div class="overlap-group10">
                    <div class="background"></div>

                    @include('layouts.topbar')

                    <div class="master-container">
                        @yield('content')
                    </div>

                    @include('layouts.sidebar')

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
