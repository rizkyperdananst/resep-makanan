@extends('layouts.home')
@section('title', 'Home | Makanan')
    
@section('content')
<div class="row mb-3 p-5" id="makanan" style="background-image: url('./../img/food.jpg'); background-size: cover">
     <h1 class="text-center text-dark">Makanan</h1>
     @foreach ($makanans as $m)
     <div class="col-md-3">
       <div class="card shadow">
         <div class="card-header">
           <div class="card-title">
             <img src="{{ url('storage/makanans/'. $m->gambar) }}" alt="" class="img img-fluid">
           </div>
           <div class="card-body text-center">
             <h4>{{ $m->nama }}</h4>
             <a href="{{ route('makanan.detail', $m->id) }}" class="btn text-white w-100"  style="background-color: rgb(134, 117, 18)">Lihat Detail</a>
           </div>
         </div>
       </div>
     </div>
     @endforeach
     <div class="col-md-3">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="text-dark">Kategori Makanan</h4>
        </div>
        <div class="card-body">
          @foreach ($kategori_makanan as $km)
            <a href="{{ route('data-kategori-makanan', $km->id) }}" class="text-decoration-none text-dark"><h6>{{ $km->kategori_makanan }}</h6></a>
          @endforeach
        </div>
      </div>
      
      
     </div>
   </div>
@endsection