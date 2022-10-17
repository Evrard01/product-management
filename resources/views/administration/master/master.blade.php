<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDP-@yield('titre','Home')</title>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('administration.layouts.top')
        @include('administration.layouts.aside')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @if (url()->previous() != url()->current() )
                                <li class="breadcrumb-item active"><a href="{{url()->previous()}}">{{strstr(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName(),'.',true)}}</a></li>
                                @endif
                                <li class="breadcrumb-item">{{strstr(Route::currentRouteName(),'.',true)}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>


        @include('administration.layouts.profile')

        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    @livewireScripts
</body>

</html>
