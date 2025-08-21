<?php /* app/views/layanan.php */
$sub = $_GET['sub'] ?? null;
?>

<?php if ($sub === null): ?>
  <!-- LANDING: samakan gaya dengan Standar Layanan -->
  <section class="section-box">
    <h2>Layanan Informasi</h2>

    <div class="instansi-grid" style="margin-top:16px">
      <a class="instansi-card" href="?page=layanan&sub=permohonan">
        <div>📝</div>
        <div>
          <div class="title">Permohonan Informasi</div>
          <div class="sub">Formulir pengajuan permohonan informasi publik</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=keberatan">
        <div>⚠️</div>
        <div>
          <div class="title">Pengajuan Keberatan</div>
          <div class="sub">Pengajuan keberatan atas penolakan informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=sengketa">
        <div>⚖️</div>
        <div>
          <div class="title">Penyelesaian Sengketa</div>
          <div class="sub">Mekanisme penyelesaian sengketa informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=sop">
        <div>📋</div>
        <div>
          <div class="title">SOP Layanan Informasi</div>
          <div class="sub">Standar Operasional Prosedur layanan</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=standar">
        <div>📢</div>
        <div>
          <div class="title">Standar Pengumuman Informasi</div>
          <div class="sub">Standar dan format pengumuman informasi</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=pengaduan">
        <div>📞</div>
        <div>
          <div class="title">Tata Cara Pengaduan Masyarakat</div>
          <div class="sub">Prosedur dan mekanisme pengaduan</div>
        </div>
      </a>

      <a class="instansi-card" href="?page=layanan&sub=alasan">
        <div>❓</div>
        <div>
          <div class="title">Alasan Pengajuan Keberatan</div>
          <div class="sub">Dasar dan alasan yang dapat diajukan keberatan</div>
        </div>
      </a>
    </div>
  </section>
  <?php return; ?>
<?php endif; ?>

<!-- SUB-BAB: tabs + konten -->
<nav class="tabs subnav" style="margin-top:8px">
  <a href="?page=layanan&sub=permohonan" class="<?= $sub==='permohonan'?'active':'' ?>">Permohonan Informasi</a>
  <a href="?page=layanan&sub=keberatan"  class="<?= $sub==='keberatan'?'active':'' ?>">Pengajuan Keberatan</a>
  <a href="?page=layanan&sub=sengketa"   class="<?= $sub==='sengketa'?'active':'' ?>">Penyelesaian Sengketa</a>
  <a href="?page=layanan&sub=sop"        class="<?= $sub==='sop'?'active':'' ?>">SOP Layanan</a>
  <a href="?page=layanan&sub=standar"    class="<?= $sub==='standar'?'active':'' ?>">Standar Pengumuman</a>
  <a href="?page=layanan&sub=pengaduan"  class="<?= $sub==='pengaduan'?'active':'' ?>">Pengaduan Masyarakat</a>
  <a href="?page=layanan&sub=alasan"     class="<?= $sub==='alasan'?'active':'' ?>">Alasan Keberatan</a>
</nav>

<?php if ($sub==='permohonan'): ?>
  <section class="card">
    <p>Silakan isi formulir di bawah ini untuk mengajukan permohonan informasi publik:</p>
    <form class="form" action="#" method="POST">
      <div class="row">
        <label>Nama Lengkap *<input type="text" name="nama" required></label>
        <label>Email *<input type="email" name="email" required></label>
      </div>
      <div class="row">
        <label>No. Telepon<input type="tel" name="telepon"></label>
        <label>Instansi/Organisasi<input type="text" name="instansi"></label>
      </div>
      <label>Alamat Lengkap<textarea name="alamat" rows="3"></textarea></label>
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
      <label>Tujuan Penggunaan Informasi<textarea name="tujuan" rows="3" placeholder="Untuk apa informasi tersebut akan digunakan?"></textarea></label>
      <div class="actions">
        <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
        <button type="reset" class="btn btn-outline">Reset Form</button>
      </div>
    </form>
  </section>

