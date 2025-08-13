<?php /* app/views/layanan.php */
$sub = $_GET['sub'] ?? null;
?>

<!-- LAYANAN INFORMASI -->
<section class="card" style="margin-bottom: 24px;">
  <h2>Layanan Informasi</h2>
  <?php if ($sub === null): ?>
    <!-- LANDING: pilih sub-bab -->
    <div class="instansi-grid" style="margin-top: 16px;">
    <a class="instansi-card" href="?page=layanan&sub=permohonan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📝</div>
      <div>
        <div class="title">Permohonan Informasi</div>
        <div class="sub">Formulir pengajuan permohonan informasi publik</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=keberatan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">⚠️</div>
      <div>
        <div class="title">Pengajuan Keberatan</div>
        <div class="sub">Pengajuan keberatan atas penolakan informasi</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=sengketa">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">⚖️</div>
      <div>
        <div class="title">Penyelesaian Sengketa</div>
        <div class="sub">Mekanisme penyelesaian sengketa informasi</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=sop">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📋</div>
      <div>
        <div class="title">SOP Layanan Informasi</div>
        <div class="sub">Standar Operasional Prosedur layanan</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=standar">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📢</div>
      <div>
        <div class="title">Standar Pengumuman Informasi</div>
        <div class="sub">Standar dan format pengumuman informasi</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=pengaduan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📞</div>
      <div>
        <div class="title">Tata Cara Pengaduan Masyarakat</div>
        <div class="sub">Prosedur dan mekanisme pengaduan</div>
      </div>
    </a>
    <a class="instansi-card" href="?page=layanan&sub=alasan">
      <div style="width: 42px; height: 42px; background: var(--teal); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">❓</div>
      <div>
        <div class="title">Alasan Pengajuan Keberatan</div>
        <div class="sub">Dasar dan alasan yang dapat diajukan keberatan</div>
      </div>
    </a>
  </div>
  <?php return; ?>
<?php endif; ?>

  </section>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=layanan&sub=permohonan" class="<?= $sub==='permohonan'?'active':'' ?>">Permohonan Informasi</a>
  <a href="?page=layanan&sub=keberatan" class="<?= $sub==='keberatan'?'active':'' ?>">Pengajuan Keberatan</a>
  <a href="?page=layanan&sub=sengketa" class="<?= $sub==='sengketa'?'active':'' ?>">Penyelesaian Sengketa</a>
  <a href="?page=layanan&sub=sop" class="<?= $sub==='sop'?'active':'' ?>">SOP Layanan</a>
  <a href="?page=layanan&sub=standar" class="<?= $sub==='standar'?'active':'' ?>">Standar Pengumuman</a>
  <a href="?page=layanan&sub=pengaduan" class="<?= $sub==='pengaduan'?'active':'' ?>">Pengaduan Masyarakat</a>
  <a href="?page=layanan&sub=alasan" class="<?= $sub==='alasan'?'active':'' ?>">Alasan Keberatan</a>
</nav>

<?php if ($sub==='permohonan'): ?>
  <section class="card">
    <h2>Formulir Permohonan Informasi</h2>
    <p>Silakan isi formulir di bawah ini untuk mengajukan permohonan informasi publik:</p>
    
    <form class="form" action="#" method="POST">
      <div class="row">
        <label>
          Nama Lengkap *
          <input type="text" name="nama" required>
        </label>
        <label>
          Email *
          <input type="email" name="email" required>
        </label>
      </div>
      
      <div class="row">
        <label>
          No. Telepon
          <input type="tel" name="telepon">
        </label>
        <label>
          Instansi/Organisasi
          <input type="text" name="instansi">
        </label>
      </div>
      
      <label>
        Alamat Lengkap
        <textarea name="alamat" rows="3"></textarea>
      </label>
      
      <label>
        Jenis Informasi yang Diminta *
        <select name="jenis_info" required>
          <option value="">Pilih jenis informasi</option>
          <option value="berkala">Informasi Berkala</option>
          <option value="serta_merta">Informasi Serta Merta</option>
          <option value="setiap_saat">Informasi Setiap Saat</option>
        </select>
      </label>
      
      <label>
        Rincian Informasi yang Diminta *
        <textarea name="rincian" rows="5" required placeholder="Jelaskan secara detail informasi yang Anda butuhkan..."></textarea>
        <div class="help">Berikan penjelasan yang jelas dan spesifik agar kami dapat membantu dengan tepat</div>
      </label>
      
      <label>
        Tujuan Penggunaan Informasi
        <textarea name="tujuan" rows="3" placeholder="Untuk apa informasi tersebut akan digunakan?"></textarea>
      </label>
      
      <div class="actions">
        <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
        <button type="reset" class="btn btn-outline">Reset Form</button>
      </div>
    </form>
  </section>

