<style>
  /* Footer Modern Look */
  footer.footer {
    background: linear-gradient(135deg, #002855, #034078, #0466c8);
    color: white;
    position: relative;
    overflow: hidden;
  }

  /* Animated wave top border */
  footer.footer::before {
    content: "";
    position: absolute;
    top: -30px;
    left: 0;
    width: 100%;
    height: 60px;
    background: url('https://raw.githubusercontent.com/rafaelalmeidatk/animated-waves/master/dist/wave-top.svg')
      repeat-x;
    background-size: contain;
    animation: wave 12s linear infinite;
    opacity: 0.4;
  }

  @keyframes wave {
    from {
      background-position-x: 0;
    }
    to {
      background-position-x: 1000px;
    }
  }

  /* Hover glow for quick links */
  .footer-quick-links a {
    position: relative;
    transition: color 0.3s ease;
  }

  .footer-quick-links a:hover {
    color: #ffc107;
  }

  .footer-quick-links a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 0%;
    height: 2px;
    background: #ffc107;
    transition: width 0.3s ease;
  }

  .footer-quick-links a:hover::after {
    width: 100%;
  }

  /* Contact icons animation */
  .contact-item img {
    transition: transform 0.4s ease, filter 0.4s ease;
  }

  .contact-item:hover img {
    transform: scale(1.1) rotate(-5deg);
    filter: brightness(1.2);
  }

  /* Newsletter animation */
  .footer input[type="email"] {
    border: none;
    outline: none;
    padding: 10px 15px;
    transition: all 0.4s ease;
  }

  .footer input[type="email"]:focus {
    box-shadow: 0 0 10px #ffc107;
    transform: scale(1.03);
  }

  /* Social media icons */
  .social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
  }

  .social-icons a {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  }

  .social-icons a img {
    width: 24px;
    transition: transform 0.3s ease;
  }

  .social-icons a:hover {
    background: #ffc107;
    transform: translateY(-6px);
    box-shadow: 0 4px 15px rgba(255, 193, 7, 0.6);
  }

  .social-icons a:hover img {
    transform: scale(1.2);
    filter: brightness(1.1) contrast(1.1);
  }

  /* Scroll Button Enhanced */
  #scrollTopBtn {
    position: fixed;
    bottom: 20px;
    right: 15px;
    background: linear-gradient(135deg, #034078, #0466c8);
    color: white;
    border: none;
    border-radius: 50%;
    padding: 14px 18px;
    font-size: 20px;
    z-index: 999;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    display: none;
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  #scrollTopBtn:hover {
    background: linear-gradient(135deg, #0466c8, #023e7d);
    transform: translateY(-4px);
  }

  html {
    scroll-behavior: smooth;
  }

  /* Fade-in animation for footer sections */
  .footer .col-md-3,
  .footer .col-md-2 {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeInUp 1s ease forwards;
  }

  .footer .col-md-3:nth-child(1) {
    animation-delay: 0.2s;
  }

  .footer .col-md-2:nth-child(2) {
    animation-delay: 0.4s;
  }

  .footer .col-md-2:nth-child(3) {
    animation-delay: 0.6s;
  }

  .footer .col-md-2:nth-child(4) {
    animation-delay: 0.8s;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Footer bottom note */
  .footer-bottom {
    text-align: center;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 30px;
    padding-top: 20px;
    font-size: 14px;
    opacity: 0.8;
  }
</style>

<footer class="footer py-5">
  <div class="container">
    <div class="row">
      <!-- Company Info -->
      <div class="col-md-3 mb-3 d-flex flex-column align-items-md-start align-items-center text-md-start text-center">
        <div class="footer-logo mx-1 mb-2" data-aos="zoom-in">
          <img src="images/logostar.png" alt="Star Valas" style="height: 45px" />
        </div>
        <h6 class="footer-text small mb-3">
          PT Star Valas Indonesia sudah berizin dari Bank Indonesia dengan
          no 24/4/KEP.GBI/JKT/2022
        </h6>
        <div class="d-inline-flex justify-content-start me-auto gap-2">
          <img src="images/bankindo.webp" alt="" height="35px" />
          <img src="images/kupva.webp" alt="" height="69px" />
          <img src="images/apva.webp" alt="" height="60px" />
        </div>
      </div>

      <!-- Address -->
      <div class="col-md-2">
        <h5>Alamat</h5>
        <p>
          Jl. Proklamasi No. 10, Warungdoyong Selatan RT 045/RW 010, Kel.
          Rengasdengklok Selatan, Kec. Rengasdengklok, Kabupaten Karawang, Jawa Barat 41352
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 footer-quick-links">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="/">Home</a></li>
          <li><a href="tentang-kami">Tentang Kami</a></li>
          <li><a href="hubungi-kami">Hubungi Kami</a></li>
          <li><a href="cabang-jakarta">Cabang Kami</a></li>
          <li><a href="blog">Blog</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-2">
        <h5 class="fw-semibold">Kontak Kami</h5>
        <div class="contact-item d-flex align-items-center my-2">
          <img src="https://cdn-icons-png.freepik.com/512/10505/10505772.png" alt="" height="32px" />
          <p class="mb-0 mx-2 small">support@starvalas.co.id</p>
        </div>
        <div class="contact-item d-flex align-items-center my-2">
          <img src="https://cdn-icons-png.freepik.com/512/8862/8862589.png" alt="" height="32px" />
          <p class="mb-0 mx-2 small">+62 811 1181 2576</p>
        </div>
        <div class="contact-item d-flex align-items-center my-2">
          <img src="images/whatsapp.png" alt="" height="32px" />
          <p class="mb-0 mx-2 small">+62 811 1181 2576</p>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="col-md-3 text-white">
        <h5 class="fw-bold text-warning">Newsletter</h5>
        <p class="small">
          Subscribe untuk mendapatkan pembaruan tentang nilai tukar mata uang dan penawaran spesial.
        </p>

        <form class="d-flex flex-column">
          <input type="email" class="form-control rounded-top-2" placeholder="Your Email" />
          <button type="submit" class="btn fw-bold bg-warning text-dark mt-2 rounded-bottom-2">
            Subscribe
          </button>
        </form>

        <!-- Social Media Icons -->
        <div class="social-icons">
          <a href="https://www.instagram.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" /></a>
          <a href="https://www.linkedin.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" /></a>
          <a href="https://www.facebook.com" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" /></a>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      © 2025 PT. Star Valas Indonesia. Hak Cipta Dilindungi Undang-Undang.
    </div>
  </div>
</footer>

<!-- Scroll Top Button -->
<button id="scrollTopBtn" class="btn btn-primary">↑</button>

<script>
  AOS.init();

  // Scroll-to-top visibility
  window.addEventListener("scroll", () => {
    const btn = document.getElementById("scrollTopBtn");
    if (window.scrollY > 150) {
      btn.style.display = "block";
      btn.style.opacity = "1";
    } else {
      btn.style.opacity = "0";
      setTimeout(() => (btn.style.display = "none"), 500);
    }
  });

  // Scroll-to-top click
  document.getElementById("scrollTopBtn").addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
