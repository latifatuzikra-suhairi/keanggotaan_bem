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
            <h1 class="m-0">Data Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Pendaftar</li>
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


                <div class="card card-success">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pendaftar as $data)
                        {{-- @if (empty($data))
                        <tr>
                          <td colspan="4">Data Kosong</td>
                        </tr> 
                        @else --}}
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $data->nama }}</td>
                          <td>{{ $data->nim }}</td>
                          <td><a href="/pendaftar/detail/{{ $data->id_pendaftaran}}" class="btn btn-primary">Detail</a></td>
                        </tr> 
                        {{-- @endif --}}
                      @endforeach
                    </tbody>
                  </table>
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