@extends('layouts.home')
@section('title', 'Home | Makanan')
    
@section('content')
<div class="row mb-3 p-5" id="makanan" style="background-color: rgb(71, 112, 201)">
     <h1 class="text-center text-white">Makanan</h1>
     @foreach ($makanans as $m)
     <div class="col-md-3">
       <div class="card shadow">
         <div class="card-header">
           <div class="card-title">
             <img src="{{ url('storage/makanans/'. $m->gambar) }}" alt="" class="img img-fluid">
           </div>
           <div class="card-body text-center">
             <h4>{{ $m->nama }}</h4>
             <a href="{{ route('makanan.detail', $m->id) }}" class="btn btn-primary w-100">Lihat Detail</a>
           </div>
         </div>
       </div>
     </div>
     @endforeach
     <div class="col-md-3">
      <h4 class="text-white">Kategori Makanan</h4>
      @foreach ($kategori_makanan as $km)
        <a href="{{ route('data-kategori-makanan', $km->id) }}" class="text-decoration-none text-white"><h6>{{ $km->kategori_makanan }}</h6></a>
      @endforeach
     </div>
   </div>
@endsection