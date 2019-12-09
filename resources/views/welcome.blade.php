@extends('layouts.app-client')

@section('content')
<!-- Header -->
<header class="masthead" style="background-image: url('img/dwp.jpg')">
  <div class="container">
    <div class="intro-text">

    </div>
  </div>
</header>

<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Tickets</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <img src="{{ asset('img/dwp2.jpg') }}" alt="" height="100%" width="50%">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <p>Harga mulai <b>Rp 1.000.000</b></p>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('register') }}">Beli Sekarang</a>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Line Up</h2>
        <h3 class="section-subheading text-muted">Our Guest Stars.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="{{ asset('img/danila.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Danilla riyadi</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">Penyanyi wanita asal Indonesia ini dijuluki soloist, musisi,dan sebagainya. Usianya yang belum muda tak menghalangi penghayatan . Debut single-nya, 'Buaian', benar-benar membuai siapapun pendengarnya. Musik sederhana namun padat, dibalut vokal merdu ditambah lagi wajah orientalnya yang cantik</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/tulus.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Tulus</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">Muhammad Tulus adalah seorang penyanyi dan pencipta lagu berkebangsaan Indonesia. 50 Penghargaan baik di bidang musik dan sinematografi, telah TULUS dapatkan di 7 tahun perjalanan musiknya. Pada tahun 2017 lalu, 5 piala AMI Awards dari album Monokrom berhasil diraihnya</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/feelkoplo.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Feel Koplo</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">FEEL KOPLO dengan sentuhan magical koplofy nya mampu menghipnotis dede-dede Indie doyan ngeksis yang tak lagi minder ketika memposting Instastories dengan backsound musik koplo.Dimulai tahun 2018 secara tidak sengaja dan mempunyai misi menghapus stigma bahwa mendengarkan  musik dangdut adalah hal yang memalukan, Feel Koplo tampaknya sukses melakukan misi itu, sebagai contoh mereka mendapatkan respon positif dari band luar negeri bahkan band punk yang terkenal menyeramkan luluh dengan karya mereka</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/kuntoaji.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Kunto Aji</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">Kunto Aji pasti sudah tidak asing lagi didengar oleh penikmat musik tanah air. Lagu-lagunya sudah diputar di seluruh radio dan media elektronik lainnya. Dia membuktikan bahwa penyanyi indie mampu diterima oleh masyarakat karena karya-karyanya yang indah,penyanyi ini memulai karir musik nya melalui ajang pencarian bakat</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/honne.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Honne</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">HONNE merupakan duo music elektronik asal Inggris yang beranggotakan James Hatcher dan Andy Clutterbuck, Nama ‘Honne’ diambil dari konsep Jepang yang berarti ‘perasaan dan keinginan sejati. HONNE mengusung music electronic soul, HONNE juga menggabungkan jiwa dengan synths untuk menyampaikan visi mereka tentang musical intimacy. HONNE merilis EP debut mereka, Warm on a Cold Night pada September 2014, diikuti oleh All in the Value di tahun yang sama</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/marionjola.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Marion Jola</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">Perempuan bertalenta yang satu ini mendapat perhatian publik sejak kemunculannya sebagai salah satu finalis ajang Indonesian Idol Season 9 (2018). Namanya terus melambung setelah ia meninggalkan ajang tersebut hingga akhirnya debut sebagai penyanyi solo lewat single bertajuk Jangan di tahun yang sama.Kendati debut di usia yang masih muda, yaitu 18 tahun, penyanyi yang akrab disapa Lala ini nyatanya mampu membuktikan kualitas dirinya. Salah satunya setelah ia berhasil membawa pulang piala dari ajang Anugerah Musik Indonesia Awards 2018 sebagai Pendatang Baru Terbaik</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-search fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" height="300px" src="{{ asset('img/raisa.jpg') }}" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Raisa</h4>
          <p class="text-muted mt-3" style="font-family:arial; font-size:14px">Raisa Andriana atau yang lebih dikenal dengan nama Raisa adalah seorang penyanyi berkebangsaan Indonesia. Ia mulai dikenal publik setelah membawakan lagu berjudul Serba Salah. Sebelum bernyanyi solo, Raisa merupakan salah satu vokalis band bentukan Kevin Aprilio, Andante, yang kemudian menjadi Vierra</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Timeline</h2>
        <h3 class="section-subheading text-muted">Our timeline</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <h4>Open
                <br>Gate
                <br>!!
              </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Open Gate</h4>
                <h4 class="subheading">17.00</h4>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/feelkoplo.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Feel Koplo</h4>
                <h4 class="subheading">17.15-18.00</h4>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/marionjola.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Marion Jola</h4>
                <h4 class="subheading">18.00-18.45</h4>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/danila.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Danilla Riyadi</h4>
                <h4 class="subheading">18.45-19.30</h4>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/kuntoaji.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Kunto Aji</h4>
                <h4 class="subheading">19.30-20.15</h4>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/tulus.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Tulus</h4>
                <h4 class="subheading">20.15-21.00</h4>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/raisa.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Raisa</h4>
                <h4 class="subheading">21.00-21.45</h4>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="{{ asset('/img/honne.jpg') }}" alt="" style="height:100% !important">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading mt-5">
                <h4>Honne</h4>
                <h4 class="subheading">21.45-22.30</h4>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5" id="sponsor">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Sponsors</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{ asset('img/logos/bni.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{ asset('img/logos/hai.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{ asset('img/logos/pocari.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{ asset('img/logos/tehpucuk.jpg') }}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  @endsection
