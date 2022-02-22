<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <link href="{{ asset('assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.dashboard.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts.dashboard.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')
      </div>
      <!-- Footer -->
      @include('layouts.dashboard.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/dashboard/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('assets/dashboard/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset('assets/dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });

    $('body').on('change', '#brandStatus', function(){
        var id = $(this).attr('data-id');
        // alert(id);
        if(this.checked){
          var status = 1;

        }else{
          var status = 0;
        }
        $.ajax({
          url: 'brandStatus/'+id+'/'status,
          method: 'get',
          success: function(result){
            console.log(result);
          }
        });
    });
    $('body').on('change', '#categoryStatus', function(){
        var id = $(this).attr('data-id');
        // alert(id);
        if(this.checked){
          var status = 1;

        }else{
          var status = 0;
        }
        $.ajax({
          url: 'categoryStatus/'+id+'/'status,
          method: 'get',
          success: function(result){
            console.log(result);
          }
        });
    });

  </script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>

</html>
