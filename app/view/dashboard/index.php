<div class="header bg-gradient-success pb-4 pt-5 pt-md-6">

  <!-- 
<div class="base">
  <div class="holder"></div>
  <div class="thread">
    <div class="pendulum" style="color: white">Circle Of Science</div>
  </div>
  <div class="shadow"></div>
</div>
<br>
-->
  <div class="container-fluid mb-4">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" style="height: 250px; object-fit: cover" src="img/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 250px; object-fit: cover" src="img/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 " style="height: 250px; object-fit: cover" src="img/slide3.jpg" alt="Third slide">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="form-search-wrap bg-default p-3 rounded" data-aos="fade-up" data-aos-delay="200">

      <div class="container row justify-content-center pb-4 hoverable">
        <h1 class="ml14 mb-3">
          <span class="text-wrapper">
            <h3 class="letter shadow-lg p-2 bg-white rounded">Temukan Teman Belajar Terdekat Anda</h3>
            <span class="line"></span>
          </span>
        </h1>
      </div>

      <div class="container">
        <form action="" method="post">
          <div class="row align-items-center">
            <div class="col-lg-12s mb-4 mb-xl-0 col-xl-4">
              <div class="wrap-icon">
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Kabupaten" value="">
                <span class="icon icon-room"></span>
              </div>
            </div>
            <div class="col-lg-12 col-xl-2">
              <input type="button" class="btn btn-primary btn-block rounded hoverable" id="search" name="search" value="Search">
            </div>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div>
      <TABLE class="table table-striped table-resposive table-hover table-dark shadow-lg" id="tableCari">
      </TABLE>
    </div>
    <br>
    <br>
    <br>
    <div class="bg-default pt-3 pb-3 rounded">
      <div class="container row justify-content-center pb-4 hoverable">
        <h1 class="ml14 mb-3">
          <span class="text-wrapper">
            <h3 class="letter shadow-lg p-2 bg-white rounded">Beberapa Siswa Siswi Yang Telah Terdaftar</h3>
            <span class="line"></span>
          </span>
        </h1>
      </div>
      <div class="table-responsive">
        <Table id="tableinit" class="table align-items-center table-light table-flush" id='partnerTable'>
          <tr>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Kelas</th>
            <th>Tingkat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          <?= $data['inittable'] ?>
        </TABLE>

      </div>

      <nav aria-label="Page navigation example">
          <ul id="pagination" class="pagination justify-content-center">

            <?php for ($i=1; $i <= $data['pagination']; $i++){ ?>
            <li class="page-item <?php if($i==1){echo "active";} ?>"><a id="page-<?=$i?>" class="page-link" href="javascript:void(0)"><?=$i?></a></li>
            <?php } ?>

          </ul>
        </nav>

    </div>
    <br>
    <br>

    <div class="site-section">
      <div class="container justify-content-center">
        <div class="jumbotron jumbotron-fluid rounded">
          <div class="container">
            <h1 class="display row justify-content-center">Website Untuk Mencari Teman Belajar Siswa SMP, SMA, dan SMK!</h1>
          </div>
        </div>

        <!-- Card View Developer -->

        <div class="container bg-default p-3 rounded">

          <div class="container row justify-content-center pb-4 hoverable">
            <h1 class="ml14 mb-3">
              <span class="text-wrapper">
                <h3 class="letter shadow-lg p-2 bg-white rounded">Tentang Pengembang Website</h3>
                <span class="line"></span>
              </span>
            </h1>
          </div>

          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../public/img/profile/akb1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Akbar Hari Mukti</h5>
                <p class="card-text">Universitas Amikom Yogyakarta</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../public/img/profile/ando.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Herlandro Tribiakto</h5>
                <p class="card-text">Universitas Amikom Yogyakarta</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/mutt.jpg" style="object-fit: cover; height: 50%" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Muttafiah</h5>
                <p class="card-text">Universitas Amikom Yogyakarta</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/raka0.jpg" style="object-fit: cover; height: 60%" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Rhaka Novyansyah Dewanto</h5>
                <p class="card-text">Universitas Amikom Yogyakarta</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/anash.jpg" style="object-fit: cover; height: 50%" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ahmad Nashrudin</h5>
                <p class="card-text">Universitas Amikom Yogyakarta</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row justify-content-center mt-5">
            <a href="<?=BASEURL?>about" class="btn btn-primary rounded py-2 px-4 text-white">Tentang Website</a>
          </div>
        </div>

      </div>
    </div>

    <!-- div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/colorback.jpg); background-size: cover; background-position: center top;" -->
  </div>
</div>
<!-- Footer -->
</div>
</div>