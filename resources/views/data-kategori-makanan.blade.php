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
                         <button class="btn btn-primary w-100">Lihat Detail</button>
                    </div>
               </div>
          </a>
     </div>
     @endforeach
</div>
@endsection