<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinasi</title>
    <link rel="shortcut icon" href="{{ asset ('css/assets')}}/favicon.png">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset ('css/assets')}}/tes.css" />
  </head>
  <body>
    <header>
      <nav class="navbar-destinasi">
        <a href="" class="nav-logo"
          ><img
            src="asset/logo-white.png"
            alt=""
        /></a>
        <ul class="nav-link">
            <li class="nav-item2"><a href="{{ route('home') }}">Home</a></li>
            <li class="nav-item2"><a href="{{ route('destinasi') }}">Destinasi</a></li>
            <li class="nav-item2"><a href="{{ route('kuliner') }}">Kuliner</a></li>
            <li class="nav-item2"><a href="{{ route('auth') }}">Login</a></li>
        </ul>
      </nav>
    </header>
    <div class="destinasi-nav">
      <p><a href="{{ route('home') }}">Beranda</a> > Destinasi Wisata</p>
    </div>
    <div class="destinasi-judul">
      <h2>MUSEUM PENDIDIKAN SURABAYA</h2>
    </div>
    <div class="card-body px-2 pt-6">
        <div class="card">
          <img src="asset/1.jpg" class="card-img-top" alt="">
          <div class="col-md-12">
            <h3 class="font-weight-bold">Museum Pendidikan Surabaya</h3>
            <h5>Jl. Genteng Kali No. 10
                Museum</h5>
          </div>
          <div class="mb-5 text-justify">
            <p>Museum Pendidikan Surabaya merupakan museum tematik yang didirikan sebagai langkah pelestarian sejarah dan budaya bangsa dengan tujuan untuk mendukung kegiatan edukasi, riset dan rekreasi di Kota Surabaya. Diresmikan oleh Walikota Surabaya Tri Rismaharini pada 25 November 2019. yang menyimpan bukti materiil Pendidikan pada masa Pra-Aksara, Masa Klasik, Masa Kolonial dan Masa Kemerdekaan. Berlokasi di Jalan Genteng Kali No 10 Surabaya yang merupakan EX Sekolah Taman siswa. </p>
            <p>ZONA MASA PRA-AKSARA Zona Pendidikan di era ini mungkin terlihat sangat sederhana dan mendasar, tapi juga mengajarkan salah satu esensi paling utama pengetahuan yang tetap relevan hingga era kini yaitu bertahan hidup. Didalam zona ini terdapat koleksi Manuskrip Kuno Era1800-an , Manuskrip berbahan dasar Lontar dan Diorama Pra Aksara (Manusia Purba) </p>
            <p>ZONA KERAJAAN Pada zona ini Pengaruh dan corak dari luar nusantara yang berasimilasi dengan elemen lokal menjadikan pendidikan di era ini menjadi sangat dinamis dan menarik dibanding sebelumnya. Berbagai ajaran agama dan pengetahuan yang disebarkan inipun memiliki jenis aksara yang masing-masing. </p>
            <p>ZONA KOLONIAL Pada Pendidikan masa ini menceritakan tentang Pendidikan era Kolonial Belanda dan Jepang. Koleksi terkait zona Kolonial ini meliputi Sepeda Guru. Sepeda Zundapp untuk pendampingan Orang tua mengantar siswa berangkat Sekolah dsb.</p>
            <p>ZONA KEMERDEKAAN. Pada Zona Kemerdekaan ini menampilkan Koleksi –koleksi terkait benda bukti materiil peradaban periodisasi tahun 1945 – 1990an.</p>
          </div>
        </div>
    </div>
    
    <!-- <div><br /></div>
    <p class="destinasi-filter">
      <button
        class="btn btn-primary collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse1"
        aria-expanded="false"
        aria-controls="collapse1"
      >
        Filter Wilayah
      </button>

      <button
        class="btn btn-primary collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse2"
        aria-expanded="false"
        aria-controls="collapse2"
      >
        Filter Kategori
      </button>

      <button
        class="btn btn-primary collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse3"
        aria-expanded="false"
        aria-controls="collapse3"
      >
        Filter Keyword
      </button>

      <button type="submit" class="btn btn-primary filter">
        <i class="fa fa-fw fa-search"></i>
        Filter
      </button>
    </p>

    <div class="collapse" id="collapse1">
      <div class="card card-body">
        Filter Wilayah
        <ul class="list1">
          <li>
            <input type="radio" name="filter_wilayah" value="Semua" />
            <span>Semua</span>
          </li>
          <li>
            <input type="radio" name="filter_wilayah" value="Surabaya Pusat" />
            <span>Surabaya Pusat</span>
          </li>
          <li>
            <input type="radio" name="filter_wilayah" value="Surabaya Barat" />
            <span>Surabaya Barat</span>
          </li>
          <li>
            <input type="radio" name="filter_wilayah" value="Surabaya Timur" />
            <span>Surabaya Timur</span>
          </li>
          <li>
            <input type="radio" name="filter_wilayah" value="Surabaya Utara" />
            <span>Surabaya Utara</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_wilayah"
              value="Surabaya Selatan"
            />
            <span>Surabaya Selatan</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="collapse" id="collapse2">
      <div class="card card-body">
        Filter Kategori
        <ul class="list1">
          <li>
            <input type="radio" name="filter_kategori" value="Semua" />
            <span>Semua</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="History & Heritage"
            />
            <span>History & Heritage</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Museum" />
            <span>Museum</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Religi" />
            <span>Religi</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="Monumen & Landmark"
            />
            <span>Monumen & Landmark</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="Outdoor & Nature"
            />
            <span>Outdoor & Nature</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Kampung Wisata" />
            <span>Kampung Wisata</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="City Park" />
            <span>City Park</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="Pusat Perbelanjaan"
            />
            <span>Pusat Perbelanjaan</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="Pasar Tradisional"
            />
            <span>Pasar Tradisional</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Cagar Budaya" />
            <span>Cagar Budaya</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Art & Culture" />
            <span>Art & Culture</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Sport" />
            <span>Sport</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Kuliner" />
            <span>Kuliner</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="Mice" />
            <span>Mice</span>
          </li>
          <li>
            <input
              type="radio"
              name="filter_kategori"
              value="Family Activities"
            />
            <span>Family Activities</span>
          </li>
          <li>
            <input type="radio" name="filter_kategori" value="SPA & Wellness" />
            <span>SPA & Wellness</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="collapse" id="collapse3">
      <div class="card card-body">
        <h6>Filter Kata Kunci</h6>
        <div class="form-group">
          <input type="text" class="form-control" name="keyword" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center my-2">
        <a
          href="asset/1.jpg"
        >
          <img
            class="img-fluid"
            src="asset/1.jpg"
            alt="Museum Pendidikan Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Museum </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Museum Pendidikan Surabaya</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Genteng Kali No. 10
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="asset/2.jpg"
        >
          <img
            class="img-fluid"
            src="asset/2.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Museum </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Museum Olahraga Surabaya</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Indragiri No.6, Gelora Pancasila
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="asset/3.jpg"
        >
          <img
            class="img-fluid"
            src="asset/3.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Religi </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Masjid Nasional Al Akbar</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Masjid Agung Timur No.1
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="asset/4.jpg"
        >
          <img
            class="img-fluid"
            src="asset/4.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori"> Kampung wisata </span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Kampung Lawas Maspati</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Maspati Gg. VI, Bubutan
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a href="asset/5.jpg">
          <img
            class="img-fluid"
            src="asset/5.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">City</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Taman Mozaik</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jalan Wiyung Praja, Wiyung
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="asset/6.jpg"
        >
          <img
            class="img-fluid"
            src="asset/6.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Family Activities</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Kebun Binatang Surabaya</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Setail No. 1, Darmo, Wonokromo
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a
          href="asset/7.jpg"
        >
          <img
            class="img-fluid"
            src="asset/7.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Monumen & landmark</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Monumen Tugu Pahlawan</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Pahlawan
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a href="asset/8.jpg">
          <img
            class="img-fluid"
            src="asset/8.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Pusat Perbelanjaan</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Tunjungan Plaza</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            JL. Jendral Basuki Rachmat no.8-12, Surabaya
          </h6>
        </div>
      </div>

      <div class="col-md-4 text-center my-2">
        <a href="asset/9.jpg">
          <img
            class="img-fluid"
            src="asset/9.jpg"
            alt="Museum Olahraga Surabaya"
          />
        </a>
        <div class="mt-2">
          <span class="span-kategori">Pasar Tradisional</span>
          <hr class="my-2" />
          <h5 class="font-weight-bold">Pasar Genteng</h5>
          <h6>
            <i class="fa fa-fw fa-map-marker-alt"></i>
            Jl. Genteng Besar
          </h6>
        </div>
      </div>
    </div>

    <div class="nav-list-page">
      <nav>
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="" rel="prev" aria-label="« Previous"
              >‹</a
            >
          </li>
          <li class="page-item">
            <a class="page-link" href="index.html">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="destinasi.html">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">6</a>
          </li>
          <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">...</span>
          </li>
          <li class="page-item">
            <a class="page-link" href="">45</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">46</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">47</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">48</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="">49</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="" rel="next" aria-label="Next »">›</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="kosong"> <br> </div> -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="transform:rotate(180deg);margin-bottom:-1px">
      <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
      </path>
      <path class="elementor-shape-fill" fill="#4a4a8a" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
      <path class="elementor-shape-fill" fill="#4a4a8a" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
  </svg>
  <footer style="background-color: #4a4a8a; ">
      <div class="isi-footer" >
          <div class="isifoot-content1">
              <div class="row1">
                  <h6>FIND US</h6>
              </div>
              <div class="row2">
                  <ul class="list1">
                      <li class="li1">
                          <a href="http://">Tourism Information Center <br> Jl. Gubernur Suryo 15</a>
                      </li>
                      <li class="li2">
                          <a href=""><i class="fa fa-fw fa-phone"></i> Kontak Kami</a>
                      </li>
                      <li class="li3">
                          <a href=""><i class="fab fa-lg fa-facebook text-white" aria-hidden="true"></i> </a>
                          &nbsp;
                          <a href=""></a><i class="fab fa-lg fa-instagram text-white" aria-hidden="true"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="isifoot-content2">
              <div class="row1">
                  <h6>CONTACT US</h6>
                  <p>
                      Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Kota Surabaya Kota Surabaya
                  </p>
                  <ul class="list2">
                      <li class="li1">
                              <i class="fa fa-fw fa-map-marker-alt"></i>
                              <p>
                                  Jl. Tunjungan No.1-3 Kelurahan Genteng <br>
                                  Kecamatan Genteng, Kota Surabaya <br>
                                  Jawa Timur, Indonesia, 60275
                              </p>
                      </li>
                      <br>
                      <li class="li2">
                          <i class="fa fa-lg fa-fw fa-phone pull-left"></i>
                          <p>
                              031-5318409
                          </p>
                      </li>
                      <li class="li3">
                          <i class="fa fa-lg fa-fw fa-envelope"></i>
                              <p>
                                  disbudporapar@surabaya.go.id
                              </p>
                      </li>
                  </ul>
              </div>
              <div class="row2"></div>
          </div>
          <div class="isifoot-content3">
              <div class="row1">
                  <h6>OUR OTHER SITE</h6>
              </div>
              <div class="row2">
                  <ul class="list3">
                      <li class="li1">
                          <a href="https://disbudporapar.surabaya.go.id">
                              Disbudporapar Surabaya
                          </a>
                      </li>
                      <li class="li1">
                          <a href="https://virtualtourism.surabaya.go.id">
                              360° Surabaya
                          </a>
                      </li>
                      <li class="li1">
                          <a href="https://tiketwisata.surabaya.go.id">
                              Tiket Wisata Surabaya
                          </a>
                      </li>
                      <li class="li1">
                          <a href="https://ka-mus.surabaya.go.id">
                              Katalog Museum Surabaya
                          </a>
                      </li>
                      <li class="li1">
                          <a href="https://bangga.surabaya.go.id/">
                              Bangga Surabaya
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="isifoot-content4">
              <div class="row1">
                  <h6>WISATA SURABAYA</h6>
              </div>
              <div class="row2"></div>
          </div>
      </div>
  </footer>
  </body>
</html>