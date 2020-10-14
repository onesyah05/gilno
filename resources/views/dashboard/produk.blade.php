@php
    function rp($nominal){
      $hasil_rupiah = "Rp " . number_format($nominal,2,',','.');
	    return $hasil_rupiah;
    }
@endphp
@include('head')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </div>

  <div class="row mb-3">
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Produk</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">456</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-4x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Total Stok</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">3446</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-check fa-4x text-success"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Total Produk Terjual</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">543</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-clock fa-4x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Area Chart -->
    <div class="col-lg-12">
        <div class="card mb-4">
          @if(session('sukses') )
                <div class="alert alert-success">
                    <h3>{{session('sukses')}}</h3>
                </div>
            @endif
            @if(session('gagal') )
                <div class="alert alert-danger">
                    <h3>{{session('gagal')}}</h3>
                </div>
            @endif
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            <a href="/addProduk" class="btn btn-success"><i class="fas fa-plus"></i> Produk</a>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Kode Produk</th> 
                  <th>Nama PRODUK</th>
                  <th>Jumlah Produk</th>
                  <th>Aksi</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Produk</th> 
                  <th>Nama PRODUK</th>
                  <th>Jumlah Produk</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                  </tr>
              </tfoot>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($produk as $item=>$val)
                      <tr>
                        <td>{{$item+1}}</td>
                        <td>{{$val->kd_produk}}</td>
                        <td>{{$val->produk_name}}</td>
                        <td>{{$val->jumlah}}</td>
                        <td>{{rp($val->harga)}}</td>
                        <td><a class="text-warning" href="/editProduk@php echo $val->id; @endphp">Edit</a> |
                          <a class="text-danger" href="/hapusProduk@php echo $val->id; @endphp">Hapus</a></td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>

  <!--Row-->
@include('footer')
<script>
  $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
  });
</script>