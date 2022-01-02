
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('dashboard.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('dashboard.navbar')
  <!-- /.navbar -->
    @include('dashboard.sidebar')
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kepengurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kepengurusan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('tambah-kepengurusan')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                     <strong>{{ session('success')}}</strong>
            </div>
         @endif
              
         @if(session()->has('error'))
            <div class="alert alert-danger alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>	
                  <strong>{{ session('error')}}</strong>
            </div>
         @endif
            <div class="card-body">
                <div class="card card-success">
                    <div class="card-body">
                      <div class="row">

                        @foreach ($dtKepengurusan as $item)
                            
                        
                        <div class="col-md-12 col-lg-6 col-xl-4">
                          <div class="card mb-2">
                            <img class="card-img-top" src="../img/logoBEM.png" alt="">
                            <div class="card-img-overlay">
                              <a href="/update-kepengurusan/{{ $item->id_kepengurusan}}" class="text-primary"><h3 class="card-title text-primary">Edit</h3><br></a><br><br><br><br>
                              
                              <br><br><br><br><br><br>
                              <a href="/pengurus/{{ $item->id_kepengurusan}}" class="text-primary"><h3 class="card-title text-primary">{{$item->nama_kabinet}} {{$item->periode}} More...</h3><br></a>
                              
                            </div>
                          </div>
                        </div>
                        @endforeach 

                      </div>
                    </div>
                  </div>
                </div>
            </div>
            

      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('dashboard.script')
@include('sweetalert::alert')
</body>
</html>
