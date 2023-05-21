@extends('layouts.dashboard')
@section('title', 'Admin | Data Makanan')
    
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
                         <h4>Data Makanan</h4>
                         <a href="{{ route('makanan.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-bordered table-hover" id="dataTable">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Gambar</th>
                                             <th>Nama Makanan</th>
                                             <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @php
                                            $no= 1;
                                        @endphp
                                        @foreach ($makanans as $m)
                                        <tr>
                                             <td width="5%">{{ $no++ }}</td>
                                             <td width="20%"><img src="{{ url('storage/makanans/'. $m->gambar) }}" alt="Gambar" class="img img-fluid" width="150"></td>
                                             <td>{{ $m->nama }}</td>
                                             <td width="17%">
                                                  <a href="{{ route('makanan.show', encrypt($m->id)) }}"
                                                      class="btn btn-primary">
                                                      <i class="fa-solid fa-eye"></i>
                                                  </a>
                                                  <a href="{{ route('makanan.edit', encrypt($m->id)) }}"
                                                      class="btn btn-warning">
                                                      <i class="fa-solid fa-pen-to-square"></i>
                                                  </a>
                                                  <form action="{{ route('makanan.destroy', encrypt($m->id)) }}"
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