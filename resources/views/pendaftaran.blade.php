<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

      {{-- logo fti --}}
      <link rel="shortcut icon" href="{{ asset('img/logoBEM.png') }}">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>BEM KM FTI</title>
   </head>
   <body>
      <img src="{{ asset('img/header-bg.svg') }}" class="position-absolute top-0 end-0 d-none d-lg-block" style="transform: translateX(40px);">
      <div class="container py-2 bg-blue text-black">
         <a href="#">
            <img src="{{ asset('img/logoBEM.png') }}" height="60px">
        </a>
        <span class="me-2">BEM KM FTI</span>

        <h2 class="bold-1 mt-3"><b>Pendaftaran Pengurus BEM KM FTI </b></h2>
        <h3 class="mb-2">Kabinet {{ $kabinet->nama_kabinet }}</h3>

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

        <div class="card py-3 px-4 shadow-md">
         <form method="POST" action="{{ route('daftar.simpan') }}" enctype="multipart/form-data" onsubmit="return confirm('Yakin akan mendaftar?')">
         @csrf
         <input type="hidden" class="form-control" id="id_kepengurusan" name="id_kepengurusan" value="{{ $kabinet->id_kepengurusan }}">
         <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="{{ $id_pendaftar }}">

         <div class="row g-3 card-body">
            <h5>Data Diri Anda</h5><hr style="margin-top:-8px">
            <div class="col-md-4">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
              @error('nama')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim">
              @error('nim')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-5">
               <label for="nim" class="form-label">Jurusan</label>
               <select class="form-select @error('jurusan') is-invalid @enderror" aria-label="Default select example" name="jurusan">
                  <option value="" selected disabled>Pilih Jurusan</option>
                  <option value="1">Teknik Komputer</option>
                  <option value="2">Sistem Informasi</option>
                </select>
                @error('jurusan')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
               @error('email')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-3">
               <label for="no_hp" class="form-label">No HP</label>
               <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp">
               @error('no_hp')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-3">
               <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
               <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir">
               @error('tempat_lahir')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-3">
               <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
               <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir">
               @error('tgl_lahir')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
         </div>

         <div class="row g-3 card-body">
         <h5>Tentang Diri Anda</h5><hr style="margin-top:-8px" >
            <div class="col-md-6">
               <label for="kelebihan">Kelebihan Anda</label>
               <textarea class="form-control @error('kelebihan') is-invalid @enderror" placeholder="Ceritakan kelebihan Anda" id="kelebihan" name="kelebihan"></textarea>
               @error('kelebihan')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="kekurangan">Kekurangan Anda</label>
               <textarea class="form-control @error('kekurangan') is-invalid @enderror" placeholder="Ceritakan kekurangan Anda" id="kekurangan" name="kekurangan"></textarea>
               @error('kekurangan')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="motivasi">Motivasi Anda</label>
               <textarea class="form-control @error('motivasi') is-invalid @enderror" placeholder="Ceritakan motivasi Anda bergabung ke dalam BEM KM FTI Unand" id="motivasi" name="motivasi"></textarea>
               @error('motivasi')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="motto">Motto Hidup Anda</label>
               <textarea class="form-control @error('motto') is-invalid @enderror" placeholder="Sampaikan motto hidup Anda" id="motto" name="motto"></textarea>
               @error('motto')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="pilihan_1" class="form-label">Pilihan 1 Dinas/Biro</label>
               <select class="form-select @error('pilihan_1') is-invalid @enderror" aria-label="Default select example" name="id_pilihan_1" required>
                  <option value="" selected disabled>Pilih Dinas/Biro</option>
                  @foreach ($dinas_biro as $data)
                  <option value="{{ $data->id_dinasbiro }}">{{ $data->nama_dinasbiro }}</option>
                  @endforeach
                </select>
                @error('pilihan_1')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="pilihan_2" class="form-label">Pilihan 2 Dinas/Biro</label>
               <select class="form-select @error('pilihan_2') is-invalid @enderror" aria-label="Default select example" name="id_pilihan_2" required> 
                  <option value="" selected disabled>Pilih Dinas/Biro</option>
                  @foreach ($dinas_biro as $data)
                  <option value="{{ $data->id_dinasbiro }}">{{ $data->nama_dinasbiro }}</option>
                  @endforeach
                </select>
                @error('pilihan_2')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="alasan_pil_1">Alasan Pilihan 1 Dinas/Biro</label>
               <textarea class="form-control @error('alasan_pil_1') is-invalid @enderror" placeholder="Alasan Pilihan 1 Dinas/Biro yang Anda Pilih" id="alasan_pil_1" name="alasan_pil_1"></textarea>
               @error('alasan_pil_1')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="alasan_pil_2">Alasan Pilihan 2 Dinas/Biro</label>
               <textarea class="form-control @error('alasan_pil_2') is-invalid @enderror" placeholder="Alasan Pilihan 2 Dinas/Biro yang Anda Pilih" id="alasan_pil_2" name="alasan_pil_2"></textarea>
               @error('alasan_pil_2')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
         </div>

         <div class="row g-3 card-body">
            <h5>Berkas Anda</h5><hr style="margin-top:-8px">
            <div class="col-md-6">
               <label for="filefoto" class="form-label">Foto Anda</label>
               <input class="form-control @error('foto') is-invalid @enderror" type="file" id="filefoto"name="foto">
               @error('foto')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="filekrs" class="form-label">Kartu Rencana Studi</label>
               <input class="form-control @error('krs') is-invalid @enderror" type="file" id="filekrs" name="krs">
               @error('krs')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="filetranskrip" class="form-label">Transkrip Nilai</label>
               <input class="form-control @error('transkrip') is-invalid @enderror" type="file" id="filetranskrip" name="transkrip">
               @error('transkrip')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <div class="col-md-6">
               <label for="filesp" class="form-label">Surat Pernyataan Mengikuti OR</label>
               <input class="form-control  @error('surat_pernyataan') is-invalid @enderror" type="file" id="filesp" name="surat_pernyataan">
               @error('surat_pernyataan')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
              @enderror
            </div>
            <p><a href="https://docs.google.com/document/d/1nvdRgqiLHuAANrxixZgSJOdWmQ0Kvy2o/edit?usp=drivesdk&ouid=113787997607381864265&rtpof=true&sd=true" target="_blank" download>*Download Template Surat Pernyataan</a></p>
         </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Daftar</button>
              <a href="/" class="btn btn-warning">Kembali</a>
            </div>
          </form>
         </div>
      </div>

         <img src="{{ asset('img/wave.svg') }}" width="100%" align="bottom">
   </body>
</html>