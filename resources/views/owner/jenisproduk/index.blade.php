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
        <link href="css/styles.css" rel="stylesheet" />
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
                                <li><a class="dropdown-item" href="#!">Data Produk</a></li>
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
            <h1 class="m-0 text-dark">Data Jenis Produk</h1>
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
              <div class="card-header">
                <a href=""><button  class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah Baru</button></a>
              </div>
              <div class="card-body table-responsive p-0" style="height: 400px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID Jenis Produk</th>
                        <th>Nama Jenis Produk</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jenisproduk as $key => $item)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namajenis }}</td>
                            <td>
                              <a href=""><button  class="btn btn-danger btn-sm"><i class="bi-pencil-fill"></i> Edit</button></a>
                              <a href=""><button  class="btn btn-warning btn-sm"><i class="bi-trash"></i> Delete</button></a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
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