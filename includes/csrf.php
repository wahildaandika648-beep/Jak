<?php
function csrf_token(): string {
    if (empty($_SESSION['_csrf'])) {
        $_SESSION['_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['_csrf'];
}
function verify_csrf(?string $token): bool {
    return isset($_SESSION['_csrf']) && is_string($token) && hash_equals($_SESSION['_csrf'], $token);
}
