<?php
function is_logged_in(): bool { return !empty($_SESSION['user_id']); }
function require_login(): void { if (!is_logged_in()) { redirect('index.php?page=login'); } }
function current_user(PDO $pdo): ?array {
    if (!is_logged_in()) return null;
    $st = $pdo->prepare('SELECT * FROM users WHERE id = ? LIMIT 1');
    $st->execute([$_SESSION['user_id']]);
    return $st->fetch() ?: null;
}
