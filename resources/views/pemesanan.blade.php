<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/1.png">
  <title>Hotel Kita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  @include('partial.navbar')
  <div class="container border-3">
    <div class="row mt-3">
      <div class="col-12">
        <h2 class="text-center mt-3">Form Pemesanan Kamar</h2>
        <form action="{{ route('psn.addpesan') }}" method="post" autocomplete="off">
          <div class="row mt-3">
            <div class="mb-3 col-12 col-md-6">
              <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
              <input type="text" class="form-control form-control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="" required>
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
              <div><label for="jenis kelamin" class="form-label" required>Jenis Kelamin </label></div>

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
              <label for="nama-paket" class="form-label">Tipe Kamar</label>
              <select class="form-select" id="nama-paket" name="nama-paket" onchange="updateHargaPaket()" aria-label="Default select example">
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
              <label for="harga-paket" class="form-label">Harga Kamar</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-harga">Rp</span>
                <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket" aria-label="Username" aria-describedby="basic-harga" onkeydown="return false;">
              </div>
            </div>
            <div class="mb-3 col-12 col-md-4">
              <label for="harga-layanan" class="form-label">Harga Layanan</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-harga">Rp</span>
                <input type="text" class="form-control form-control-sm" id="harga-layanan" name="harga-layanan" aria-label="Username" aria-describedby="basic-harga" onkeydown="return false;">
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
              <label for="total-tagihan" class="form-label">Total Tagihan</label>
              <div class="input-group input-group-sm">
                <span class="input-group-text" id="basic-tagihan">Rp</span>
                <input type="text" class="form-control form-control-sm" id="total-tagihan" name="total-tagihan" aria-label="Username" aria-describedby="basic-tagihan" onkeydown="return false;">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-sm btn-primary" value="simpan">
          <button type="button" class="btn btn-sm btn-success" onclick="hitungTagihan()">Hitung</button>
          <button type="reset" class="btn btn-sm btn-danger">Reset</button>
        </form>
      </div>
    </div>
  </div>

  <!-- <script src="assets/js/app.js"></script> -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var noIdentitasInput = document.getElementById("no_id");
      noIdentitasInput.addEventListener("change", function() {
        var identitasValue = this.value.trim();
        if (identitasValue.length < 16) {
          alert("Nomor identitas harus memiliki minimal 16 karakter.");
          // Kosongkan nilai input
          this.value = "";
        }
      });
    });

    function updateHargaPaket() {
      var namaPaket = document.getElementById("nama-paket").value;
      var paketKamar = 0;
      if (namaPaket == 1) {
        paketKamar = 350000;
      } else if (namaPaket == 2) {
        paketKamar = 500000;
      } else if (namaPaket == 3) {
        paketKamar = 750000;
      }
      document.getElementById("harga-paket").value = paketKamar;
      elementHargaPaket = paketKamar;
    }

    function hitungTagihan() {
      // Ambil nilai durasi dan harga paket dari input
      var durasi = Number(document.getElementById("durasi").value);
      var hargaPaket = Number(document.getElementById("harga-paket").value);

      // Tentukan apakah durasi lebih dari 3 hari atau tidak
      // var diskon = 0;
      if (durasi >= 3) {
        diskon = 0.1;
        // Diskon 10%
      } else {
        diskon = 0;
      }

      // Hitung total harga paket
      // var hargaDiskon = hargaPaket - diskon;
      // var totalHargaPaket = hargaDiskon * durasi;
      var totalHargaPaket = hargaPaket * durasi * (1 - diskon);

      // Hitung harga sarapan jika dipilih
      var hargaSarapan = 0;
      if (document.getElementById("sarapan").checked) {
        hargaSarapan = 80000 * durasi; // Harga sarapan per hari
      }

      // Hitung total tagihan
      var totalTagihan = totalHargaPaket + hargaSarapan;

      // Update nilai input dengan hasil perhitungan
      document.getElementById("harga-layanan").value = hargaSarapan;
      document.getElementById("diskon").value = totalHargaPaket;
      document.getElementById("total-tagihan").value = totalTagihan;
    }

    // Fungsi ini dipanggil saat nilai durasi diubah
    function handleSarapan(checkbox) {
      if (checkbox.checked) {
        updateHargaPaket();
      }
      hitungTagihan();
    }

    function handleDurasi() {
      //   // Trigger calculation when durasi changes
      hitungTagihan();
    }
  </script>

</body>

</html>

{{-- Footer --}}
@include('partial.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>