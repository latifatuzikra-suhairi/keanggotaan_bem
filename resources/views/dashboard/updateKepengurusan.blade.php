
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
            <h1 class="m-0">Edit Kepengurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kepengurusan</li>
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
                    <a href="{{ route('kepengurusan')}}" class="btn btn-success">Kembali <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            
            <div class="card-body">
                <form  method="post" action="/update-kepengurusan/{{$editkp->id_kepengurusan}}" enctype="multipart/form-data"  onsubmit="return confirm('Yakin update data?')">
                    {{ csrf_field()}}
                    <div class="form-group">
                        <label for="nama_kabinet" class="form-label">Nama Kabinet</label><br>
                        <input type="text" id="nama_kabinet" name="nama_kabinet" class="form-control" placeholder="Nama Kabinet" value="{{$editkp->nama_kabinet}}" required>
                    </div>
                    <div class="form-group">
                        <label for="periode" class="form-label">Periode Kepengurusan</label><br>
                        <input type="text" id="periode" name="periode" class="form-control" placeholder="Periode Kepengurusan" value="{{$editkp->periode}}" required>
                    </div>
                    <div class="form-group">
                        <label for="status" class="form-label">Status Kepengurusan</label><br>
                        @if ($editkp->status_kepengurusan == 1)
                        <input type="radio" name="status" value="1" checked> Aktif  
                        <input type="radio" name="status" value="0" > Tidak Aktif 
                        @else
                        <input type="radio" name="status" value="1"> Aktif  
                        <input type="radio" name="status" value="0" checked> Tidak Aktif 
                        @endif
                      </div>
                    <div class="form-group">
                        <label for="logo" class="form-label">Logo Kabinet</label><br>
                        <input type="file" id="logo" name="logo" class="form-control" placeholder="Logo Kabinet" value="{{$editkp->logo_kabinet}}" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
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
