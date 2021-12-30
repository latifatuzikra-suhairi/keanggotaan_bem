<!DOCTYPE html>
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
            <h1 class="m-0">Data Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Pengurus</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body">
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

                  <div class="table-responsive p-2">
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">NIM</th>
                          <th scope="col">Dinas/Biro</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dtPengurus as $data)
                          <tr>
                            <th scope="row">{{ $data->id_pengurus }}</th>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nim }}</td>
                            <td>{{ $data->nama_dinasbiro}}</td>
                            <td><a href="/pengurus/detail/{{ $data->id_pengurus}}"><i class="fas fa-eye"></i></a></td>
                          </tr> 
                        @endforeach
                      </tbody>
                    </table>

                    <div class="mr-2 text-muted" style="font-size: 15px; float:right;">
                   </div><br>
                  <div class="mr-2 pagination pagination-md" style="float:right;">

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
</body>
</html>