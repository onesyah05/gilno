
@include('head')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Produk</a></li>
      <li class="breadcrumb-item active" aria-current="page">Produk</li>
    </ol>
  </div>

  <div class="row mb-3">
    <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
          </div>
          <div class="card-body">
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
            <form method="POST" action="/addProduk">
                @csrf()
                <div class="form-group">
                    <label for="inputName">Kode Produk</label>
                    <input type="text" class="form-control" id="inputName" name="kd" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="inputNIK">Nama Produk</label>
                    <input type="text" class="form-control" id="inputNIK" name="nama" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="inputKPT">Jumlah</label>
                    <input type="number" class="form-control" id="inputKTP" name="jumlah" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Harga</label>
                    <input type="number" class="form-control" id="inputAddress" name="harga" placeholder="" required>
                </div>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
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