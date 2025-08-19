<?php /* app/views/standar.php */
$sub = $_GET['sub'] ?? null;
?>

<?php if ($sub === null): ?>
  <!-- LANDING: pilih sub-bab -->
  <section class="section-box">
    <h2>Standar Pelayanan</h2>
    <div class="instansi-grid" style="margin-top:16px">
    <a class="instansi-card" href="?page=standar&sub=jadwal">
      <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🕐</div>
      <div>
        <div class="title">Jadwal Pelayanan</div>
        <div class="sub">Jam operasional dan jadwal layanan informasi</div>
      </div>
    </a>

    <a class="instansi-card" href="?page=standar&sub=biaya">
      <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">💰</div>
      <div>
        <div class="title">Biaya/Tarif Layanan</div>
        <div class="sub">Biaya penggandaan dan tarif layanan informasi</div>
      </div>
    </a>

    <a class="instansi-card" href="?page=standar&sub=standar-layanan">
      <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📊</div>
      <div>
        <div class="title">Standar Layanan</div>
        <div class="sub">Indikator dan standar kualitas layanan</div>
      </div>
    </a>

    <a class="instansi-card" href="?page=standar&sub=kebijakan">
      <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">🎯</div>
      <div>
        <div class="title">Arah Kebijakan Layanan</div>
        <div class="sub">Kebijakan dan orientasi layanan informasi</div>
      </div>
    </a>

    <!-- NEW: Maklumat Pelayanan -->
    <a class="instansi-card" href="?page=standar&sub=maklumat">
      <div style="width:42px;height:42px;background:var(--teal);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;">📜</div>
      <div>
        <div class="title">Maklumat Pelayanan</div>
        <div class="sub">Komitmen pelayanan publik</div>
      </div>
          </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=standar&sub=jadwal" class="<?= $sub==='jadwal'?'active':'' ?>">Jadwal Pelayanan</a>
  <a href="?page=standar&sub=biaya" class="<?= $sub==='biaya'?'active':'' ?>">Biaya/Tarif Layanan</a>
  <a href="?page=standar&sub=standar-layanan" class="<?= $sub==='standar-layanan'?'active':'' ?>">Standar Layanan</a>
  <a href="?page=standar&sub=kebijakan" class="<?= $sub==='kebijakan'?'active':'' ?>">Arah Kebijakan Layanan</a>
  <a href="?page=standar&sub=maklumat" class="<?= $sub==='maklumat'?'active':'' ?>">Maklumat Pelayanan</a>
</nav>

<?php if ($sub==='jadwal'): ?>
  <section class="card">
    <h2>Jadwal Pelayanan</h2>
    <p>
      Layanan permohonan informasi pada PPID Kantor Kementerian Agama Kabupaten Jombang
      dilaksanakan pada hari kerja, mulai Senin sampai dengan Jumat, dengan ketentuan
      waktu sebagai berikut:
    </p>

    <div class="table-responsive">
      <table class="schedule-table">
        <thead>
          <tr><th class="group" colspan="2">Senin – Kamis</th></tr>
        </thead>
        <tbody>
          <tr>
            <td class="label">Jam Layanan</td>
            <td class="value">: 08.00 WIB – 15.00 WIB</td>
          </tr>
          <tr>
            <td class="label">Istirahat, Shalat, Makan</td>
            <td class="value">: 12.00 WIB – 13.00 WIB</td>
          </tr>
        </tbody>

        <thead>
          <tr><th class="group" colspan="2">Jumat</th></tr>
        </thead>
        <tbody>
          <tr>
            <td class="label">Jam Layanan</td>
            <td class="value">: 08.00 WIB – 15.00 WIB</td>
          </tr>
          <tr>
            <td class="label">Istirahat, Shalat, Makan</td>
            <td class="value">: 11.00 WIB – 13.00 WIB</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  

<?php elseif ($sub==='biaya'): ?>
  <section class="card">
    <p>
      PPID Kantor Kementerian Agama Kabupaten Jombang menyediakan informasi publik secara gratis
      (tidak dipungut biaya). Adapun untuk penggandaan atau perekaman, pemohon/pengguna informasi publik
      dapat melakukan penggandaan/fotokopi sendiri di sekitar gedung Kementerian Agama atau
      menyediakan CD/DVD kosong atau flashdisk untuk perekaman data dan informasinya.
    </p>
  </section>



