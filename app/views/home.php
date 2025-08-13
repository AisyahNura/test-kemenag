<?php // app/views/home.php ?>
<section class="hero">
  <div class="hero-text">
    <p class="hero-title">Layanan Informasi dan<br>Dokumentasi Publik PPID</p>
    <p class="hero-sub">KANWIL KEMENAG PROV. JAWA TIMUR</p>
  </div>
  <img class="hero-illustration" src="<?= asset('img/person.svg') ?>" alt="Ilustrasi petugas PPID">
</section>

<div class="ticker" role="region" aria-label="Pengumuman">
  <div class="ticker-left">🔔 Pengumuman</div>

  <div class="ticker-content">
    <div class="ticker-track">
      <span>Selasa, 22 Juli 2025 — Seleksi Administrasi PPG Dalam Jabatan Bagi Guru Madrasah Batch-II</span>
      <!-- Tambah satu lagi kalau mau animasinya mulus terus -->
      <!-- <span>Pengumuman kedua…</span> -->
    </div>
  </div>

  <div class="ticker-right"></div>
</div>

<div class="layout">
  <div class="content">
    <h2 class="section-title"><span>INFORMASI INSTANSI</span></h2>

    <div class="instansi-grid">
      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-profil.svg') ?>" alt="Ikon Profil PPID">
        <div>
          <div class="title">Informasi 1</div>
          <div class="sub">Tentang PPID, Struktur, Visi & Misi, Tugas & Fungsi</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-info.svg') ?>" alt="Ikon Informasi Publik">
        <div>
          <div class="title">Informasi 2</div>
          <div class="sub">Berkala · Serta Merta · Setiap Saat</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-layanan.svg') ?>" alt="Ikon Layanan Informasi">
        <div>
          <div class="title">Informasi 3</div>
          <div class="sub">Permohonan · Keberatan · Sengketa · SOP</div>
        </div>
      </a>

      <a class="instansi-card" href="javascript:void(0)">
        <img src="<?= asset('img/ic-standar.svg') ?>" alt="Ikon Standar Layanan">
        <div>
          <div class="title">Informasi 4</div>
          <div class="sub">Maklumat · Jadwal · Biaya/Tarif · Standar Pengumuman</div>
        </div>
      </a>
    </div>

    <h2 class="section-title with-pill">
      <span>BERITA UTAMA</span><span class="pill">Berita Utama</span>
    </h2>
    <div class="news-placeholder">
      <p>Area berita (nanti bisa diisi dari database / API).</p>
    </div>
  </div>

  <aside class="sidebar">
    <div class="widget">
      <h3>Jajak Pendapat</h3>
      <p class="muted">Jajak Pendapat telah ditutup..!</p>
    </div>

    <div class="widget">
      <h3>Video</h3>
      <div class="video-thumb"><div class="play">▶</div></div>
      <a class="btn" href="#">Lihat Semua Video →</a>
    </div>

    <div class="widget">
      <h3>Info Grafis</h3>
      <img class="infografis" src="<?= asset('img/infografis-placeholder.png') ?>" alt="Info grafis">
    </div>
  </aside>
</div>