<?php elseif ($sub==='keberatan'): ?>
  <section class="card">
    <h3>Tata Cara Pengajuan Keberatan</h3>

    <div class="steps-grid">
      <!-- STEP 1 -->
      <div class="step-card">
        <span class="step-num">1</span>
        <h4 class="step-title">Ajukan Keberatan</h4>
        <p class="step-desc">
          Melalui website ..............................., surat, email, telepon, atau datang langsung ke PTSP
          Kemenag Jombang.
        </p>
      </div>

      <!-- STEP 2 -->
      <div class="step-card">
        <span class="step-num">2</span>
        <h4 class="step-title">Lengkapi Formulir & Dokumen</h4>
        <p class="step-desc">
          Isi formulir keberatan dan lampirkan salinan KTP, surat kuasa (jika diwakilkan), atau bukti badan hukum.
          Dapatkan tanda bukti dari petugas.
        </p>
        <!-- Opsional tombol unduh (ganti path jika filenya ada)
        <a class="btn btn-outline" href="<?= asset('file/Formulir_Keberatan.pdf') ?>" target="_blank" rel="noopener">
          Unduh Formulir
        </a>
        -->
      </div>

      <!-- STEP 3 -->
      <div class="step-card">
        <span class="step-num">3</span>
        <h4 class="step-title">Tanggapan & Lanjutan</h4>
        <p class="step-desc">
          Tanggapan diberikan paling lambat <strong>30 hari kerja</strong>. Jika tidak puas, ajukan sengketa ke
          <strong>Komisi Informasi Pusat</strong> maksimal <strong>14 hari kerja</strong> setelah menerima tanggapan.
        </p>
      </div>
    </div>
  </section>


<?php elseif ($sub==='sengketa'): ?>
  <section class="card">
    <h3>Tata Cara Penyelesaian Sengketa</h3>

    <div class="steps-grid">
      <!-- STEP 1 -->
      <div class="step-card">
        <span class="step-num">1</span>
        <h4 class="step-title">Pengajuan Sengketa</h4>
        <p class="step-desc">
          Pemohon dapat mengajukan penyelesaian sengketa informasi publik ke Komisi Informasi
          apabila tanggapan dari Atasan PPID tidak memuaskan.
        </p>
      </div>

      <!-- STEP 2 -->
      <div class="step-card">
        <span class="step-num">2</span>
        <h4 class="step-title">Batas Waktu Pengajuan</h4>
        <p class="step-desc">
          Pengajuan sengketa harus dilakukan paling lambat <strong>14 hari kerja</strong>
          setelah menerima tanggapan tertulis dari Atasan PPID.
        </p>
      </div>

      <!-- STEP 3 -->
      <div class="step-card">
        <span class="step-num">3</span>
        <h4 class="step-title">Proses oleh Komisi Informasi</h4>
        <p class="step-desc">
          Komisi Informasi wajib memulai proses penyelesaian melalui mediasi dan/atau ajudikasi nonlitigasi
          dalam waktu <strong>14 hari kerja</strong> sejak menerima permohonan sengketa.
        </p>
      </div>

      <!-- STEP 4 -->
      <div class="step-card">
        <span class="step-num">4</span>
        <h4 class="step-title">Batas Waktu Penyelesaian</h4>
        <p class="step-desc">
          Proses penyelesaian sengketa paling lambat diselesaikan dalam waktu <strong>100 hari kerja</strong>.
        </p>
      </div>
    </div>
  </section>



