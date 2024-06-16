<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/1.png">
  <title>Hotel Kita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    @include('partial.navbar')

    <div class="card text-bg-dark text-center">
      <img src="assets/img/gedung2.jfif" style="height: 30rem; width: 50" alt="cover" />
      <div class="card-img-overlay mt-4">
        <h2 class="card-title">Hotel Kita</h2>
        <h4 class="card-text">Wonderful Indonesia</h4>
        <!-- <div>
          <button type="button" class="btn btn-outline-primary">Pesan Sekarang!</button>
        </div> -->
      </div>

      <!-- <a class="btn btn-outline-primary" href="#" role="button">Pesan Sekarang!</a> -->
    </div>

    <!-- <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="assets/img/foto 4.jpg" class="d-block w-100" style="height: 30rem" alt="...">
          <div class="carousel-caption text-center">
            <h3>Hotel Kita</h3>
            <p>Wonderful Indonesia</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/img/gedung.jfif" class="d-block w-100" style="height: 30rem" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/foto 4.jpg" class="d-block w-100" style="height: 30rem" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->

    <h3 class="card-title text-center mt-4 bg-ternary">Kamar Hotel</h3>
    <div class="row mt-4">
      <div class="col-12">
        <div class="row row-cols-3 row-cols-md-3">
          <div class="col">
            <div class="card">
              <img src="assets/img/kamar 1.jpg" class="card-img-top" alt="..." />

              <div class="card-body">
                <h5 class="card-title">Standar</h5>
                <p class="card-text">
                  Kamar Standar adalah pilihan yang sempurna untuk para wisatawan yang mencari kenyamanan sederhana dengan fasilitas yang memadai. Kamar ini dilengkapi dengan tempat tidur yang nyaman, area istirahat, dan kamar mandi pribadi. Cocok untuk para pelancong yang menginginkan akomodasi yang terjangkau dan nyaman.
                </p>
                <span>
                  <a href="/pesan" class="btn btn-primary">Pesan Kamar</a>
                </span>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="assets/img/kamar 2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Deluxe</h5>
                <p class="card-text">
                  Kamar Deluxe menawarkan pengalaman menginap yang lebih mewah dengan berbagai fasilitas tambahan. Selain kenyamanan tempat tidur dan ruang istirahat yang luas, kamar ini mungkin dilengkapi dengan fasilitas tambahan seperti balkon pribadi. Cocok untuk tamu yang mencari pengalaman menginap yang lebih istimewa.
                </p>
                <a href="/pemesanan" class="btn btn-primary">Pesan Kamar</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="assets/img/kamar 3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Executif</h5>
                <p class="card-text">
                  Kamar Eksekutif menyajikan tingkat kenyamanan dan kemewahan yang tinggi. Kamar ini biasanya dilengkapi dengan fasilitas premium seperti ruang kerja yang luas, akses ke lounge eksekutif,dan fasilitas tambahan lainnya. Cocok untuk tamu bisnis yang menginginkan kenyamanan maksimal selama perjalanan bisnis mereka.
                </p>
                <a href="/pemesanan" class="btn btn-primary">Pesan Kamar</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  {{-- Footer --}}
  @include('partial.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>