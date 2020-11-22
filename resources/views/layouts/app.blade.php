<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} - FedCar Rental</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('style.css')}}">

    <link rel="icon" href="{{ asset('dist/img/logo-rental-mobil.png')}}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" >
        @guest
            @yield('login')
        @else
            @include('layouts.navbar')
            @include('layouts.sidebar')
            <div class="content-wrapper">
                
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>{{ $title }}</h1>
                            </div>
                        </div>
                        @include('layouts.flash-message')

                    </div>
                </section>
                @yield('content')
            </div>

            @include('layouts.footer')
        @endguest
    
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src=" {{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function(){
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true,
        changeMonth: true, yearRange: '1945:'+(new Date).getFullYear() });
        $( "#datepickers" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true,
        changeMonth: true, yearRange: '1945:'+(new Date).getFullYear() });
        });
    </script>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>

    <script>
    $(function () {
        $("#myTable").DataTable();
    });
   
    </script>

    @stack('scripts')
          
</body>
</html>
