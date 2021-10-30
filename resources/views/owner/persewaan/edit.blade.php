@extends('master')
@section('konten') 
 <!-- Content Header (Page header) -->
 <section>
    <div class="container ">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                          <br>
                            <h2 class="m-0 text-dark"><strong>Edit Persewaan</strong></h2>
                          <br>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->

        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <form role="form" action="{{ route('updatePersewaan', $persewaan->id) }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_persewaan"><strong>ID Persewaan</strong></label>
                    <input type="text" class="form-control" id="id_persewaan" name="id_persewaan" value="{{ $persewaan->id }}" disabled><br>
                  </div>
                  <div class="form-group">
                    <label for="qty"><strong>QTY</strong></label>
                    <input type="number" class="form-control" id="qty" name="qty" value="{{ $persewaan->qty }}"><br>
                  </div>
                  <div class="form-group"> 
                    <label for="tanggal_sewa"><strong>Tanggal Sewa</strong></label>                 
                    <input type="datetime" class="form-control" required="required" id ="tanggal_sewa" name="tanggal_sewa" value="{{ $persewaan->tanggal_sewa }}"></br> 
                 </div> 
                 <br>
                  <div class="form-group">
                    <label for="harga_total"><strong>Harga Total</strong></label>
                    <input type="number" class="form-control" id="harga_total" name="harga_total" value="{{ $persewaan->harga_total }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="bayar"><strong>Bayar</strong></label>
                    <input type="number" class="form-control" id="bayar" name="bayar" value="{{ $persewaan->bayar }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="kembalian"><strong>Kembalian</strong></label>
                    <input type="number" class="form-control" id="kembalian" name="kembalian" value="{{ $persewaan->kembalian }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="user"><strong>Customer</strong></label>
                    <select class="form-control select2bs4" name="user" id="user" style="width: 100%;">
                      @foreach ($sistemuser as $item)
                        <option value="{{ $item->id }}" {{ $persewaan->id_user == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="produk"><strong>Produk</strong></label>
                    <select class="form-control select2bs4" name="produk" id="produk" style="width: 100%;">
                      @foreach ($produk as $item)
                        <option value="{{ $item->id }}" {{ $persewaan->id_produk == $item->id ? 'selected' : '' }}>{{ $item->namaproduk }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="{{ route('persewaan') }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
</div>
</div>
<br></br>
      @endsection
