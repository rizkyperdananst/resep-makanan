@extends('layouts.dashboard')
@section('title', 'Admin | Edit Makanan')
    
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/summernote/summernote-bs4.min.css') }}">
@endpush
<div class="container">
     <div class="row mb-3">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Edit Makanan</h4>
                    </div>
                    <div class="card-body">
                         <form action="{{ route('makanan.update', encrypt($m->id)) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('put')
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
                                             @if ($m->kategori_makanan_id == $km->id)
                                                  <option value="{{ $km->id }}" selected>{{ $km->kategori_makanan }}</option>                                                
                                             @else
                                                  <option value="{{ $km->id }}">{{ $km->kategori_makanan }}</option>                                                
                                             @endif
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama Makanan</label>
                                        <input type="text" name="nama" value="{{ $m->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Makanan">
                                        @error('nama')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <label for="resep" class="form-label">Resep</label>
                                        <textarea name="resep" id="resep" cols="30" rows="10" class="form-control @error('resep') is-invalid @enderror">{{ $m->resep }}</textarea>
                                        @error('resep')
                                            <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                        @enderror
                                   </div>
                              </div>
                              <div class="row mb-3">
                                   <div class="col-md-12">
                                        <a href="{{ route('makanan.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                        <button class="btn btn-primary float-end">Update</button>
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