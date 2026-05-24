<?php require_login(); $u=current_user($pdo); ?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="assets/css/style.css"><title>NOXARA Home</title></head><body>
<div class="app"><header><h1>NOXARA</h1><a href="index.php?page=logout">Logout</a></header>
<div class="card">Hi, <?=e($u['username'])?></div><nav class="bottom"><a>Home</a><a>Tim</a><a>Produk</a><a>Mining</a><a>Transaksi</a><a>Profil</a></nav></div>
</body></html>