<?php elseif ($sub==='keberatan'): ?>
  <section class="card">
    <h2>Formulir Pengajuan Keberatan</h2>
    <p>Jika permohonan informasi Anda ditolak atau tidak ditanggapi, Anda dapat mengajukan keberatan melalui formulir ini:</p>
    
    <form class="form" action="#" method="POST">
      <div class="row">
        <label>
          Nomor Permohonan Sebelumnya *
          <input type="text" name="nomor_permohonan" required>
        </label>
        <label>
          Tanggal Penolakan *
          <input type="date" name="tanggal_penolakan" required>
        </label>
      </div>
      
      <label>
        Alasan Penolakan yang Diterima
        <textarea name="alasan_penolakan" rows="3" required></textarea>
      </label>
      
      <label>
        Alasan Keberatan *
        <textarea name="alasan_keberatan" rows="5" required placeholder="Jelaskan mengapa Anda keberatan dengan penolakan tersebut..."></textarea>
      </label>
      
      <div class="actions">
        <button type="submit" class="btn btn-primary">Ajukan Keberatan</button>
        <button type="reset" class="btn btn-outline">Reset Form</button>
      </div>
    </form>
  </section>

<?php elseif ($sub==='sengketa'): ?>
  <section class="columns-2">
    <div class="card">
      <h2>Mekanisme Penyelesaian Sengketa</h2>
      <ol class="list">
        <li>Pengajuan keberatan ke PPID</li>
        <li>Penelaahan dan respons PPID</li>
        <li>Jika tidak puas, ajukan ke Komisi Informasi</li>
        <li>Mediasi oleh Komisi Informasi</li>
        <li>Keputusan final Komisi Informasi</li>
      </ol>
    </div>
    
    <div class="card">
      <h2>Komisi Informasi</h2>
      <p><strong>Alamat:</strong><br>
      Komisi Informasi Provinsi Jawa Timur<br>
      Jl. Veteran No. 45, Surabaya<br>
      <strong>Telepon:</strong> (031) 9876543</p>
    </div>
  </section>

<?php elseif ($sub==='sop'): ?>
  <section class="card">
    <h2>Standar Operasional Prosedur Layanan Informasi</h2>
    
    <h3>1. Penerimaan Permohonan</h3>
    <ul class="list">
      <li>Permohonan diterima melalui formulir online atau offline</li>
      <li>Diverifikasi kelengkapan data dalam 1x24 jam</li>
      <li>Jika tidak lengkap, permohonan dikembalikan untuk dilengkapi</li>
    </ul>
    
    <h3>2. Proses Pencarian Informasi</h3>
    <ul class="list">
      <li>PPID mencari informasi yang diminta</li>
      <li>Waktu maksimal 10 hari kerja</li>
      <li>Jika diperlukan perpanjangan, pemberitahuan maksimal 7 hari</li>
    </ul>
    
    <h3>3. Penyediaan Informasi</h3>
    <ul class="list">
      <li>Informasi disediakan sesuai format yang diminta</li>
      <li>Biaya penggandaan sesuai tarif yang berlaku</li>
      <li>Informasi dapat diakses langsung atau dikirim</li>
    </ul>
  </section>