<?php elseif ($sub==='sop'): ?>
  <section class="card">
    <h3>Standar Operasional Prosedur (SOP)</h3>

    <div class="sop-grid">
      <?php
      // Taruh semua PDF di: /public/assets/file/
      $sops = [
        ['file' => '01. SOP Pengelolaan Permohonan Informasi.pdf',       'title' => '01 • Pengelolaan Permohonan Informasi', 'desc' => 'Alur permohonan, verifikasi, dan batas waktu.'],
        ['file' => '02. SOP Pengelolaan Keberatan.pdf',                   'title' => '02 • Pengelolaan Keberatan',            'desc' => 'Penerimaan & tindak lanjut keberatan.'],
        ['file' => '03. SOP Penanganan Sengketa Informasi.pdf',           'title' => '03 • Penanganan Sengketa Informasi',    'desc' => 'Mediasi/ajudikasi non-litigasi.'],
        ['file' => '04. SOP Penetapan dan Pemutakhiran DIP.pdf',          'title' => '04 • Penetapan & Pemutakhiran DIP',     'desc' => 'Daftar Informasi Publik (DIP).'],
        ['file' => '05. SOP Pendokumentasian Informasi Publik.pdf',       'title' => '05 • Pendokumentasian Informasi Publik','desc' => 'Pencatatan & penyimpanan.'],
        ['file' => '06. SOP Pengujian Konsekuensi.pdf',                   'title' => '06 • Pengujian Konsekuensi',            'desc' => 'Uji dampak keterbukaan informasi.'],
        ['file' => '07. SOP Pendokumentasian Informasi yang Dikecualikan.pdf', 'title' => '07 • Dok. Informasi Dikecualikan', 'desc' => 'Pengelolaan informasi dikecualikan.'],
      ];

      $baseFs  = __DIR__ . '/../../public/assets/file/'; // path di server
      foreach ($sops as $doc):
        $fs   = $baseFs . $doc['file'];
        $ok   = file_exists($fs);
        $href = asset('file/' . rawurlencode($doc['file'])); // url ke PDF
      ?>
        <div class="sop-card">
          <div class="sop-icon">PDF</div>
          <div class="sop-content">
            <div class="sop-title"><?= htmlspecialchars($doc['title']) ?></div>
            <div class="sop-desc"><?= htmlspecialchars($doc['desc']) ?></div>

            <div class="sop-actions">
              <?php if ($ok): ?>
                <a class="btn btn-primary" href="<?= $href ?>" target="_blank" rel="noopener">Buka</a>
                <a class="btn btn-outline" href="<?= $href ?>" download>Unduh</a>
              <?php else: ?>
                <span class="muted">File belum ditemukan di <code>/public/assets/file</code></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php elseif ($sub==='standar'): ?>
  <section class="card">
    <h3>Standar Pengumuman Informasi</h3>
    <p class="muted" style="margin-top:-2px">
      Berlaku untuk Kementerian Agama Pusat, PTKN, Kanwil Kemenag Provinsi, Kankemenag Kab/Kota,
      Balai Litbang Agama, Balai Diklat Keagamaan, dan KUA Kecamatan.
    </p>

    <div class="steps-grid">
      <!-- 1. Kriteria -->
      <div class="step-card">
        <span class="step-num">1</span>
        <h4 class="step-title">Kriteria Pengumuman Informasi</h4>
        <ul class="list">
          <li>Menggunakan bahasa Indonesia yang baik dan benar</li>
          <li>Mudah dipahami</li>
          <li>Mempertimbangkan bahasa penduduk setempat</li>
        </ul>
      </div>

      <!-- 2. Media Penyebarluasan -->
      <div class="step-card">
        <span class="step-num">2</span>
        <h4 class="step-title">Media Penyebarluasan Informasi</h4>
        <ul class="list">
          <li>Papan pengumuman</li>
          <li>Laman resmi (website) PPID dan/atau Badan Publik</li>
          <li>Media sosial PPID dan/atau Badan Publik</li>
          <li>Portal Satu Data Indonesia</li>
          <li>Aplikasi berbasis teknologi informasi</li>
        </ul>
      </div>

      <!-- 3. Aksesibilitas -->
      <div class="step-card">
        <span class="step-num">3</span>
        <h4 class="step-title">Aksesibilitas bagi Penyandang Disabilitas</h4>
        <p class="step-desc">
          Pengumuman dan penyebarluasan Informasi Publik wajib memperhatikan
          aksesibilitas bagi penyandang disabilitas.
        </p>
      </div>

      <!-- 4. Format -->
      <div class="step-card">
        <span class="step-num">4</span>
        <h4 class="step-title">Format Pengumuman</h4>
        <p class="step-desc">
          Pengumuman paling sedikit dilengkapi dengan <strong>audio</strong>,
          <strong>visual</strong>, dan/atau <strong>braille</strong>.
        </p>
      </div>
    </div>
  </section>


