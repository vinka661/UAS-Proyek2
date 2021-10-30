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
            <h2 class="m-0 text-dark"><strong>TAMBAH PERSEWAAN BARU</strong></h2>
           </br>
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
              <form role="form" action="{{ route('storePersewaan') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="qty"><strong>QTY</strong></label>
                    <input type="number" class="form-control" id="qty" name="qty" placeholder="QTY" required></br>
                  </div>
                  <div>
                    <label for="tanggal_sewa"><strong>Tanggal Sewa</strong></label>                 
                    <input type="datetime" class="form-control" required="required" name="tanggal_sewa" placeholder="Tanggal Sewa"></br> 
                  </div>
                  <div class="form-group">
                    <label for="harga_total"><strong>Harga Total</strong></label>
                    <input type="number" class="form-control" id="harga_total" name="harga_total" placeholder="Harga Total" required></br>
                  </div>
                  <div class="form-group">
                    <label for="bayar"><strong>Bayar</strong></label>
                    <input type="number" class="form-control" id="bayar" name="bayar" placeholder="Bayar" required></br>
                  </div>
                  <div class="form-group">
                    <label for="kembalian"><strong>Kembalian</strong></label>
                    <input type="number" class="form-control" id="kembalian" name="kembalian" placeholder="Kembalian" required></br>
                  </div>
                  <div class="form-group">
                    <label for="user"><strong>Customer</strong></label>
                    <select class="form-control select2bs4" name="user" id="user" style="width: 100%;" required></br>
                      @foreach ($sistemuser as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="produk"><strong>Produk</strong></label>
                    <select class="form-control select2bs4" name="produk" id="produk" style="width: 100%;" required></br>
                      @foreach ($produk as $item)
                        <option value="{{ $item->id }}">{{ $item->namaproduk }}</option>
                      @endforeach
                    </select>
                  </div>
                    </div>
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
    <!-- /.content -->
    @endsection