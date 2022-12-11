<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Basic Action Bar | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('header')
       @include('sidebar')
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Dashboard</h1>
                   
                </div>
                 </div>
    <!-- end of row-->
    <div class="card mb-4">
        <div class="card-header">Featured</div>
        <div class="card-body">
            <h5 class="card-title">List des autorisation</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary btn-rounded" href="{{url('listautorisation')}}">voire listes</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">Featured</div>
        <div class="card-body">
            <h5 class="card-title">Demande d'autorisation</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary btn-rounded" href="{{url('demande')}}">nouveau demande</a>
        </div>
    </div>
    
       
    <!-- end of row-->   
            <div class="flex-grow-1"></div>
           
            <!-- fotter end -->
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="../../dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="../../dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="../../dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../dist-assets/js/scripts/script.min.js"></script>
    <script src="../../dist-assets/js/scripts/sidebar.large.script.min.js"></script>
   
</body>

</html>