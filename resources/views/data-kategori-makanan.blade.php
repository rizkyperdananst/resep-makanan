@extends('layouts.home')
@section('title', 'Home | Kategori Makanan')
    
@section('content')
<div class="row">
     <h4 class="text-center">Kategori Makanan : {{ $km->kategori_makanan }}</h4>
     @foreach ($makanans as $m)
     <div class="col-md-3 mb-3">
          <a href="{{ route('makanan.detail', $m->id) }}" class="text-decoration-none">
               <div class="card shadow">
                    <div class="card-body">
                         <img src="{{ url('storage/makanans/'. $m->gambar) }}" class="img img-fluid" alt="">
                         <h5>{{ $m->nama }}</h5>
                         <button class="btn text-white w-100" style="background-color: rgb(134, 117, 18)">Lihat Detail</button>
                    </div>
               </div>
          </a>
     </div>
     @endforeach
</div>
<div class="row d-flex justify-content-center align-items-center mb-3">
     <div class="col-md-12 text-center">
          <a href="{{ route('home') }}" class="btn text-white" style="background-color: rgb(134, 117, 18)">Kembali</a>
     </div>
</div>
@endsection