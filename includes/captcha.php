<?php
function generate_math_captcha(): array {
    $a = random_int(1, 9); $b = random_int(1, 9);
    $_SESSION['captcha'] = $a + $b;
    return ['q' => "$a + $b = ?"];
}
function verify_math_captcha($ans): bool { return isset($_SESSION['captcha']) && ((int)$ans === (int)$_SESSION['captcha']); }
