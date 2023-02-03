<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>digipine</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('assets/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('assets/css/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('assets/css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('assets/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('assets/css/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('assets/css/summernote-bs4.min.css')}}">

  <link rel="stylesheet" href="{{url('assets/css/fontawesome.min.css')}}">


  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">-->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!--- preloader --->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url('assets/img/digipinee.ico')}}" alt="digipinee" height="60" width="60">
  </div>
   
   @include('layouts.header')
   
   @include('layouts.sidebar')
    
   @yield('content')

   @include('layouts.footer')
   
</div>

<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('assets/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('assets/js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('assets/js/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/js/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('assets/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('assets/js/moment.min.js')}}"></script>
<script src="{{url('assets/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('assets/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('assets/js/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('assets/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('assets/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('assets/js/dashboard.js')}}"></script>
<script src="{{url('assets/js/all.min.js')}}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin='anonymous'></script>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>-->
</body>
</html>