@extends('layouts.dashboard')
@section('title', 'Admin | Detail Makanan')
    
@section('content')
<div class="container">
     <div class="row mb-3">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header">
                         <h4>Detail Makanan</h4>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                   <tr>
                                        <th>Gambar</th>
                                        <td><img src="{{ url('storage/makanans/'. $m->gambar) }}" alt="Gambar" class="img img-fluid" width="200"></td>
                                   </tr>
                                   <tr>
                                        <th>Nama Kategori Makanan</th>
                                        <td>{{ $m->kategori_makanans->kategori_makanan }}</td>
                                   </tr>
                                   <tr>
                                        <th>Nama Makanan</th>
                                        <td>{{ $m->nama }}</td>
                                   </tr>
                                   <tr>
                                        <th>Resep</th>
                                        <td>{!! $m->resep !!}</td>
                                   </tr>
                              </table>
                         </div>
                    </div>
                    <div class="card-footer">
                         <a href="{{ route('makanan.index') }}" class="btn btn-secondary float-end">Kembali</a>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection