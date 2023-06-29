@extends('layouts.dashboard')
@section('title', 'Admin | Edit Data Kategori Makanan')
    
@section('content')
<div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Kategori Makanan</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('kategori-makanan.update', encrypt($km->id)) }}" method="POST">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="kategori_makanan" class="form-label">Nama Kategori Makanan</label>
                                   <input type="text" name="kategori_makanan" value="{{ $km->kategori_makanan }}" id="kategori_makanan" class="form-control @error('kategori_makanan') is-invalid @enderror" placeholder="masukkan nama kategori makanan">
                                   @error('kategori_makanan')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <a href="{{ route('kategori-makanan.index') }}" class="btn btn-secondary float-end ms-3">Kembali</a>
                                   <button class="btn btn-primary float-end">Update</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection