<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    </head>
    <body>
      <!-- Navigation--> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-1">
                <a class="navbar-brand" href="#!">MDR SOUND SYSTEM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('produk') }}">Data Produk</a></li>
                                <li><a class="dropdown-item" href="{{ route('jenisproduk') }}">Data Jenis Produk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">Persewaan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sistem User</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-search"></i>
                            Search...
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Produk</h1>
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
              <form role="form" action="{{ route('updateProduk', $produk->id) }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_produk">ID Produk</label>
                    <input type="text" class="form-control" id="id_produk" name="id_produk" value="{{ $produk->id }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="namaproduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="{{ $produk->namaproduk }}">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">
                  </div>
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $produk->satuan }}">
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <div class="d-flex">
                        <div class="custom-control custom-radio mr-3">
                          <input class="custom-control-input" type="radio" id="disewa" name="status" value="Disewa" {{ $produk->status == 'Disewa' ? 'checked' : ''}}>
                          <label for="disewa" class="custom-control-label">Disewa</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="belum_sewa" name="status" value="Belum Sewa" {{ $produk->status == 'Belum Sewa' ? 'checked' : ''}}>
                          <label for="belum_sewa" class="custom-control-label">Belum Sewa</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control select2bs4" name="jenis" id="jenis" style="width: 100%;">
                      @foreach ($jenisproduk as $item)
                        <option value="{{ $item->id }}" {{ $produk->id_jenis == $item->id ? 'selected' : '' }}>{{ $item->namajenis }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="{{ route('produk') }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
        </div>
    </body>
</html>
