<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !verify_csrf($_POST['csrf'] ?? null) || !verify_math_captcha($_POST['captcha'] ?? null) || empty($_POST['agree'])) { set_flash('error','Data login tidak valid.'); redirect('index.php?page=login'); }
$id = trim($_POST['identifier'] ?? ''); $password = $_POST['password'] ?? '';
$st = $pdo->prepare('SELECT * FROM users WHERE username = ? OR email = ? OR phone = ? LIMIT 1'); $st->execute([$id,$id,$id]); $u = $st->fetch();
if (!$u || !password_verify($password, $u['password_hash'])) { set_flash('error','Kredensial salah.'); redirect('index.php?page=login'); }
session_regenerate_id(true); $_SESSION['user_id'] = $u['id']; redirect('index.php?page=home');
