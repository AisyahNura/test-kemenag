<?php
// app/views/regulasi.php

// Path ke folder tempat PDF disimpan di public/
// File PDF berada di public/assets/file/
$BASE_URL = '/assets/file/';

$peraturan = [
  [
    'title' => 'Undang-Undang (UU) Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik',
    'file'  => 'PERATURAN 1.pdf',
  ],
  [
    'title' => 'Peraturan Pemerintah (PP) No 61 Tahun 2010 tentang Pelaksanaan Undang-undang Keterbukaan Informasi Publik',
    'file'  => 'PERATURAN 2.pdf',
  ],
  [
    'title' => 'Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik (SLIP)',
    'file'  => 'PERATURAN 3.pdf',
  ],
  [
    'title' => 'Peraturan Komisi Informasi (PERKI) Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik',
    'file'  => 'PERATURAN 4.pdf',
  ],
  [
    'title' => 'Peraturan Mahkamah Agung RI (Perma) Nomor 2 Tahun 2011 tentang Tata Cara Penyelesaian Sengketa Informasi Publik di Pengadilan',
    'file'  => 'PERATURAN 5.pdf',
  ],
  [
    'title' => 'Keputusan Menteri Agama (KMA) Nomor 92 Tahun 2019 tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama',
    'file'  => 'PERATURAN 6.pdf',
  ],
  [
    'title' => 'Keputusan Menteri Agama Nomor 657 Tahun 2021 tentang PPID Kementerian Agama dan Atasan PPID Kementerian Agama',
    'file'  => 'PERATURAN 7.pdf',
  ],
];

$rancangan = [
  [
    'title' => 'Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi',
    'file'  => 'RANCANGAN PERATURAN 1.pdf',
  ],
  [
    'title' => 'Rancangan Keputusan Menteri Agama Republik Indonesia tentang Pedoman Layanan Informasi Publik Bagi Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama dan Atasan Pejabat Pengelola Informasi dan Dokumentasi Kementerian Agama',
    'file'  => 'RANCANGAN PERATURAN 2.pdf',
  ],
];


// Komponen kecil untuk render list
function render_reg_list($heading, $sub, $items, $BASE_URL) { ?>
  <section class="card" style="padding:0">
    <div style="padding:16px 16px 0 16px">
      <h2 style="margin:0 0 6px 0"><?= htmlspecialchars($heading) ?></h2>
      <p style="margin:0 0 12px 0"><?= htmlspecialchars($sub) ?></p>
    </div>
    <div class="list" style="border-top:1px solid var(--border);">
      <?php foreach ($items as $it): ?>
        <a class="list-row" href="<?= $BASE_URL . rawurlencode($it['file']) ?>" target="_blank" rel="noopener"
           style="display:flex;align-items:center;gap:12px;padding:14px 16px;border-bottom:1px solid var(--border);text-decoration:none;color:inherit">
          <div style="flex:1;line-height:1.4">
            <?= htmlspecialchars($it['title']) ?>
          </div>
          <!-- ikon mata -->
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)"
               stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8Z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
<?php } ?>

<section class="welcome">
  <h1>Regulasi</h1>
  <p>Halaman ini berisi daftar regulasi dan peraturan yang berlaku di lingkungan Kementerian Agama Kabupaten Jombang.</p>

  <?php
    render_reg_list(
      'Peraturan',
      'Daftar peraturan terkait Keterbukaan Informasi Publik:',
      $peraturan,
      $BASE_URL
    );

    render_reg_list(
      'Rancangan Peraturan',
      'Daftar rancangan peraturan terkait Keterbukaan Informasi Publik:',
      $rancangan,
      $BASE_URL
    );
  ?>
</section>