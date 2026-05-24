<?php $captcha = generate_math_captcha(); $flash = get_flash(); ?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="assets/css/style.css"><title>Login NOXARA</title></head><body>
<div class="app">
  <div class="brand"><div class="brand-badge"></div><h1>NOXARA</h1></div>
  <?php if($flash): ?><div class="flash"><?=e($flash['message'])?></div><?php endif; ?>
  <form method="post" action="index.php?page=do_login">
    <input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
    <label>Email / HP / Username<input name="identifier" required></label>
    <label>Password<input type="password" name="password" required></label>
    <label>Captcha: <?=e($captcha['q'])?><input name="captcha" required></label>
    <label><input type="checkbox" name="agree" value="1" required> Saya setuju S&K dan Privasi</label>
    <button>Login</button>
    <p class="helper">Belum punya akun? <a href="index.php?page=register">Daftar</a></p>
  </form>
</div></body></html>
