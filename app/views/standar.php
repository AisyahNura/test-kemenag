<?php /* app/views/standar.php */
$sub = $_GET['sub'] ?? null;
?>

<h1>Standar Pelayanan</h1>

<?php if ($sub === null): ?>
  <!-- LANDING: pilih sub-bab -->
  <div class="instansi-grid" style="margin-top:8px">
    <a class="instansi-card" href="?page=standar&sub=jadwal">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">🕐</div>
      <div>
        <div class="title">Jadwal Pelayanan</div>
        <div class="sub">Jam operasional dan jadwal layanan informasi</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=standar&sub=biaya">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">💰</div>
      <div>
        <div class="title">Biaya/Tarif Layanan</div>
        <div class="sub">Biaya penggandaan dan tarif layanan informasi</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=standar&sub=standar-layanan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📊</div>
      <div>
        <div class="title">Standar Layanan</div>
        <div class="sub">Indikator dan standar kualitas layanan</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=standar&sub=kebijakan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">🎯</div>
      <div>
        <div class="title">Arah Kebijakan Layanan</div>
        <div class="sub">Kebijakan dan orientasi layanan informasi</div>
      </div>
    </a>
  </div>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=standar&sub=jadwal" class="<?= $sub==='jadwal'?'active':'' ?>">Jadwal Pelayanan</a>
  <a href="?page=standar&sub=biaya" class="<?= $sub==='biaya'?'active':'' ?>">Biaya/Tarif Layanan</a>
  <a href="?page=standar&sub=standar-layanan" class="<?= $sub==='standar-layanan'?'active':'' ?>">Standar Layanan</a>
  <a href="?page=standar&sub=kebijakan" class="<?= $sub==='kebijakan'?'active':'' ?>">Arah Kebijakan Layanan</a>
</nav>

<?php if ($sub==='jadwal'): ?>
  <section class="card">
    <h2>Jadwal Pelayanan</h2>
    
    <h3>Jam Operasional</h3>
    <div class="columns-2">
      <div>
        <h4>Senin - Kamis</h4>
        <ul class="list">
          <li>Pagi: 07:00 - 12:00 WIB</li>
          <li>Siang: 13:00 - 16:00 WIB</li>
        </ul>
      </div>
      <div>
        <h4>Jumat</h4>
        <ul class="list">
          <li>Pagi: 07:00 - 11:00 WIB</li>
          <li>Siang: 13:00 - 16:00 WIB</li>
        </ul>
      </div>
    </div>
    
    <h3>Jadwal Layanan Khusus</h3>
    <ul class="list">
      <li><strong>Layanan Online:</strong> 24 jam (formulir online)</li>
      <li><strong>Layanan Darurat:</strong> Sesuai kebutuhan (informasi serta merta)</li>
      <li><strong>Layanan Offline:</strong> Sesuai jam operasional</li>
    </ul>
    
    <h3>Hari Libur</h3>
    <ul class="list">
      <li>Sabtu, Minggu, dan Hari Libur Nasional</li>
      <li>Libur khusus kantor (akan diumumkan sebelumnya)</li>
    </ul>
  </section>

<?php elseif ($sub==='biaya'): ?>
  <section class="card">
    <h2>Biaya/Tarif Layanan</h2>
    
    <h3>Layanan Gratis</h3>
    <ul class="list">
      <li>Konsultasi informasi</li>
      <li>Pencarian informasi dasar</li>
      <li>Informasi yang tersedia online</li>
      <li>Kunjungan langsung ke kantor</li>
    </ul>
    
    <h3>Biaya Penggandaan</h3>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Jenis Dokumen</th>
            <th>Ukuran</th>
            <th>Biaya per Halaman</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dokumen A4</td>
            <td>Hitam Putih</td>
            <td>Rp 200</td>
          </tr>
          <tr>
            <td>Dokumen A4</td>
            <td>Berwarna</td>
            <td>Rp 500</td>
          </tr>
          <tr>
            <td>Foto/Dokumen A3</td>
            <td>Hitam Putih</td>
            <td>Rp 400</td>
          </tr>
          <tr>
            <td>Foto/Dokumen A3</td>
            <td>Berwarna</td>
            <td>Rp 1.000</td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <h3>Biaya Khusus</h3>
    <ul class="list">
      <li><strong>CD/DVD:</strong> Rp 5.000 per lembar</li>
      <li><strong>Flashdisk:</strong> Sesuai harga pasar</li>
      <li><strong>Pengiriman:</strong> Biaya kurir + Rp 2.000</li>
    </ul>
  </section>

<?php elseif ($sub==='standar-layanan'): ?>
  <section class="card">
    <h2>Standar Layanan</h2>
    
    <h3>Indikator Kualitas Layanan</h3>
    <div class="columns-2">
      <div>
        <h4>Ketepatan Waktu</h4>
        <ul class="list">
          <li>Informasi berkala: 100% tepat waktu</li>
          <li>Informasi serta merta: ≤ 2x24 jam</li>
          <li>Informasi setiap saat: ≤ 10 hari kerja</li>
        </ul>
      </div>
      <div>
        <h4>Akurasi Informasi</h4>
        <ul class="list">
          <li>100% informasi yang akurat</li>
          <li>Update berkala setiap bulan</li>
          <li>Verifikasi data sebelum publikasi</li>
        </ul>
      </div>
    </div>
    
    <h3>Standar Pelayanan</h3>
    <ul class="list">
      <li><strong>Ramah:</strong> Petugas harus sopan dan membantu</li>
      <li><strong>Cepat:</strong> Respon maksimal 1x24 jam</li>
      <li><strong>Tepat:</strong> Informasi sesuai permintaan</li>
      <li><strong>Lengkap:</strong> Data yang diminta tersedia</li>
    </ul>
    
    <h3>Komitmen Layanan</h3>
    <ul class="list">
      <li>Memberikan pelayanan terbaik kepada masyarakat</li>
      <li>Mengutamakan kepentingan publik</li>
      <li>Transparan dalam setiap proses</li>
      <li>Bertanggung jawab atas setiap layanan</li>
    </ul>
  </section>

<?php elseif ($sub==='kebijakan'): ?>
  <section class="card">
    <h2>Arah Kebijakan Layanan</h2>
    
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

<?php endif; ?>


