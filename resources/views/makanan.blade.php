@extends('layouts.home')
@section('title', 'Home | Detail Makanan')
    
@section('content')
<div class="row mb-3 p-5" style="width: 100%">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h2>Detail Makanan</h2>
               </div>
               <div class="card-body">
                    <img src="{{ url('storage/makanans/'. $m->gambar) }}" width="100%" class="img img-fluid" alt="">
                    <h2>{{ $m->nama }}</h2>
                    <p>{!! $m->resep !!}</p>
               </div>
          </div>
     </div>
</div>
<div class="row mb-3">
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
<div class="row mb-3">
     <div class="col-md-12 text-center">
          <a href="{{ route('home') }}" class="btn btn-primary text-center">Kembali ke Home</a>
     </div>
</div>
@endsection