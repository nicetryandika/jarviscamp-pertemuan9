<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{url('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('images/favicon.png')}}"/>
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    @include('partials._navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('partials._settings-panel')

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebar')
      

      <!-- partial -->
      <!-- content dashboard -->
      @yield('content')
      
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('partials._footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{url('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('js/off-canvas.js')}}"></script>
  <script src="{{url('js/hoverable-collapse.js')}}"></script>
  <script src="{{url('js/template.js')}}"></script>
  <script src="{{url('js/settings.js')}}"></script>
  <script src="{{url('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('js/jquery.cookie.js')}}" type="text/javascript"></script>
  <script src="{{url('js/dashboard.js')}}"></script>
  <script src="{{url('js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>
</html>