<?php /* app/views/informasi.php */
$jenis = $_GET['jenis'] ?? null;
?>

<h1>Informasi Publik</h1>

<?php if ($jenis === null): ?>
  <!-- LANDING: pilih jenis informasi -->
  <div class="instansi-grid" style="margin-top:8px">
    <a class="instansi-card" href="?page=informasi&jenis=berkala">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📅</div>
      <div>
        <div class="title">Informasi Berkala</div>
        <div class="sub">Informasi yang diumumkan secara berkala setiap 6 bulan</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=informasi&jenis=serta_merta">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">🚨</div>
      <div>
        <div class="title">Informasi Serta Merta</div>
        <div class="sub">Informasi yang dapat membahayakan hajat hidup orang banyak</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=informasi&jenis=setiap_saat">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">🔍</div>
      <div>
        <div class="title">Informasi Setiap Saat</div>
        <div class="sub">Informasi yang dapat diakses setiap saat</div>
      </div>
    </a>
  </div>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=informasi&jenis=berkala" class="<?= $jenis==='berkala'?'active':'' ?>">Berkala</a>
  <a href="?page=informasi&jenis=serta_merta" class="<?= $jenis==='serta_merta'?'active':'' ?>">Serta Merta</a>
  <a href="?page=informasi&jenis=setiap_saat" class="<?= $jenis==='setiap_saat'?'active':'' ?>">Setiap Saat</a>
</nav>

<?php if ($jenis==='berkala'): ?>
  <section class="card">
    <h2>Informasi Berkala</h2>
    <p>Informasi yang diumumkan secara berkala setiap 6 bulan sekali sesuai dengan Undang-Undang Keterbukaan Informasi Publik.</p>
    
    <div class="doc-list">
      <div class="doc-card">
        <h3>Laporan Kinerja Tahunan 2024</h3>
        <p>Laporan kinerja Kantor Wilayah Kementerian Agama Provinsi Jawa Timur tahun 2024</p>
        <div class="meta">
          <span class="badge badge-year">2024</span>
          <span class="muted">Update: Januari 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Laporan Keuangan Semester II 2024</h3>
        <p>Laporan realisasi anggaran dan keuangan semester II tahun 2024</p>
        <div class="meta">
          <span class="badge badge-year">2024</span>
          <span class="muted">Update: Januari 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Laporan Penyelenggaraan Pemerintahan 2024</h3>
        <p>Laporan penyelenggaraan pemerintahan daerah tahun 2024</p>
        <div class="meta">
          <span class="badge badge-year">2024</span>
          <span class="muted">Update: Januari 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php elseif ($jenis==='serta_merta'): ?>
  <section class="card">
    <h2>Informasi Serta Merta</h2>
    <p>Informasi yang dapat membahayakan hajat hidup orang banyak dan kesejahteraan masyarakat yang harus diumumkan secara serta merta.</p>
    
    <div class="doc-list">
      <div class="doc-card">
        <h3>Peringatan Dini Bencana Alam</h3>
        <p>Informasi peringatan dini bencana alam yang dapat mempengaruhi aktivitas keagamaan</p>
        <div class="meta">
          <span class="badge badge-kind">Peringatan</span>
          <span class="muted">Update: 22 Juli 2025</span>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Pandemi dan Kesehatan</h3>
        <p>Informasi terkait pandemi dan protokol kesehatan untuk kegiatan keagamaan</p>
        <div class="meta">
          <span class="badge badge-kind">Kesehatan</span>
          <span class="muted">Update: 22 Juli 2025</span>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Keamanan dan Ketertiban</h3>
        <p>Informasi keamanan yang dapat mempengaruhi kegiatan keagamaan</p>
        <div class="meta">
          <span class="badge badge-kind">Keamanan</span>
          <span class="muted">Update: 22 Juli 2025</span>
        </div>
      </div>
    </div>
  </section>

<?php elseif ($jenis==='setiap_saat'): ?>
  <section class="card">
    <h2>Informasi Setiap Saat</h2>
    <p>Informasi yang dapat diakses setiap saat dan selalu tersedia untuk masyarakat.</p>
    
    <div class="doc-list">
      <div class="doc-card">
        <h3>Struktur Organisasi</h3>
        <p>Struktur organisasi Kantor Wilayah Kementerian Agama Provinsi Jawa Timur</p>
        <div class="meta">
          <span class="badge badge-kind">Organisasi</span>
          <span class="muted">Update: 22 Juli 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Profil Pejabat</h3>
        <p>Profil dan informasi pejabat di lingkungan Kemenag Provinsi Jawa Timur</p>
        <div class="meta">
          <span class="badge badge-kind">Pejabat</span>
          <span class="muted">Update: 22 Juli 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Regulasi dan Peraturan</h3>
        <p>Regulasi dan peraturan yang berlaku di lingkungan Kemenag</p>
        <div class="meta">
          <span class="badge badge-kind">Regulasi</span>
          <span class="muted">Update: 22 Juli 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
      
      <div class="doc-card">
        <h3>Lokasi dan Kontak</h3>
        <p>Informasi lokasi kantor dan kontak yang dapat dihubungi</p>
        <div class="meta">
          <span class="badge badge-kind">Kontak</span>
          <span class="muted">Update: 22 Juli 2025</span>
          <div class="meta-right">
            <a href="#" class="btn btn-outline">📥 Download</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
