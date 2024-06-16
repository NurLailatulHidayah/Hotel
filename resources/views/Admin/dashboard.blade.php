@extends('admin.template.main')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0" id="welcome">Selamat Datang di Halaman Admin!</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
      <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="calendar" class=" text-primary"></i></span>
      <input type="text" class="form-control border-primary bg-transparent">
    </div>
    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="download-cloud"></i>
      Download Report
    </button>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Data Pemesanan Hotel</h6>

          <button type="button" class="btn btn-primary btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="btn-icon-prepend" data-feather="check-square"></i>
            Tambah Pesanan
          </button>
          <!-- <button type="button" class="btn btn-primary  btn-xs">Pemesanan Kendaraan</button> -->
        </div>
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th class="pt-0">No</th>
                <th class="pt-0">Nama</th>
                <th class="pt-0">No Identitas</th>
                <th class="pt-0">jenis Kelamin</th>
                <th class="pt-0">Tanggal Pesan</th>
                <th class="pt-0">Paket</th>
                <th class="pt-0">Durasi Hari</th>
                <th class="pt-0">Breakfast</th>
                <th class="pt-0">Harga Paket</th>
                <th class="pt-0">Harga Layanan</th>
                <th class="pt-0">Setelah Diskon</th>
                <th class="pt-0">Total Tagihan</th>
                <th colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ahmad</td>
                <td>1234567890123456</td>
                <td>Perempuan</td>
                <td>2024/05/18</td>
                <td>Delux</td>
                <td>4</td>
                <td>Y</td>
                <td>500.000</td>
                <td>132.000</td>
                <td>180.000</td>
                <td>180.000</td>
                <td>
                  <button type="button" class="btn btn-success btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#modalEdit">
                    <!-- <i class="btn-icon-prepend" data-feather="check-square"></i> -->
                    Edit
                  </button>
                  <button type="button" class="btn btn-danger btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#modalHapus">
                    <!-- <i class="btn-icon-prepend" data-feather="check-square"></i> -->
                    Delete
                  </button>
                </td>
                <!-- <td><button type="button" class="btn btn-danger">Delete</button></td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection