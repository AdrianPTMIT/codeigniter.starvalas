<style>
  /* --- GLOBAL CLEANUP --- */
  body {
    background-image: url("images/patternglobe.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }

  /* --- CONTACT PAGE STYLES --- */
  .banner-contact {
    min-height: 350px;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }

  .banner-contact .overlay-hero {
    background: rgba(24, 51, 106, 0.65);
    min-height: 350px;
    padding: 70px 20px;
  }

  /* --- MAP & CARDS --- */
  .map-wrapper {
    width: 100%;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.18);

    /* Fix for Google Maps clipping card & pin */
    height: 350px;
    background: #eaeaea;
  }


  /* Info Cards */
  .phone-card {
    background-color: #f1f8fc;
    border: 2px solid #e3e6eb;
    padding: 18px;
    border-radius: 12px;
    text-align: center;
    min-height: 150px;
    transition: .3s;
  }

  .phone-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
  }

  .phone-card img {
    width: 45px;
    height: 45px;
    object-fit: contain;
  }

  /* Contact Form */
  .contact-form {
    background-color: #0d2c6c;
    padding: 2rem;
    border-radius: 14px;
    color: white;
  }

  .form-control {
    border-radius: 10px;
    padding: 14px;
    background-color: #e8e8e8;
    border: none;
  }

  .input-group-text {
    background: white;
    border: none;
    border-radius: 10px 0 0 10px;
  }

  .btn-submit {
    background-color: #0066cc;
    padding: 14px;
    border-radius: 10px;
    transition: .25s;
    font-weight: 600;
  }

  .btn-submit:hover {
    background-color: #022c5b;
  }

  /* Social Icons */
  .social-icon {
    width: 48px;
    height: 48px;
    border: 2px solid #0d2c6c;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 5px;
    transition: .25s;
    font-size: 1.2rem;
  }

  .social-icon:hover {
    background-color: #0d2c6c;
    color: white;
    transform: scale(1.1);
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
</style>


<!-- HERO BANNER -->
<div class="banner-contact d-flex align-items-center justify-content-center" style="
        min-height: 350px;
        background-image: url('images/contactus.jpg');
        background-size: cover;
        background-position: center;
      ">
  <div class="text-center w-100 p-5" style="background: rgba(24, 51, 106, 0.65); min-height: 350px">
    <h1 class="text-white fw-bold mb-2 py-4 my-5" style="letter-spacing: 1px">
      Hubungi Kami
    </h1>
    <p class="text-white mb-0 pb-3" style="font-size: 1.2rem">
      Kami siap membantu kebutuhan penukaran valas dan pertanyaan Anda.
    </p>
  </div>
</div>

<br><br>

<div class="container my-5">
  <div class="row g-4 align-items-stretch">

    <!-- LEFT SIDE -->
    <div class="col-lg-6">
      <h2 class="fw-semibold text-center mb-4">Starvalas HO</h2>

      <!-- MAP -->
<div class="map-wrapper mb-4">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6817365496645!2d106.72689227475016!3d-6.17334829381401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f781539fb39b%3A0xdfa30aba64cea2a0!2sOffice!5e0!3m2!1sen!2sid!4v1763959586409!5m2!1sen!2sid"
    width="600"
    height="450"
    style="border:0; width:100%; height:100%;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


      <!-- 3 INFO CARDS -->
      <div class="row g-3">
        <div class="col-4">
          <div class="phone-card">
            <img src="https://cdn-icons-png.freepik.com/512/8862/8862589.png">
            <h6 class="mt-2 mb-1">Nomor Telp.</h6>
            <p class="small mb-0">+62 811 1181 2576</p>
          </div>
        </div>

        <div class="col-4">
          <div class="phone-card">
            <img src="https://cdn-icons-png.freepik.com/512/10505/10505772.png">
            <h6 class="mt-2 mb-1">Email Kami</h6>
            <p class="small mb-0">support@starvalas.co.id</p>
          </div>
        </div>

        <div class="col-4">
          <div class="phone-card">
            <img src="https://cdn-icons-png.freepik.com/512/11673/11673176.png">
            <h6 class="mt-2 mb-1">Whatsapp Kami</h6>
            <a href="https://wa.me/6281111812576" target="_blank" class="btn btn-outline-success btn-sm">Klik Di
              Sini</a>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT FORM -->
    <div class="col-lg-6 d-flex align-items-center">
      <div class="contact-form w-100">
        <h3 class="text-center mb-4">Get In Touch</h3>

        <form>
          <div class="row mb-3">
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" placeholder="Full Name*" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Email*" required>
            </div>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text">
                <img src="https://flagcdn.com/w40/id.png" width="24"> &nbsp;+62
              </span>
              <input type="tel" class="form-control" placeholder="No. Whatsapp*" required>
            </div>
          </div>

          <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
          </div>

          <div class="mb-3">
            <select class="form-select" required>
              <option disabled selected>Jenis Layanan</option>
              <option>Penukaran Valas</option>
              <option>Informasi Kurs</option>
              <option>Lainnya</option>
            </select>
          </div>

          <button class="btn btn-submit w-100">Kirim</button>
        </form>
      </div>
    </div>

  </div>

  <!-- SOCIAL -->
  <div class="text-center mt-4">
    <p>Follow us for more information:</p>
    <a href="https://bit.ly/4r4pzRp" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="https://bit.ly/4qUrJCU" class="social-icon"><i class="fab fa-instagram"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
  </div>
</div>


<br />
<br />
