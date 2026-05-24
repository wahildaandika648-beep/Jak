<?php
function set_flash(string $type, string $message): void { $_SESSION['flash'] = compact('type', 'message'); }
function get_flash(): ?array {
    $f = $_SESSION['flash'] ?? null;
    unset($_SESSION['flash']);
    return $f;
}
