<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT Starvalas Indonesia - Your Trusted Gateway to Global Currency Exchange</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Futura&display=swap" rel="stylesheet">
  <style>
    /* Kurs Table Custom Style */
    /* Table Wrapper with Background */

    .kurs-wrapper {
      background: transparent;
      max-width: 600px;
      border-radius: 20px;
      overflow: hidden;
    }

    .kurs-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 12px;
      font-family: 'Futura', sans-serif;
      font-weight: 700;
    }

    .kurs-table thead tr {
      background: #004A79;
      color: #fff;
      font-size: 1.1rem;
      border-radius: 50px;
    }

    .kurs-table thead th {
      padding: 15px 10px;
      border: none;
      background: linear-gradient(90deg, #004A79, #007BFF);
      border-radius: 50px;
    }

    .kurs-table tbody tr {
      border-radius: 50px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08);
    }

    .kurs-table tbody tr.even {
      background-color: #E9F4FF;
    }

    .kurs-table tbody tr.odd {
      background-color: #FFFFFF;
    }

    .kurs-table td {
      padding: 14px 12px;
      border: none;
      vertical-align: middle;
    }

    .kurs-table td.buy {
      color: #004A79;
    }

    .kurs-table td.sell {
      color: #EC2027;
    }

    .kurs-table img.flag-icon {
      height: 35px;
      width: auto;
      border-radius: 50%;
      vertical-align: middle;
    }

    .kurs-table tbody tr td:first-child {
      border-top-left-radius: 50px;
      border-bottom-left-radius: 50px;
    }

    .kurs-table tbody tr td:last-child {
      border-top-right-radius: 50px;
      border-bottom-right-radius: 50px;
    }

    .kurs-table tbody tr:hover {
      transform: scale(1.01);
      background-color: #7daaeaff !important;
      transition: all 0.3s ease;
    }




    .warning-box {
      background-color: #fff3cd;
      border: 1px solid #ffeaa7;
      border-radius: 8px;
      padding: 15px;
      display: flex;
      align-items: center;
      max-width: 800px;
      margin: 0 auto;
    }

    .branch-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .branch-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Make image clickable */
    .branch-image-wrapper {
      cursor: pointer;
    }

    .lightbox-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .lightbox-bg img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 8px;
      transition: opacity .4s ease-in-out;
    }

    /* Arrows */
    .lightbox-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 48px;
      color: white;
      cursor: pointer;
      user-select: none;
      padding: 10px;
      background: rgba(0, 0, 0, 0.3);
      border-radius: 8px;
      transition: background .2s;
    }

    .lightbox-arrow:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    .lightbox-arrow.left {
      left: 30px;
    }

    .lightbox-arrow.right {
      right: 30px;
    }


    /* Fade animation for slideshow */
    .branch-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 8px;
      transition: opacity 1s ease-in-out;
    }

    .branch-image.fade-out {
      opacity: 0;
    }


    .service-card {
      flex: 0 0 auto;
      width: 280px;
      background: white;
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: transform 0.3s;
    }

    .service-card:hover {
      transform: translateY(-5px);
    }

    .service-icon img {
      height: 48px;
      width: auto;
    }

    .service-title {
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 12px;
      color: var(--primary-blue);
    }


    .scroll-service {
      display: flex;
      overflow-x: auto;
      gap: 24px;
      cursor: grab;
      padding-bottom: 16px;
      scroll-behavior: smooth;
    }

    .scroll-service.active {
      scroll-behavior: auto;
      cursor: grabbing;
    }

    .scroll-indicator-container {
      width: 100%;
      height: 6px;
      background: #e0e0e0;
      border-radius: 3px;
      margin: 8px 0 24px 0;
      overflow: hidden;
    }

    .scroll-indicator-bar {
      height: 100%;
      width: 20%;
      background: linear-gradient(90deg, var(--primary-blue) 60%, var(--secondary-blue) 100%);
      border-radius: 3px;
      transition: width 0.2s;
    }

    .kurs-badge {
      background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
      color: white;
      padding: 8px 20px;
      border-radius: 30px;
      font-weight: bold;
      box-shadow: 0 4px 12px rgba(0, 74, 121, 0.3);
    }

    .last-updated {
      background-color: var(--light-blue);
      color: var(--dark-blue);
      padding: 8px 20px;
      border-radius: 30px;
      font-weight: bold;
    }

    .textkurs {
      animation: fadeIn infinite alternate ease 2s;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }


    .social-icon {
      font-size: 24px;
      margin-right: 15px;
      color: white;
    }

    .copyright {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 20px;
      margin-top: 30px;
      text-align: center;
      font-size: 14px;
    }


    .brand-banner .contact-info {
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      padding: 20px;
      display: inline-block;
      margin-top: 20px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: blue;
      border-radius: 50%;
      width: 3rem;
      height: 3rem;
      background-size: 60% 60%;
      background-repeat: no-repeat;
      background-position: center;
    }

    body {
      font-family: 'Futura', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
  </style>
</head>

<body>

  <!-- Carousel Section -->
  <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://images.pexels.com/photos/6266445/pexels-photo-6266445.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          class="d-block w-100" style="filter: brightness(0.6)" alt="Slide 1" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-5 p-4 text-md-start">
                <p class="fw-bold h4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Transaksi Mudah Dengan Kurs Terbaik, Solusi Penukaran Uang
                  Anda !


                </p>
                <p class="text-white mb-4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Lorem ipsum dolor sit amet consectetur. Id volutpat at
                  viverra fermentum condimentum at elementum.
                </p>
              </div>
              <div class="container my-5 px-5 text-md-start" style="
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  ">
                <button type="button" class="btn btn-primary rounded-pill px-5 py-2">
                  Hubungi Kami
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://images.pexels.com/photos/6694543/pexels-photo-6694543.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          class="d-block w-100" style="filter: brightness(0.6)" alt="Slide 2" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-5 p-4 text-md-start">
                <p class="fw-bold h4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Transaksi Mudah Dengan Kurs Terbaik, Solusi Penukaran Uang
                  Anda !
                </p>
                <p class="text-white mb-4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Lorem ipsum dolor sit amet consectetur. Id volutpat at
                  viverra fermentum condimentum at elementum.
                </p>
              </div>
              <div class="container my-5 px-5 text-md-start" style="
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  ">
                <button type="button" class="btn btn-primary rounded-pill px-5 py-2">
                  Hubungi Kami
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img
          src="https://images.pexels.com/photos/12008048/pexels-photo-12008048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
          class="d-block w-100" style="filter: brightness(0.6)" alt="Slide 3" />
        <div class="carousel-caption">
          <div class="container">
            <div class="row">
              <div class="col-md-5 p-4 text-md-start">
                <p class="fw-bold h4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Transaksi Mudah Dengan Kurs Terbaik, Solusi Penukaran Uang
                  Anda !
                </p>
                <p class="text-white mb-4" style="
                      font-family: 'Segoe UI', Tahoma, Geneva, Verdana,
                        sans-serif;
                    ">
                  Lorem ipsum dolor sit amet consectetur. Id volutpat at
                  viverra fermentum condimentum at elementum.
                </p>
              </div>
              <div class="container my-5 px-5 text-md-start" style="
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  ">
                <button type="button" class="btn btn-primary rounded-pill px-5 py-2">
                  Hubungi Kami
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br />
  <br />
  <br />
  <br />

  <!-- <div class="contact-info">
        <p class="mb-1"><strong>PT STARVALAS INDONESIA</strong></p>
        <p class="mb-1">No lain B1 : 24/4/KEP.C8I/JKT/2022</p>
        <p class="mb-1">starvalsa.indonesia</p>
        <p class="mb-1">+62 811 1181 2576</p>
        <p class="mb-0">https://www.starvalas.co.id/</p>
      </div> -->



  <!-- Currency Table Section -->
  <div class="container">
    <div class="d-flex justify-content-center mb-4">
      <div class="kurs-badge">
        <i class="fas fa-chart-line me-2"></i>TABEL KURS STARVALAS
      </div>
    </div>

    <div data-aos="zoom-in">
      <div class="d-flex justify-content-center mt-2 py-2">
        <div class="last-updated d-inline-flex align-items-center">
          <i class="fas fa-sync-alt me-2"></i>
          <span class="mx-2 fw-semibold">Last Updated Rates:</span>
          <span class="fw-semibold"><?= esc($lastUpdate) ?></span>
        </div>
      </div>
    </div>


    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="text-center mb-4 position-relative">
        <h3 class="fw-bold text-primary mb-1">KURS ASING <span class="badge bg-danger ms-2">HARI INI</span></h3>
        <p class="fw-semibold text-secondary mb-4"><?= date('d M Y H:i') ?> WIB</p>
      </div>

      <div class="kurs-wrapper mx-auto">
        <table class="kurs-table mx-auto text-center align-middle">
          <thead>
            <tr>
              <th class="text-center ps-4">KURS</th>
              <th>BELI</th>
              <th>JUAL</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($rates)): ?>
              <?php
              $specialCases = [
                'USD' => 'us',
                'GBP' => 'gb',
                'AUD' => 'au',
                'JPY' => 'jp',
                'CNH' => 'cn',
                'KRW' => 'kr',
                'SAR' => 'sa',
                'SGD' => 'sg',
                'MYR' => 'my',
                'TWD' => 'tw',
                'EUR' => 'eu',
                'DKK' => 'dk',
                'SEK' => 'se',
                'CAD' => 'ca',
                'CHF' => 'ch',
                'NZD' => 'nz',
                'THB' => 'th',
                'HKD' => 'hk',
                'AED' => 'ae',
                'IDR' => 'id',
              ];
              $rowIndex = 0;
              foreach ($rates as $rate):
                $flagCode = $specialCases[$rate['currency_code']] ?? strtolower($rate['currency_code']);
                $isEven = $rowIndex % 2 === 0;
                ?>
                <tr class="<?= $isEven ? 'even' : 'odd' ?>">
                  <td class="ps-4 justify-content-center">
                    <img src="https://hatscripts.github.io/circle-flags/flags/<?= esc($flagCode) ?>.svg"
                      alt="<?= esc($rate['currency_code']) ?>" class="flag-icon me-2">
                    <?= esc($rate['currency_code']) ?>
                  </td>
                  <td class="buy"><?= esc($rate['buy_rate']) ?></td>
                  <td class="sell"><?= esc($rate['sell_rate']) ?></td>
                </tr>
                <?php $rowIndex++; endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="3" class="text-center py-4 text-muted">Data kurs tidak tersedia.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>

    <div class="d-flex justify-content-center mt-4">
      <div class="d-flex align-items-center">
        <i class="fas fa-info-circle textkurs me-2 brand-blue"></i>
        <p class="textkurs my-0 fw-semibold text-muted">Tabel hanya sebagai indikasi. Kurs transaksi dapat berubah
          sesuai fluktuasi pasar.</p>
      </div>
    </div>
  </div>

  <!-- Warning Section -->
  <section class="py-4">
    <div class="container">
      <div data-aos="flip-down">
        <div class="warning-box">
          <div class="warning-icon mx-3">
            <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
          </div>
          <div class="warning-text">
            <h5 class="fw-bold">Waspada Penipuan</h5>
            <p class="mb-0">
              PT Star Valas Indonesia hanya menggunakan rekening bank atas nama: <strong>PT Star Valas
                Indonesia</strong>.
              Hati-hati terhadap pihak yang mengatasnamakan kami dengan rekening pribadi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Kenapa Pilih Star Valas</h2>

      <div class="scroll-service" id="benefitScroll">
        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-map-marker-alt fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Akses Mudah & Strategis</div>
          <p class="service-text">
            Berada di pusat bisnis utama, memudahkan anda dalam transaksi
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-chart-line fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Kurs Istimewa</div>
          <p class="service-text">Dapatkan special rate (S&K Berlaku)</p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-warehouse fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Ketersediaan Tanpa Batas</div>
          <p class="service-text">
            Stok valas selalu tersedia, memastikan kebutuhan anda terpenuhi
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-truck fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Kemudahan Ekstra</div>
          <p class="service-text">
            Nikmati layanan antar langsung ke lokasi Anda (S&K Berlaku)
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-globe fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Pilihan Mata Uang Luas</div>
          <p class="service-text">
            Kami menyediakan beragam jenis mata uang asing, tidak hanya USD, tapi juga EUR, SGD, AUD, JPY, dan lainnya.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-tag fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Tarif Kompetitif</div>
          <p class="service-text">
            Kami menawarkan nilai tukar paling kompetitif di Indonesia tanpa biaya atau komisi tersembunyi.
          </p>
        </div>

        <div class="service-card">
          <div class="service-icon mb-3">
            <i class="fas fa-clock fa-2x brand-blue"></i>
          </div>
          <div class="service-title">Update Kurs Real-Time</div>
          <p class="service-text">
            Kami memberikan informasi kurs secara real-time sehingga konsumer dapat memantau perubahan kurs.
          </p>
        </div>
      </div>

      <div class="scroll-indicator-container">
        <div class="scroll-indicator-bar" id="benefitScrollBar"></div>
      </div>
    </div>
  </section>

  <!-- Branches Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Cabang Kami</h2>

      <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
        <div class="row">

          <!-- StarValas Head Office -->
          <div class="col-md-4 mb-4">
            <div class="card branch-card h-100">
              <div class="card-body">
                <div class="branch-image-wrapper">
                  <img class="branch-image" data-images='["images/STV Propan.jpg", "images/STV Propan 2.jpg"]'
                    src="images/STV Propan.jpg" alt="StarValas Head Office">
                </div>
                <h5 class="card-title brand-blue">StarValas Head Office</h5>
                <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i> Opening Hours:</p>
                <p class="small mb-1">Senin–Jumat</p>
                <p class="small mb-3">10:00 – 22:00</p>
                <p class="card-text">
                  <i class="fas fa-map-marker-alt me-1 brand-red"></i>
                  Propan Tower @ Ciputra International - 14 Lantai 5, RT.14/ RW.4, Rawa Buaya, Cengkareng, West Jakarta City, Jakarta 11740
                </p>
                <a href="https://maps.app.goo.gl/KELqVqDVZwbFNpmS8" class="btn btn-outline-primary btn-sm mt-auto">Lihat Peta</a>
              </div>
            </div>
          </div>

          <!-- StarValas Gold Coast PIK -->
          <div class="col-md-4 mb-4">
            <div class="card branch-card h-100">
              <div class="card-body">
                <div class="branch-image-wrapper">
                  <img class="branch-image"
                    data-images='["images/STR Gold Coast PIK 1.jpg", "images/STR Gold Coast PIK 2.jpg"]'
                    src="images/STR Gold Coast PIK 1.jpg" alt="StarValas Gold Coast PIK">
                </div>
                <h5 class="card-title brand-blue">StarValas Gold Coast PIK</h5>
                <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i> Opening Hours:</p>
                <p class="small mb-1">Senin–Kamis</p>
                <p class="small mb-3">13:00 – 18:00</p>
                <p class="card-text">
                  <i class="fas fa-map-marker-alt me-1 brand-red"></i>
                  Gold Coast Office, JI. Pantai Indah Kapuk No.2, Kamal Muara, Kec. Penjaringan, Jakarta Utara, Daerah Khusus Ibukota Jakarta 14470
                </p>
                <a href="https://maps.app.goo.gl/QHu6Qhw6eUqxJkWq9" class="btn btn-outline-primary btn-sm mt-auto">Lihat Peta</a>
              </div>
            </div>
          </div>

          <!-- StarValas Hotel Fairfield -->
          <div class="col-md-4 mb-4">
            <div class="card branch-card h-100">
              <div class="card-body">
                <div class="branch-image-wrapper">
                  <img class="branch-image"
                    data-images='["images/Hotel Fairfield 1.jpg", "images/Hotel Fairfield 2.jpg"]'
                    src="images/Hotel Fairfield 1.jpg" alt="StarValas Hotel Fairfield">
                </div>
                <h5 class="card-title brand-blue">StarValas Taman Palem</h5>
                <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i> Opening Hours:</p>
                <p class="small mb-1">Senin–Sabtu</p>
                <p class="small mb-3">09:00 – 20:00</p>
                <p class="card-text">
                  <i class="fas fa-map-marker-alt me-1 brand-red"></i>
                  Hotel Fairfield by Marriott, Jl. Husein Sastranegara No.88, RT.002/RW.4, Benda, Kec. Benda, Kota Tangerang, Jawa Barat 15125 (dekat Bandara Soekarno-Hatta)
                </p>
                <a href="https://maps.app.goo.gl/sMuNbcEHR7QtXz267" class="btn btn-outline-primary btn-sm mt-auto">Lihat Peta</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      once: true
    });

    // Enable click-drag horizontal scroll for .scroll-service
    const benefitScroll = document.getElementById('benefitScroll');
    let isDown = false;
    let startX;
    let scrollLeft;

    benefitScroll.addEventListener('mousedown', (e) => {
      isDown = true;
      benefitScroll.classList.add('active');
      startX = e.pageX - benefitScroll.offsetLeft;
      scrollLeft = benefitScroll.scrollLeft;
    });

    benefitScroll.addEventListener('mouseleave', () => {
      isDown = false;
      benefitScroll.classList.remove('active');
    });

    benefitScroll.addEventListener('mouseup', () => {
      isDown = false;
      benefitScroll.classList.remove('active');
    });

    benefitScroll.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - benefitScroll.offsetLeft;
      const walk = (x - startX) * 1.0;
      benefitScroll.scrollLeft = scrollLeft - walk;
    });

    // Touch support for mobile
    benefitScroll.addEventListener('touchstart', (e) => {
      isDown = true;
      benefitScroll.classList.add('active');
      startX = e.touches[0].pageX - benefitScroll.offsetLeft;
      scrollLeft = benefitScroll.scrollLeft;
    });

    benefitScroll.addEventListener('touchend', () => {
      isDown = false;
      benefitScroll.classList.remove('active');
    });

    benefitScroll.addEventListener('touchmove', (e) => {
      if (!isDown) return;
      const x = e.touches[0].pageX - benefitScroll.offsetLeft;
      const walk = (x - startX) * 3.5;
      benefitScroll.scrollLeft = scrollLeft - walk;
    });

    // Scroll indicator update
    const benefitScrollBar = document.getElementById('benefitScrollBar');
    function updateScrollBar() {
      const maxScroll = benefitScroll.scrollWidth - benefitScroll.clientWidth;
      const percent = maxScroll === 0 ? 1 : benefitScroll.scrollLeft / maxScroll;
      benefitScrollBar.style.width = `${Math.max(20, percent * 100)}%`;
    }

    benefitScroll.addEventListener('scroll', updateScrollBar);
    window.addEventListener('resize', updateScrollBar);
    updateScrollBar();

    // Auto-scroll horizontally every 5 seconds
    document.addEventListener("DOMContentLoaded", function () {
      const scrollContainer = document.getElementById("benefitScroll");
      if (!scrollContainer) return;

      let scrollAmount = 0;
      const card = scrollContainer.querySelector(".service-card");
      if (!card) return;

      const cardWidth = card.offsetWidth + 24; // 24px gap
      const maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;

      setInterval(() => {
        scrollAmount += cardWidth;
        if (scrollAmount > maxScroll) scrollAmount = 0;
        scrollContainer.scrollTo({ left: scrollAmount, behavior: "smooth" });
      }, 5000);
    });


  </script>

  <div id="lightbox" class="lightbox-bg">
    <span class="lightbox-arrow left">&lt;</span>
    <img id="lightbox-img" src="">
    <span class="lightbox-arrow right">&gt;</span>
  </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {

      // ---- SLIDESHOW ----
      const imgs = document.querySelectorAll(".branch-image");

      imgs.forEach(img => {
        const list = JSON.parse(img.getAttribute("data-images"));
        let index = 0;

        setInterval(() => {
          img.classList.add("fade-out");

          setTimeout(() => {
            index = (index + 1) % list.length;
            img.src = list[index];
            img.classList.remove("fade-out");
          }, 800);

        }, 5500);
      });


      // ---- LIGHTBOX WITH NEXT/PREV ----
      const lightbox = document.getElementById("lightbox");
      const lightboxImg = document.getElementById("lightbox-img");
      const arrowLeft = document.querySelector(".lightbox-arrow.left");
      const arrowRight = document.querySelector(".lightbox-arrow.right");

      let currentList = [];  // images of the branch
      let currentIndex = 0;  // index inside the fullscreen viewer

      document.querySelectorAll(".branch-image-wrapper").forEach(wrapper => {
        wrapper.addEventListener("click", function () {
          const img = wrapper.querySelector("img");

          // Load all images of this branch
          currentList = JSON.parse(img.getAttribute("data-images"));

          // Find current image index (what the slideshow is showing)
          currentIndex = currentList.indexOf(img.src.split('/').pop());
          if (currentIndex === -1) currentIndex = 0;

          lightboxImg.src = currentList[currentIndex];
          lightbox.style.display = "flex";
        });
      });

      // NEXT image
      arrowRight.addEventListener("click", function (e) {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % currentList.length;
        lightboxImg.style.opacity = 0;

        setTimeout(() => {
          lightboxImg.src = currentList[currentIndex];
          lightboxImg.style.opacity = 1;
        }, 200);
      });

      // PREVIOUS image
      arrowLeft.addEventListener("click", function (e) {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + currentList.length) % currentList.length;
        lightboxImg.style.opacity = 0;

        setTimeout(() => {
          lightboxImg.src = currentList[currentIndex];
          lightboxImg.style.opacity = 1;
        }, 200);
      });

      // Close lightbox when clicking outside
      lightbox.addEventListener("click", function () {
        lightbox.style.display = "none";
      });

    });
  </script>



</body>

</html>