<?php elseif ($sub==='pengaduan'): ?>
  <section class="card">
    <h3>Tata Cara Pengaduan Masyarakat</h3>

    <!-- Alur singkat -->
    <div class="flow">
      <div class="flow-step"><span class="num">1</span><span>Siapkan identitas & bukti</span></div>
      <div class="sep"></div>
      <div class="flow-step"><span class="num">2</span><span>Pilih salah satu kanal</span></div>
      <div class="sep"></div>
      <div class="flow-step"><span class="num">3</span><span>Simpan nomor laporan</span></div>
    </div>

    <!-- OFFLINE -->
    <h4 class="group-title" style="margin:10px 0 6px">Offline</h4>
    <div class="channel-list">
      <div class="channel-card">
        <div class="channel-icon">🗣️</div>
        <div class="channel-body">
          <h5 class="channel-title">Lisan Langsung</h5>
          <p class="channel-desc">
            Datang langsung ke Kantor Kementerian Agama Kabupaten Jombang.<br>
            <strong>Alamat:</strong> Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">✉️</div>
        <div class="channel-body">
          <h5 class="channel-title">Melalui Surat (Offline)</h5>
          <p class="channel-desc">
            Ditujukan kepada:<br>
            <strong>Kepala Kantor Kementerian Agama Kabupaten Jombang</strong><br>
            Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>
    </div>

    <!-- ONLINE -->
    <h4 class="group-title" style="margin:16px 0 6px">Online</h4>
    <div class="channel-list">
      <div class="channel-card">
        <div class="channel-icon">☎️</div>
        <div class="channel-body">
          <h5 class="channel-title">Telepon</h5>
          <p class="channel-desc">Sampaikan pengaduan melalui nomor berikut.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-outline" href="tel:+62321861321">0321-861321</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📧</div>
        <div class="channel-body">
          <h5 class="channel-title">Email</h5>
          <p class="channel-desc">Kirimkan pengaduan lengkap ke alamat email ini.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-outline"
             href="mailto:kabjombang@kemenag.go.id?subject=Pengaduan%20Masyarakat%20-%20PPID%20Kemenag%20Jombang">
            kabjombang@kemenag.go.id
          </a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">🌐</div>
        <div class="channel-body">
          <h5 class="channel-title">Website</h5>
          <p class="channel-desc">Ajukan pengaduan melalui laman resmi Kemenag Jombang.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://jombang.kemenag.go.id/aduan_eksternal.php">Buka Layanan</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">💬</div>
        <div class="channel-body">
          <h5 class="channel-title">Kembang Jawa (WhatsApp)</h5>
          <p class="channel-desc">Salurkan pengaduan via WhatsApp resmi.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://wa.me/6285133225322">Buka WhatsApp</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📱</div>
        <div class="channel-body">
          <h5 class="channel-title">SP4N Lapor</h5>
          <p class="channel-desc">Gunakan aplikasi nasional untuk menyampaikan aspirasi/pelaporan.</p>
        </div>
        <div class="channel-actions">
          <a class="btn btn-primary" target="_blank" rel="noopener"
             href="https://www.lapor.go.id/">Buka SP4N Lapor</a>
        </div>
      </div>

      <div class="channel-card">
        <div class="channel-icon">📮</div>
        <div class="channel-body">
          <h5 class="channel-title">Melalui Surat (Online)</h5>
          <p class="channel-desc">
            Sama seperti offline, surat ditujukan kepada
            <strong>Kepala Kantor Kementerian Agama Kabupaten Jombang</strong>,
            Jl. Bupati R. Soedirman No. 26, Jombang.
          </p>
        </div>
      </div>
    </div>

    <div class="alert alert-info" style="margin-top:12px">
      <strong>Catatan:</strong> Sertakan <em>identitas & kontak</em>, <em>uraian singkat masalah</em>, dan
      <em>bukti pendukung</em> (jika ada) agar penanganan lebih cepat.
    </div>
  </section>

<?php elseif ($sub==='alasan'): ?>
  <section class="card">
    <h3>Alasan Pengajuan Keberatan</h3>
    <p class="muted">Keberatan dapat diajukan jika terjadi salah satu kondisi berikut:</p>

    <ul class="misi-list">
      <li>Penolakan atas permohonan Informasi Publik dengan alasan pengecualian/informasi rahasia.</li>
      <li>Tidak disediakannya informasi berkala.</li>
      <li>Tidak ditanggapinya permohonan Informasi Publik.</li>
      <li>Permohonan Informasi Publik ditanggapi tidak sebagaimana yang diminta.</li>
      <li>Tidak dipenuhinya permohonan Informasi Publik atau dipenuhi sebagian.</li>
      <li>Pengenaan biaya yang tidak wajar.</li>
      <li>Penyampaian Informasi Publik yang melebihi waktu yang diatur.</li>
</ul>
<?php endif; ?>

