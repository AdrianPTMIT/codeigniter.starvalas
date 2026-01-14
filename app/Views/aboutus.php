<style>
/* Top Banner */
.banner-contact {
  min-height: 380px;
  background-image: url('images/AboutUs.png');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  position: relative;
}

.banner-overlay {
  background: rgba(24, 51, 106, 0.65);
  min-height: 380px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 40px 20px;
  text-align: center;
}

.banner-contact h1 {
  font-size: 3rem;
  letter-spacing: 1px;
}

/* Wrapper for globe + logo */
.logo-globe-wrapper {
  position: relative;
  width: 420px;
  height: 420px;
  margin: 0 auto 40px auto;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 
    0 0 60px rgba(32, 96, 223, 0.3),
    inset 0 0 30px rgba(255, 255, 255, 0.1);
}

/* Canvas must sit BEHIND logo */
#globeCanvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100% !important;
  z-index: 1;
  border-radius: 50%;
}

/* Logo positioned above the globe */
.logo-globe-wrapper img {
  position: absolute;
  z-index: 3;
  max-width: 75%;
  height: auto;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  filter: drop-shadow(0px 6px 14px rgba(0,0,0,0.25));
  transition: transform 0.5s ease;
}

.logo-globe-wrapper:hover img {
  transform: translate(-50%, -50%) scale(1.05);
}

/* About text */
.about-text p {
  font-size: 1.08rem;
  line-height: 1.7;
  margin-bottom: 18px;
}

.about-text a {
  color: #143b7d;
  font-weight: 600;
}

/* Mobile Fixes */
@media (max-width: 576px) {
  .logo-globe-wrapper {
    width: 300px;
    height: 300px;
  }

  .logo-globe-wrapper img {
    max-width: 80%;
  }
}

/* New: Pulsing effect for globe */
@keyframes pulseGlow {
  0% { box-shadow: 0 0 60px rgba(32, 96, 223, 0.3); }
  50% { box-shadow: 0 0 80px rgba(32, 96, 223, 0.5); }
  100% { box-shadow: 0 0 60px rgba(32, 96, 223, 0.3); }
}

.logo-globe-wrapper {
  animation: pulseGlow 4s infinite ease-in-out;
}

/* New: Floating animation for logo */
@keyframes float {
  0% { transform: translate(-50%, -50%); }
  50% { transform: translate(-50%, -55%); }
  100% { transform: translate(-50%, -50%); }
}

.logo-globe-wrapper img {
  animation: float 6s ease-in-out infinite;
}
</style>

<div class="banner-contact">
  <div class="banner-overlay">
    <h1 class="text-white fw-bold mb-3">Tentang Kami</h1>
    <p class="text-white" style="font-size: 1.25rem;">
      Sejarah, visi, dan perjalanan perusahaan kami
    </p>
  </div>
</div>

<br><br>

<div class="container my-5">
  <!-- Globe + Logo -->
  <div class="logo-globe-wrapper">
    <canvas id="globeCanvas"></canvas>
    <img src="images/logostar.png" alt="Star Valas Logo">
  </div>

  <!-- About Text -->
  <div class="about-text">
    <p>
      Star Valas adalah perusahaan penukaran mata uang asing (money
      changer) terpercaya yang berbasis di Jakarta. Kami menyediakan layanan
      penukaran valas yang cepat, aman, dan kompetitif untuk mendukung
      kebutuhan transaksi pelanggan individu maupun bisnis.
    </p>

    <p>
      Dengan pengalaman bertahun-tahun dalam dunia valas, kami mengutamakan
      keakuratan transaksi, transparansi nilai tukar, serta pelayanan
      yang ramah dan profesional. Kami percaya bahwa kepercayaan pelanggan
      adalah aset utama kami.
    </p>

    <p>
      Star Valas melayani berbagai mata uang asing termasuk USD, EUR, JPY,
      SGD, AUD, dan banyak lagi. Semua transaksi dilakukan dengan standar
      keamanan tinggi dan sistem manajemen yang terintegrasi.
    </p>

    <p>
      Ke depannya, kami berkomitmen untuk terus memperluas jaringan cabang,
      meningkatkan teknologi layanan, dan memberikan pengalaman transaksi
      valas terbaik bagi seluruh pelanggan kami.
    </p>

    <p>
      Untuk informasi lebih lanjut, silakan kunjungi halaman
      <a href="contactus">Hubungi Kami</a>.
    </p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>

<script>
const canvas = document.getElementById("globeCanvas");
const wrapper = canvas.parentElement;

/* ================= RENDERER ================= */
const renderer = new THREE.WebGLRenderer({
  canvas,
  alpha: true,
  antialias: true,
});
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
renderer.setClearColor(0x000000, 0);
renderer.setSize(wrapper.clientWidth, wrapper.clientHeight);

/* ================= SCENE ================= */
const scene = new THREE.Scene();

/* ================= CAMERA ================= */
const camera = new THREE.PerspectiveCamera(
  60,
  wrapper.clientWidth / wrapper.clientHeight,
  0.5,
  1000
);
camera.position.set(1.35, 0, 1.5);

/* ================= LIGHTING ================= */
scene.add(new THREE.AmbientLight(0xffffff, 1.0));

const dirLight = new THREE.DirectionalLight(0xffffff, 0.1);
dirLight.position.set(5, 3, 5);
scene.add(dirLight);

/* ================= CONTROLS ================= */
const controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.enableZoom = false;
controls.enablePan = false;
controls.enableRotate = false;
controls.autoRotate = true;
controls.autoRotateSpeed = 0.1;
controls.enableDamping = true;

/* ================= GLOBE ================= */
const loader = new THREE.TextureLoader();

const earthTexture = loader.load("images/fullearth.jpg");

const globeGeometry = new THREE.SphereGeometry(1, 64, 64);
const globeMaterial = new THREE.MeshStandardMaterial({
  map: earthTexture,
  roughness: 0.9,
  metalness: 0.05,
});

const earth = new THREE.Mesh(globeGeometry, globeMaterial);
earth.rotation.y = Math.PI; // correct texture orientation
scene.add(earth);

/* ================= RESIZE ================= */
function resize() {
  const w = wrapper.clientWidth;
  const h = wrapper.clientHeight;
  renderer.setSize(w, h);
  camera.aspect = w / h;
  camera.updateProjectionMatrix();
}
window.addEventListener("resize", resize);

/* ================= ANIMATE ================= */
const clock = new THREE.Clock();

function animate() {
  requestAnimationFrame(animate);

  const delta = clock.getDelta();
  earth.rotation.y += delta * 0.13;

  controls.update();
  renderer.render(scene, camera);
}

animate();
</script>


