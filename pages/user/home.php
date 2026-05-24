<?php require_login(); $u=current_user($pdo); ?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="assets/css/style.css"><title>NOXARA Home</title></head><body>
<div class="app">
  <div class="brand"><div class="brand-badge"></div><h1>NOXARA</h1></div>
  <div class="card"><strong>Hi, <?=e($u['username'])?></strong><div class="helper">Selamat datang di Teal Ocean Premium</div></div>
  <div class="grid">
    <div class="stat"><h3>Saldo Utama</h3><p>Rp 0</p></div>
    <div class="stat"><h3>Saldo Bonus</h3><p>Rp 15.000</p></div>
  </div>
  <div class="marquee"><span>Promo hari ini: bonus member baru, cashback transaksi, dan update event NOXARA.</span></div>
  <div class="menu-grid">
    <div class="menu-item">VIP</div><div class="menu-item">Voucher</div><div class="menu-item">Game</div><div class="menu-item">Daily</div>
    <div class="menu-item">Admin</div><div class="menu-item">Info</div><div class="menu-item">Download</div><div class="menu-item">Promo</div>
  </div>
  <div class="card" style="margin-top:10px">Aktivitas terbaru belum tersedia.</div>
  <nav class="bottom"><a class="active">Home</a><a>Tim</a><a>Produk</a><a>Mining</a><a>Transaksi</a><a>Profil</a></nav>
</div>
</body></html>
