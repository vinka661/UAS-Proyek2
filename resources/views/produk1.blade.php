@extends('master')
@section('konten')
 <!-- Header-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($produk as $item)
                <div class="col mb-4">
    <div class="card h-100">
    <img height="150" src="{{asset('storage/'.$item->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">
            <strong>{{$item->namaproduk}}</strong>
            <br>
            <strong>Harga :</strong> {{$item->harga}}
            <hr>
            <strong>Status :</strong>
            {{ $item->status}}
            <br>
            <strong>Stok :</strong>
            {{ $item->stok}}
        </p>
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <br></br>
      </div>
    </div>
  </div>
                    @endforeach
                </div>
            </div>
        @endsection