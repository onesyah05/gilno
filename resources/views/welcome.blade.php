
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
              <div class="text-xs font-weight-bold text-uppercase mb-1">Penjualan Setahun Bejalan</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">12430</div>
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
              <div class="text-xs font-weight-bold text-uppercase mb-1">Penjualan Sebulan Berjalan</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">325</div>
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
              <div class="text-xs font-weight-bold text-uppercase mb-1">Penjualan Hari Ini</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">54</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-clock fa-4x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pendapatan Setahun Berjalan</div>
              <div class="h2 mb-0 font-weight-bold text-gray-800">Rp. 355.065.000,00</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-4x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-uppercase mb-1">Pendapatan Bulan Lalu</div>
              <div class="h2 mb-0 font-weight-bold text-gray-800">Rp. 34.675.000,00</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-4x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- New User Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Pendapatan Bulan ini</div>
              <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800">Rp. 23.540.000,00</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-4x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-uppercase mb-1">Pendapatan Hari ini</div>
              <div class="h1 mb-0 font-weight-bold text-gray-800">Rp. 234.000,00</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-4x text-warning"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Area Chart -->
    
  </div>

  <!--Row-->
@include('footer')
<script>

</script>