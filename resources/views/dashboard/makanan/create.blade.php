@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Makanan')
    
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/summernote/summernote-bs4.min.css') }}">
@endpush
<div class="container">
     <div class="row mb-3">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Tambah Makanan</h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('makanan.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                        @error('gambar')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                                   <div class="col-md-6">
                                        <label for="kategori_makanan_id" class="form-label">Kategori Makanan</label>
                                        <select name="kategori_makanan_id" id="kategori_makanan_id" class="form-select @error('kategori_makanan_id') is-invalid @enderror">
                                             <option selected hidden>Pilih Kategori Makanan</option>
                                             @foreach ($kategori_makanan as $km)
                                                  <option value="{{ $km->id }}">{{ $km->kategori_makanan }}</option>                                                
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama Makanan</label>
                                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Makanan">
                                        @error('nama')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="resep" class="form-label">Resep</label>
                                        <textarea name="resep" id="resep" cols="30" rows="10" class="form-control @error('resep') is-invalid @enderror"></textarea>
                                        @error('resep')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <a href="{{ route('makanan.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                        <button class="btn btn-primary float-end">Tambah</button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>

@push('scripts')
    <script src="{{ url('assets/summernote/summernote-bs4.min.js') }}"></script>
    <script>
     $(document).ready(function() {
         $('#resep').summernote({
              placeholder: 'Input resep makanan',
              height: 200
          });
     });
   </script>
@endpush
@endsection