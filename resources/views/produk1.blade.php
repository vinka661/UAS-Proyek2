@extends('master')
@section('konten')
 <!-- Header-->
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($produk as $item)
                <div class="col mb-4">
    <div class="card h-100">
    <img src="{{asset('storage/'.$item->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">
        <strong>{{$item->namaproduk}}</strong>
        <br>
        <strong>Harga :</strong> {{$item->harga}}
        <hr>
        <p class="card-text">SIZE : S M L XL </p>
        <strong>Status :</strong>
        {{ $item->status}}
        </p>
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          <br></br>
          <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Pesan</a>
      </div>
    </div>
  </div>
                    @endforeach
                </div>
            </div>
        @endsection