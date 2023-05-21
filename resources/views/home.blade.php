@extends('layouts.home')
@section('title', 'Home | Makanan')
    
@section('content')
<div class="row mb-3 p-5" id="makanan">
     <h1 class="text-center">Makanan</h1>
     @foreach ($makanans as $m)
     <div class="col-md-3">
       <div class="card shadow">
         <div class="card-header">
           <div class="card-title">
             <img src="{{ url('storage/makanans/'. $m->gambar) }}" alt="" class="img img-fluid">
           </div>
           <div class="card-body text-center">
             <h4>{{ $m->nama }}</h4>
             <a href="{{ route('makanan.detail', $m->id) }}" class="btn btn-secondary w-100">Lihat Detail</a>
           </div>
         </div>
       </div>
     </div>
     @endforeach
   </div>
@endsection