<?php $captcha = generate_math_captcha(); $flash = get_flash(); ?>
<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="assets/css/style.css"><title>Login NOXARA</title></head><body>
<div class="app"><h1>NOXARA</h1><?php if($flash): ?><div class="flash"><?=e($flash['message'])?></div><?php endif; ?>
<form method="post" action="index.php?page=do_login"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
<input name="identifier" placeholder="Email / HP / Username" required><input type="password" name="password" placeholder="Password" required>
<label><?=e($captcha['q'])?><input name="captcha" required></label><label><input type="checkbox" name="agree" value="1" required>Setuju syarat</label>
<button>Login</button></form><a href="index.php?page=register">Daftar</a></div></body></html>