<?php elseif ($sub==='standar-layanan'): ?>
<?php
  // === Lampiran PDF Standar Layanan ===
  // Pakai NAMA FILE yang ada di folder /public/assets/file
  $pdfName = 'Standar Pelayanan 2024.pdf'; // <-- ganti kalau beda
  $pdfFs   = __DIR__ . '/../../public/assets/file/' . $pdfName; // path di server
  $pdfUrl  = asset('file/' . rawurlencode($pdfName));          // URL untuk browser
?>

<div class="std-section">
  <h3>Lampiran Dokumen</h3>

  <?php if (file_exists($pdfFs) && is_file($pdfFs)): ?>
    <div class="meta-right" style="margin-bottom:8px; gap:8px;">
      <a class="btn btn-outline" target="_blank" rel="noopener" href="<?= $pdfUrl ?>">Buka di Tab Baru</a>
      <a class="btn btn-primary" download href="<?= $pdfUrl ?>">Unduh PDF</a>
    </div>

    <!-- Pratinjau PDF -->
    <iframe
      src="<?= $pdfUrl ?>#view=FitH"
      style="width:100%;height:720px;border:1px solid var(--line);border-radius:12px"
    ></iframe>
  <?php else: ?>
    <p class="muted">
      File <code><?= htmlspecialchars($pdfName) ?></code> belum ditemukan di folder
      <code>/public/assets/file</code>.
    </p>
  <?php endif; ?>
</div>

  </section>

<?php elseif ($sub==='kebijakan'): ?>
  <section class="card">
    <h3>Visi Layanan</h3>
    <p>"Menjadi penyedia layanan informasi publik yang terpercaya, transparan, dan berkualitas tinggi untuk mendukung good governance dan peningkatan kualitas pelayanan publik."</p>

    <h3>Misi Layanan</h3>
    <ul class="list">
      <li>Menyediakan akses informasi publik yang mudah dan cepat</li>
      <li>Meningkatkan kualitas dan kuantitas informasi yang disediakan</li>
      <li>Mengembangkan sistem layanan informasi yang modern dan efisien</li>
      <li>Membangun kepercayaan masyarakat terhadap layanan publik</li>
    </ul>

    <h3>Prinsip Layanan</h3>
    <div class="columns-2">
      <div>
        <h4>Transparansi</h4>
        <ul class="list">
          <li>Informasi terbuka dan dapat diakses</li>
          <li>Proses yang jelas dan terbuka</li>
          <li>Akuntabilitas dalam setiap layanan</li>
        </ul>
      </div>
      <div>
        <h4>Akuntabilitas</h4>
        <ul class="list">
          <li>Bertanggung jawab atas setiap layanan</li>
          <li>Evaluasi berkala terhadap kualitas layanan</li>
          <li>Peningkatan berkelanjutan</li>
        </ul>
      </div>
    </div>

    <h3>Target Pengembangan</h3>
    <ul class="list">
      <li><strong>Jangka Pendek:</strong> Peningkatan aksesibilitas layanan</li>
      <li><strong>Jangka Menengah:</strong> Digitalisasi layanan informasi</li>
      <li><strong>Jangka Panjang:</strong> Layanan informasi kelas dunia</li>
    </ul>
  </section>

<?php elseif ($sub==='maklumat'): ?>
  <section class="card">
    <ul class="list">
      <li>Melayani dengan Santun dan Ramah</li>
      <li>Memproses layanan secara cermat dan cepat</li>
      <li>Memberikan kemudahan pelayanan</li>
      <li>Berorientasi kepada kepuasan pengguna layanan</li>
      <li>Memproses layanan sesuai peraturan perundang-undangan dan prosedur yang berlaku</li>
      <li>Tidak meminta dan menerima imbalan dalam bentuk apapun</li>
      <li>Apabila tidak menepati maklumat pelayanan, siap menerima sanksi sesuai dengan peraturan perundang-undangan yang berlaku.</li>
    </ul>
  </section>
<?php endif; ?>

