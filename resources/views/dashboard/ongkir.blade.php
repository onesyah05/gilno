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
    <h1 class="h3 mb-0 text-gray-800">Cek Ongkir</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Ongkir</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cek Ongkir</li>
    </ol>
  </div>

  <div class="row mb-3">
    <div class="col-xl-5 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
         <form action="/ongkir" method="POST">
            @csrf()
            <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="form-group">
                        <label for="select2SinglePlaceholder">Kota Asal</label>
                        <select required class="select2-single-placeholder form-control" name="from" style="padding: 10px!important" id="">
                            <option value=""></option>
                            @foreach ($kota['results'] as $item)
                                <option value="{{$item['city_id']}}">{{$item['city_name']}}</option>
                            @endforeach
                        </select>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col mr-2">
                      <div class="form-group">
                          <label for="select2SinglePlaceholder">Kota Tujuan</label>
                          <select required class="select2-single-placeholder form-control" name="to" style="padding: 10px" id="select2SinglePlaceholder">
                            <option value=""></option>
                            @foreach ($kota['results'] as $item)
                                <option value="{{$item['city_id']}}">{{$item['city_name']}}</option>
                            @endforeach
                          </select>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <div class="col-xl-2 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="form-group">
                        <label for="touchSpin3">Berat</label>
                       <input type="number" value="1" name="berat" step="any" class="form-control">
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Area Chart -->
        <div class="col-lg-12">
            <div class="card mb-4">
            
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Ongkir</h6>
                <button class="btn btn-success"><i class="fas fa-check"></i> Cek Ongkir</button>
              </div>
         </form>
          <div class="row mb-3" style="padding: 10px">
            
            @if (isset($ongkos))
            @foreach ($ongkos as $items)
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col mr-2">
                          <div class="form-group">
                              <b><label class="text-info" for="select2SinglePlaceholder">{{$items['name']}}</label></b>
                              @foreach ($items['costs'] as $key)
                                <b><p class="text-success">{{$key['service']}} [ {{$key['description']}} ]</p></b>
                                @foreach ($key['cost'] as $val)
                                    <table style="margin-top: -10px;margin-left:20px">
                                        <tr>
                                            <th>Harga</th>
                                            <td>:</td>
                                            <td>{{rp($val['value'])}}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Estimasi
                                            </th>
                                            <td>:</td>
                                            <td>{{$val['etd']}} Hari</td>
                                        </tr>
                                        <tr>
                                            <th>note</th>
                                            <td>:</td>
                                            <td>{{$val['note']}}</td>
                                        </tr>
                                    </table>
                                @endforeach
                              @endforeach
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @endif

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