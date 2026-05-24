<?php
function e(string $v): string { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
function redirect(string $url): void { header('Location: ' . $url); exit; }
function now(): string { return date('Y-m-d H:i:s'); }
