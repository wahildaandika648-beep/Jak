<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !verify_csrf($_POST['csrf'] ?? null) || !verify_math_captcha($_POST['captcha'] ?? null) || empty($_POST['agree'])) { set_flash('error','Data registrasi tidak valid.'); redirect('index.php?page=register'); }
$username=trim($_POST['username']??''); $email=trim($_POST['email']??''); $phone=trim($_POST['phone']??''); $pass=$_POST['password']??''; $confirm=$_POST['confirm_password']??'';
if (strlen($pass)<8 || $pass!==$confirm) { set_flash('error','Password tidak valid.'); redirect('index.php?page=register'); }
$st=$pdo->prepare('SELECT COUNT(*) c FROM users WHERE username=? OR email=? OR phone=?'); $st->execute([$username,$email,$phone]); if(($st->fetch()['c']??0)>0){ set_flash('error','Username/email/HP sudah dipakai.'); redirect('index.php?page=register'); }
$pdo->beginTransaction();
$st=$pdo->prepare('INSERT INTO users(username,email,phone,password_hash,role,status,created_at,updated_at) VALUES(?,?,?,?,"user","active",NOW(),NOW())');
$st->execute([$username,$email,$phone,password_hash($pass,PASSWORD_DEFAULT)]); $uid=(int)$pdo->lastInsertId();
$pdo->prepare('INSERT INTO balance_accounts(user_id,main_balance,bonus_balance,profit_balance,commission_balance,locked_balance,total_profit,created_at,updated_at) VALUES(?,0,15000,0,0,0,0,NOW(),NOW())')->execute([$uid]);
$pdo->commit(); set_flash('success','Registrasi berhasil, silakan login.'); redirect('index.php?page=login');
