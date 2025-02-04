<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" href="{{ asset('master/css/main.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('master/css/buttons.dataTables.min.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{config('app.name')}}</title>
  </head>
  <body>
    @yield('content')

    <script src="{{ asset('master/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('master/js/popper.min.js') }}"></script>
    <script src="{{ asset('master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('master/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('master/js/plugins/pace.min.js') }}"></script>

    @yield('after_script')
    
  </body>
</html>