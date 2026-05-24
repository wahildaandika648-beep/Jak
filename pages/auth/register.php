<?php $captcha = generate_math_captcha(); ?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="assets/css/style.css"><title>Register NOXARA</title></head><body>
<div class="app"><h1>NOXARA Daftar</h1><form method="post" action="index.php?page=do_register"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
<input name="username" placeholder="Username" required><input name="email" type="email" placeholder="Email" required><input name="phone" placeholder="Nomor HP" required>
<input type="password" name="password" placeholder="Password" required><input type="password" name="confirm_password" placeholder="Konfirmasi" required><input name="ref_code" placeholder="Referral">
<label><?=e($captcha['q'])?><input name="captcha" required></label><label><input type="checkbox" name="agree" value="1" required>Setuju</label><button>Registrasi</button></form></div></body></html>
