<?php /* app/views/partials/header.php */ ?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($title ?? 'PPID Kemenag Jatim') ?></title>

  <!-- CSS utama -->
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">

  <!-- Favicon (pakai logo yang sama) -->
  <link rel="icon" href="<?= asset('img/logo-kemenag.png') ?>" type="image/png">
</head>
<body>
<?php
  // variabel penanda halaman/ sub-halaman
  $currPage  = $_GET['page']  ?? 'home';
  $currSub   = $_GET['sub']   ?? null;      // untuk PROFIL & LAYANAN
  $currJenis = $_GET['jenis'] ?? null;      // untuk INFORMASI PUBLIK
?>
<header class="topbar">
  <div class="container">
    <div class="header-inner">
      <a class="brand" href="?page=home">
        <img class="logo" src="<?= asset('img/logo-kemenag.png') ?>" alt="Logo Kemenag">
        <div class="brand-text">
          <strong>PPID UNIT</strong>
          <span>Kanwil Kementrian Agama <br>Kabupaten Jombang</span>
        </div>
      </a>

      <button class="nav-toggle" aria-label="Buka menu" onclick="toggleNav()">☰</button>

      <nav id="mainnav" class="nav" aria-label="Menu utama">
        <a href="?page=home" class="<?= $currPage==='home' ? 'active' : '' ?>">BERANDA</a>

        <!-- PROFIL -->
        <div class="dropdown">
          <a class="dropbtn <?= $currPage==='profil' ? 'active' : '' ?>" href="?page=profil">PROFIL ▾</a>
          <div class="dropdown-content">
            <a href="?page=profil&sub=tentang"    class="<?= ($currPage==='profil' && ($currSub==='tentang' || $currSub===null)) ? 'active' : '' ?>">Profil PPID</a>
            <a href="?page=profil&sub=pejabat"    class="<?= ($currPage==='profil' && $currSub==='pejabat')     ? 'active' : '' ?>">Profil Pejabat</a>
            <a href="?page=profil&sub=visi-misi"  class="<?= ($currPage==='profil' && $currSub==='visi-misi')   ? 'active' : '' ?>">Visi & Misi</a>
            <a href="?page=profil&sub=struktur"   class="<?= ($currPage==='profil' && $currSub==='struktur')    ? 'active' : '' ?>">Struktur Organisasi</a>
            <a href="?page=profil&sub=tugas"      class="<?= ($currPage==='profil' && $currSub==='tugas')       ? 'active' : '' ?>">Tugas & Fungsi</a>
          </div>
        </div>

        <!-- INFORMASI PUBLIK -->
        <div class="dropdown">
          <a class="dropbtn <?= $currPage==='informasi' ? 'active' : '' ?>" href="?page=informasi">INFORMASI PUBLIK ▾</a>
          <div class="dropdown-content">
            <a href="?page=informasi&jenis=berkala"       class="<?= ($currPage==='informasi' && $currJenis==='berkala')       ? 'active' : '' ?>">Berkala</a>
            <a href="?page=informasi&jenis=serta_merta"   class="<?= ($currPage==='informasi' && $currJenis==='serta_merta')   ? 'active' : '' ?>">Serta Merta</a>
            <a href="?page=informasi&jenis=setiap_saat"   class="<?= ($currPage==='informasi' && $currJenis==='setiap_saat')   ? 'active' : '' ?>">Setiap Saat</a>
          </div>
        </div>

        <a href="?page=regulasi" class="<?= $currPage==='regulasi' ? 'active' : '' ?>">REGULASI</a>

        <!-- LAYANAN INFORMASI -->
        <div class="dropdown">
          <a class="dropbtn <?= $currPage==='layanan' ? 'active' : '' ?>" href="?page=layanan">LAYANAN INFORMASI ▾</a>
          <div class="dropdown-content">
            <a href="?page=layanan&sub=permohonan" class="<?= ($currPage==='layanan' && $currSub==='permohonan') ? 'active' : '' ?>">Permohonan Informasi</a>
            <a href="?page=layanan&sub=keberatan"  class="<?= ($currPage==='layanan' && $currSub==='keberatan')  ? 'active' : '' ?>">Keberatan Informasi</a>
            <a href="?page=layanan&sub=sengketa"   class="<?= ($currPage==='layanan' && $currSub==='sengketa')   ? 'active' : '' ?>">Penyelesaian Sengketa</a>
            <a href="?page=layanan&sub=sop"        class="<?= ($currPage==='layanan' && $currSub==='sop')        ? 'active' : '' ?>">SOP Layanan Informasi</a>
          </div>
        </div>

        <!-- STANDAR LAYANAN -->
        <div class="dropdown">
          <a class="dropbtn <?= $currPage==='standar' ? 'active' : '' ?>" href="?page=standar">STANDAR LAYANAN ▾</a>
          <div class="dropdown-content">
            <a href="?page=standar&sub=jadwal" class="<?= ($currPage==='standar' && $currSub==='jadwal') ? 'active' : '' ?>">Jadwal Pelayanan</a>
            <a href="?page=standar&sub=biaya" class="<?= ($currPage==='standar' && $currSub==='biaya') ? 'active' : '' ?>">Biaya/Tarif Layanan</a>
            <a href="?page=standar&sub=standar-layanan" class="<?= ($currPage==='standar' && $currSub==='standar-layanan') ? 'active' : '' ?>">Standar Layanan</a>
            <a href="?page=standar&sub=kebijakan" class="<?= ($currPage==='standar' && $currSub==='kebijakan') ? 'active' : '' ?>">Arah Kebijakan Layanan</a>
            <a href="?page=standar&sub=maklumat" class="<?= ($currPage==='standar' && $currSub==='maklumat') ? 'active' : '' ?>">Maklumat Pelayanan</a>
          </div>
        </div>


      </nav>
    </div>
  </div>
</header>

<!-- buka <main> di header, tutupnya di footer.php -->
<main class="container" style="margin-top:20px;">
<script>
  // fallback JS untuk tombol menu mobile
  function toggleNav(){ document.getElementById('mainnav').classList.toggle('open'); }
</script>