<?php elseif ($sub==='standar'): ?>
  <section class="card">
    <h2>Standar Pengumuman Informasi</h2>
    
    <h3>Format Pengumuman</h3>
    <ul class="list">
      <li>Judul pengumuman yang jelas dan informatif</li>
      <li>Tanggal dan waktu pengumuman</li>
      <li>Isi pengumuman yang lengkap dan mudah dipahami</li>
      <li>Kontak untuk informasi lebih lanjut</li>
    </ul>
    
    <h3>Media Pengumuman</h3>
    <ul class="list">
      <li>Website resmi PPID</li>
      <li>Papan pengumuman di kantor</li>
      <li>Media sosial resmi</li>
      <li>Surat kabar lokal (untuk informasi penting)</li>
    </ul>
    
    <h3>Jadwal Pengumuman</h3>
    <ul class="list">
      <li>Informasi berkala: setiap bulan</li>
      <li>Informasi serta merta: maksimal 2x24 jam</li>
      <li>Informasi setiap saat: sesuai permintaan</li>
    </ul>
  </section>

<?php elseif ($sub==='pengaduan'): ?>
  <section class="card">
    <h2>Tata Cara Pengaduan Masyarakat</h2>
    
    <h3>Mekanisme Pengaduan</h3>
    <ol class="list">
      <li>Pengaduan dapat disampaikan secara lisan atau tertulis</li>
      <li>Pengaduan lisan dicatat dan ditandatangani oleh pengadu</li>
      <li>Pengaduan tertulis disampaikan dengan identitas lengkap</li>
      <li>Pengaduan anonim tidak akan diproses</li>
    </ol>
    
    <h3>Informasi yang Harus Disertakan</h3>
    <ul class="list">
      <li>Nama dan alamat lengkap pengadu</li>
      <li>Nomor telepon atau email yang dapat dihubungi</li>
      <li>Uraian singkat masalah yang diadukan</li>
      <li>Bukti pendukung (jika ada)</li>
    </ul>
    
    <h3>Proses Penanganan</h3>
    <ul class="list">
      <li>Pengaduan diterima dan dicatat</li>
      <li>Verifikasi kelengkapan informasi</li>
      <li>Penanganan sesuai prosedur yang berlaku</li>
      <li>Pemberian jawaban maksimal 30 hari kerja</li>
    </ul>
  </section>

<?php elseif ($sub==='alasan'): ?>
  <section class="card">
    <h2>Alasan Pengajuan Keberatan</h2>
    
    <h3>Dasar Pengajuan Keberatan</h3>
    <p>Keberatan dapat diajukan berdasarkan alasan-alasan berikut:</p>
    
    <h3>1. Penolakan Permohonan Informasi</h3>
    <ul class="list">
      <li>Informasi tidak ditemukan</li>
      <li>Informasi dikecualikan berdasarkan UU KIP</li>
      <li>Permohonan tidak lengkap</li>
      <li>Biaya yang tidak wajar</li>
    </ul>
    
    <h3>2. Keterlambatan Penyediaan Informasi</h3>
    <ul class="list">
      <li>Melebihi batas waktu yang ditentukan</li>
      <li>Tidak ada pemberitahuan perpanjangan</li>
      <li>Penundaan tanpa alasan yang jelas</li>
    </ul>
    
    <h3>3. Kualitas Informasi</h3>
    <ul class="list">
      <li>Informasi tidak lengkap</li>
      <li>Format tidak sesuai permintaan</li>
      <li>Informasi tidak akurat</li>
    </ul>
    
    <h3>4. Pelayanan yang Tidak Memuaskan</h3>
    <ul class="list">
      <li>Petugas tidak ramah</li>
      <li>Fasilitas tidak memadai</li>
      <li>Prosedur yang berbelit</li>
    </ul>
    
    <div class="alert alert-info">
      <strong>Catatan:</strong> Keberatan harus diajukan dalam waktu maksimal 30 hari kerja sejak penolakan atau keterlambatan.
    </div>
  </section>



<?php endif; ?>
