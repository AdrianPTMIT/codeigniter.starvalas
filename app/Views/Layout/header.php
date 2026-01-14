<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8" />
  <title><?= $seo['title'] ?? 'default'?></title>


  <meta name="description" content="<?php //$seo['meta_description'] ?? 'default' ?>" itemprop="description" />
  <meta property="og:title" content="<?php // $seo['title'] ?? 'default'?>" />
  <meta property="og:type" content="blog" />
  <meta property="og:url" content="<?php //base_url($seo['slug']) ?? 'default'?>" />
  <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />
  <meta name="keywords" content="<?php // $seo['meta_keywords'] ?? 'default' ?>" />



  <meta property="og:description" content="Sean Connery found fame and fortune as the
           suave, sophisticated British agent, James Bond." />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap 5 & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- jQuery Install -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


  <style>
    :root {
      --primary-red: #EC2027;
      --primary-blue: #004A79;
      --secondary-blue: #009EFF;
      --light-blue: #C8EAFF;
      --dark-blue: #004A79;
      --accent-blue: #0084D8;
      --white: #FFFFFF;
    }

    body {
      font-family: 'Futura', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    .brand-red {
      color: var(--primary-red);
    }

    .brand-blue {
      color: var(--primary-blue);
    }

    .bg-brand-blue {
      background-color: var(--primary-blue);
    }

    .bg-brand-red {
      background-color: var(--primary-red);
    }

    .btn-primary {
      background-color: var(--primary-red);
      border-color: var(--primary-red);
      font-weight: bold;
      padding: 10px 30px;
    }

    .btn-primary:hover {
      background-color: #d11c23;
      border-color: #d11c23;
    }

    .btn-outline-primary {
      color: var(--primary-blue);
      border-color: var(--primary-blue);
      font-weight: bold;
    }

    .btn-outline-primary:hover {
      background-color: var(--primary-blue);
      color: white;
    }
    
    .header {
      background-color: #0d2c6c;
      /* dark blue */
      padding: 10px 0;
      color: white;
      position: sticky;
      top: 0;
      right: 0;
      left: 0;
      z-index: 999;
      transition: all .3s ease;

    }

    .footer {
      background-color: #0d2c6c;
      /* dark blue */
      color: white;
      padding: 40px 20px;
    }

    .footer-logo{
      height: 55px;
      margin-bottom: 20px;
      background: #f5f9ff;
      border-radius: 8px;
      padding: 8px;
    }

    .footer-text {
      font-size: 0.82rem;
    }

    .contact-icon {
      font-size: 1.2rem;
      color: #00b0ff;
      margin-right: 10px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    @media (max-width: 767px) {
      .footer-logo-circle {
        margin: 0 auto 20px auto;
      }
    }

    .icon-circle {
      background-color: white;
      border-radius: 50%;
      width: 120px;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 20px;
    }

    .icon-circle img {
      width: 60px;
      height: 60px;
    }

    #headerCarousel .carousel-item img {
      height: 500px;
      object-fit: cover;
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

    .branch-card {
      background-color: #034078;
      color: white;
      text-align: center;
      border: none;
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
  


    .branch-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .branch-card .card-title {
      font-weight: bold;
      font-size: 1.2rem;
    }

    .branch-card .card-text {
      font-size: 0.95rem;
    }



    .read-more-btn {
      margin-top: 30px;
      background-color: #0066cc;
      color: #00332c;
      border: none;
      border-radius: 25px;
      padding: 10px 25px;
      font-weight: bold;
    }

    .read-more-btn:hover {
      background-color: #004c99;
    }

    .hidden-branches {
      display: none;
      margin-top: 30px;
    }

    .icons img {
      width: 32px;
      margin-right: 5px;
    }

    .warning-box {
      max-width: 900px;
      margin: 40px auto;
      padding: 15px 20px;
      background-color: #f5f9ff;
      border: 2px solid #003366;
      border-radius: 15px;
      display: flex;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .warning-text {
      color: #003366;
    }

    .warning-text h5 {
      font-weight: bold;
      margin: 0;
    }

    .warning-text p {
      margin: 0;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      color: #002e5b;
      margin-bottom: 30px;
    }

    .scroll-service {
      display: flex;
      overflow-x: auto;
      gap: 20px;
      padding: 0 20px;
    }

    .service-card {
      min-width: 300px;
      background-color: #e9f6ff;
      border: 1px solid #d0dce8;
      border-radius: 12px;
      padding: 30px 20px;
      text-align: center;
      flex-shrink: 0;
    }

    .service-title {
      font-weight: bold;
      font-size: 18px;
      color: #002e5b;
    }

    .service-text {
      font-size: 14px;
      color: #333;
    }

    /* Hide scrollbar for all browsers */
    .scroll-service::-webkit-scrollbar {
      display: none;
    }

    .scroll-service {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>

  <style>
    body {
      background-image: url("images/patternglobe.png");
      /* <-- use your actual image file name here */
      background-size: cover;
      /* Cover the whole screen */
      background-repeat: no-repeat;
      /* Prevent tiling */
      background-attachment: fixed;
      /* Optional: fixed background */
      background-position: center;
      /* Center the image */
    }

     .navbar-brand {
      font-weight: bold;
      color: var(--primary-blue) !important;
    }

  </style>



</head>
<style>
  .navbar .dropdown-menu .dropdown-item:hover,
  .navbar .dropdown-menu .dropdown-item:focus {
    color: #0074d9 !important;
    background-color: #e6f2fb !important;
    font-weight: 600;
    border-radius: 6px;
    transition: background 0.2s, color 0.2s;
  }

  .navbar .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var dropdown = document.querySelector('.navbar .dropdown');
    if (dropdown) {
      dropdown.addEventListener('mouseenter', function () {
        var menu = dropdown.querySelector('.dropdown-menu');
        var toggle = dropdown.querySelector('.dropdown-toggle');
        if (menu && toggle && !dropdown.classList.contains('show')) {
          toggle.click();
        }
      });
      dropdown.addEventListener('mouseleave', function () {
        var menu = dropdown.querySelector('.dropdown-menu');
        var toggle = dropdown.querySelector('.dropdown-toggle');
        if (menu && toggle && dropdown.classList.contains('show')) {
          toggle.click();
        }
      });
    }
  });

</script>

<header class="header main-content">
  <nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container-fluid">
      <!-- logo dan text -->
      <a href="/" class="d-inline-block mx-5">
        <img src="images/logostar.png" height="70px" alt="" style="filter: brightness(0) invert(1)"
          class="mx-5" />
      </a>
      <!-- Nav Links -->
      <div class="collapse navbar-collapse justify-content-end mx-5" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Dropdown Cabang -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown">
              Cabang
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="cabang-jakarta">Jakarta</a>
              </li>
              <li><a class="dropdown-item" href="cabang-tangerang">Tangerang</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="tentang-kami">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="hubungi-kami">Hubungi Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


