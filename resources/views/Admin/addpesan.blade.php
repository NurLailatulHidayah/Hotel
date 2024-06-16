<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTambahLabel">Form Tambah Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pesan.create') }}" method="post" autocomplete="off">
          @csrf
          <div class="row mt-3">
            <div class="mb-3 col-12 col-md-6">
              <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
              <input type="text" class="form-control form-control-sm" id="nama_pemesan" name="nama_pemesan" placeholder="" required>
            </div>
            <div class="mb-3 col-12 col-md-6">
              <label for="no_id" class="form-label">Nomor Identitas</label>
              <input type="number" class=" has-validation form-control form-control-sm" id="no_id" name="no_id" minlength="16" maxlength="16" placeholder="" required>
              <div class="invalid-feedback">
                *Isi dengan angka 16 Digit
              </div>
            </div>


          </div>
          <div class="row">
            <div class="mb-3 col-12 col-md-6">
              <div><label for="jenis kelamin" class="form-label" name="jenis_kelamin">Jenis Kelamin </label></div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Laki-Laki" id="Laki-Laki" value="Laki-laki">
                <label class="form-check-label" for="Laki-Laki">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Perempuan" id="Perempuan" value="Perempuan">
                <label class="form-check-label" for="Perempuan">Perempuan</label>
              </div>


            </div>
            <div class="mb-3 col-12 col-md-6">
              <label for="tgl-pesan" class="form-label">Tanggal Pemesanan</label>
              <input type="date" class="form-control form-control-sm" id="tgl-pesan" name="tgl-pesan" placeholder="">
            </div>

          </div>
          <div class="row">
            <div class="mb-3 col-12 col-md-6">
              <label for="nama_paket" class="form-label">Tipe Kamar</label>
              <select class="form-select" id="nama_paket" name="nama_paket" onchange="updateHargaPaket()" aria-label="Default select example">
                <option selected>Pilih Kamar</option>
                <option value="1">STANDAR</option>
                <option value="2">DELUXE</option>
                <option value="3">EXECUTIF</option>
              </select>

            </div>
            <div class="mb-3 col-12 col-md-6">
              <label for="durasi" class="form-label">Durasi Menginap</label>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" onchange="handleDurasi()(this)">
                <span class="input-group-text" id="basic-addon2">hari</span>
              </div>
              <div id="durasi" class="form-text">*Isi dengan angka </div>
            </div>
            <div class="mb-3 col-12 col-lg-9">
              <div class="">
                <label class="form-label">Layanan</label>
                <div class="d-lg-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Y" id="sarapan" name="sarapan" onclick="handleSarapan(this)">
                    <label class="form-check-label" for="sarapan">
                      Breakfast (Rp.80.000)/hari
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="mb-3 col-12 col-md-4">
              <label for="harga_paket" class="form-label">Harga Kamar</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-harga">Rp</span>
                <input type="text" class="form-control form-control-sm" id="harga_paket" name="harga_paket" aria-label="Username" aria-describedby="basic-harga" onkeydown="return false;">
              </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
              <label for="harga_layanan" class="form-label">Harga Layanan</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-harga">Rp</span>
                <input type="text" class="form-control form-control-sm" id="harga_layanan" name="harga_layanan" aria-label="Username" aria-describedby="basic-harga" onkeydown="return false;">
              </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
              <label for="diskon" class="form-label">Total Harga Paket Diskon 10%</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-harga">Rp</span>
                <input type="text" class="form-control form-control-sm" id="diskon" name="diskon" aria-label="Username" aria-describedby="basic-harga" onkeydown="return false;">
              </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
              <label for="total_tagihan" class="form-label">Total Tagihan</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-tagihan">Rp</span>
                <input type="text" class="form-control form-control-sm" id="total_tagihan" name="total_tagihan" aria-label="Username" aria-describedby="basic-tagihan" onkeydown="return false;">
              </div>
            </div>
          </div>
          <!-- <input type="submit" class="btn btn-sm btn-primary" value="simpan"> -->
          <button type="button" class="btn btn-sm btn-success" onclick="hitungTagihan()">Hitung</button>
          <button type="reset" class="btn btn-sm btn-danger">Reset</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>