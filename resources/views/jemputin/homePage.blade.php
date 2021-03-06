  @extends('jemputin.tema')

  @section('konten')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1 class="hero-heading">Mau pergi dan makan, tapi gaada yang jemput.in?</h1>
            <p class="text-p">
              Ke manapun dan di manapun, mau pesen makan dan pergi semuanya ada di jemput.in
          </p>
            <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img class= "il-1 img-fluid" src="{{ asset('/assets/img/CewekRoket.svg') }}" alt="GAS">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('/assets/img/CewekMotor.svg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">  
            <h3>Perjalanan jemput.in</h3>
            <br>
            <ul>
              <li>jemput.in memulai perjalanannya pada tahun 2014 dengan layanan pertama kami yaitu pemesanan melalui call-center.</li>
              <li>Pada tahun 2018 jemput.in berkembang pesat setelah meluncurkan sebuah aplikasi dengan tiga layanan yaitu : Ma-kan, Mo-bil, Mo-tor.</li>
            </ul>
            <a href="{{ route('aboutUs') }}" class="get-started-btn">About Us</a>
          </div>
        </div>


      </div>
    </section><!-- End Details Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Berikut merupakan layanan dari jemput.in</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Mo-bil</h3>
            <img src="{{ asset('/assets/img/Mo-bil.svg') }}" width="150px" alt="Mo-bil" class="">
            <ul class="mt-4">
              <p style="line-height: 30px;">
                Driver kami siap mengantar kamu kemanapun kamu mau pergi! Bisa jadi ketika kamu pesen Mo-bil, kamu bakal dapet driver yang sedang naik ferar lo. waw (Coming soon)
              </p>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Mo-tor</h3>
            <img src="{{ asset('/assets/img/Mo-tor.svg') }}" width="150px" alt="Mo-tor">
            <ul class="mt-4">
              <p style="line-height:30px;">
                sebuah layanan yang siap jemput kamu kemanapun kamu pergi. Disini kamu bisa request  cepet, lambat, atau lewat gang sempit langsung ke Driver Motornya. Driver Mo-tor sudah tersebar ke seluruh asia tenggara              </p>>
            </ul>
            <a href="{{ route('order') }}" class="get-started-btn">Pesan</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Ma-kan</h3>
            <img src="{{ asset('/assets/img/Ma-kan.svg') }}" width="150px" alt="Ma-kan">
            <ul class="mt-4">
              <p style="line-height: 30px;">
                Perut laper? tapi mager? atau perut berbunyi? tapi gaada tenaga buat keluar sendiri? Tenang, di Ma-kan kamu bisa pesen makanan dan minuman favoritmu dan diantar sampai depan rumah (Coming soon)
              </p>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="container">
      <div class="section-title" style="margin-top: 80px;" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Dapatkan informasi terbaru dari Indonesia</p>
      </div>
      <div class="row" data-aos="fade-up">
          <div class="col-md-12">
              <div id="news-slider" class="owl-carousel">
                  <div class="post-slide">
                      <div class="post-img">
                          <img src="{{ asset('/assets/img/Gambar-jakarta.jpg') }}" alt="">
                          <div class="category">EKO</div>
                      </div>
                      <div class="post-review">
                          <h3 class="post-title"><a href="#">Ekonomi Indonesia Diklaim pulih</a></h3>
                          <p class="post-description">
                            Perekonomian Indonesia mulai pulih setelah dihantam Pandemi Covid-19. Hal ini dilihat dari indikator-indikator perekonomian yang mulai menunjukkan perbaikan.
                          </p>
                          <div class="post-bar">
                              <span><i class="fa fa-user"></i> <a href="#">Tim Jemput</a></span>
                              <span class="comments"><i class="fa fa-comments"></i> <a href="#">2 Comments</a></span>
                          </div>
                      </div>
                  </div>
   
                  <div class="post-slide">
                      <div class="post-img">
                          <img src="{{ asset('/assets/img/Gambar-perahu.jpg') }}" alt="">
                          <div class="category">TRAV</div>
                      </div>
                      <div class="post-review">
                          <h3 class="post-title"><a href="#">5 Spot Wisata Pantai Terbaik di Bulukumba,</a></h3>
                          <p class="post-description">
                            Deretan pantai indah di Bulukumba menjadi destinasi wisata andalan kabupaten di kawasan selatan Provinsi Sulawesi Selatan. Bulukumba berjarak kurang lebih sejauh 165 KM dari kota Makassar.
                          </p>
                          <div class="post-bar">
                              <span><i class="fa fa-user"></i> <a href="#">Borrys</a></span>
                              <span class="comments"><i class="fa fa-comments"></i> <a href="#">4 Comments</a></span>
                          </div>
                      </div>
                  </div>

                  <div class="post-slide">
                    <div class="post-img">
                        <img src="{{ asset('/assets/img/Gambar-tani.jpg') }}" alt="">
                        <div class="category">AGRO</div>
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">Begini Nasib Petani di masa pandemi</a></h3>
                        <p class="post-description">
                          Pandemi Covid 19 yang telah berlangsung selama sembilan bulan di Indonesia dinilai berdampak terhadap harga produk-produk pertanian terutama produk hortikultura dan produk peternakan.
                        </p>
                        <div class="post-bar">
                            <span><i class="fa fa-user"></i> <a href="#">Tim Jemput</a></span>
                            <span class="comments"><i class="fa fa-comments"></i> <a href="#">4 Comments</a></span>
                        </div>
                    </div>
                </div>

                <div class="post-slide">
                  <div class="post-img">
                      <img src="{{ asset('/assets/img/Gambar-pasar.jpg') }}" alt="">
                      <div class="category">EKO</div>
                  </div>
                  <div class="post-review">
                      <h3 class="post-title"><a href="#">Kala Pasar Tradisional Bersolek</a></h3>
                      <p class="post-description">
                        Revitalisasi pasar tradisional tak selalu berjalan lancar. Sejumlah permasalahan muncul. Baik ketika pembangunan, maupun setelah pasar sudah bisa digunakan. Sehingga harus benar-benar ditata sedemikian rupa.
                      </p>
                      <div class="post-bar">
                          <span><i class="fa fa-user"></i> <a href="#">Radar Kediri</a></span>
                          <span class="comments"><i class="fa fa-comments"></i> <a href="#">4 Comments</a></span>
                      </div>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>
    <!-- End Testimonials Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Masih bingung?? Mungkin pertanyaanmu ada di sini</p>
               </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Berapa tarifnya <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  Tarif dari Jemputin akan menyesuaikan jenis layanan yang kamu pilih serta seberapa jauh jarak yang perlu ditempuh oleh Mitra. namun tidak perlu khawatir, dengan berlangganan email dari Jemput.in, kamu tidak akan ketinggalan informasi.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Bagaimana cara berlangganan informasi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  Caranya mudah, cukup masukkan email kamu pada kolom dibawah ini.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Apakah di kota saya sudah ada?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  Sekarang layanan dari Jemput.in sudah menjangkau ke seluruh Indonesia, bahkan daerah terpencil sekalipun. Bahkan kalau kamu capek mendaki Gunung Semeru, kami siap menjemput kamu dan mengantarkanmu ke puncak.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-4" class="collapsed">Apakah terpecaya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                <p>
                Ya jelas dong. Kami membuka layanan Call center 24 jam yang siap menerima keluhan kamu apabila kamu merasa ditipu oleh Driver Jemput.in. Mau curhat? juga boleh  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#accordion-list-5" class="collapsed">Bagaimana cara melaporkannya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                <p>
                  Klik Contact Us, dan kamu dapat memilih layanan yang sesuai dengan keinginanmu
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->
@endsection