@extends('layouts.dashboard')
@section('title', 'Admin | Data Kategori Makanan')
    
@section('content')
<div class="container">
     <div class="row mb-3">
          @if (session('status'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
          @endif
     </div>
     <div class="row mb-3">
          <div class="col-md-12">
               <div class="card shadow">
                    <div class="card-header d-flex justify-content-between">
                         <h4>Data Kategori Makanan</h4>
                         <a href="{{ route('kategori-makanan.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-bordered table-hover" id="dataTable">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama Kategori</th>
                                             <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @php
                                            $no= 1;
                                        @endphp
                                        @foreach ($kategori_makanan as $km)
                                        <tr>
                                             <td width="5%">{{ $no++ }}</td>
                                             <td>{{ $km->kategori_makanan }}</td>
                                             <td width="17%">
                                                  <a href="{{ route('kategori-makanan.edit', encrypt($km->id)) }}"
                                                      class="btn btn-warning">
                                                      <i class="fa-solid fa-pen-to-square"></i>
                                                  </a>
                                                  <form action="{{ route('kategori-makanan.destroy', encrypt($km->id)) }}"
                                                      method="POST" class="d-inline mb-1">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" class="btn btn-danger"><i
                                                              class="fa-solid fa-trash"></i></button>
                                                  </form>
                                              </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection