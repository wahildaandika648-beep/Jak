<?php
require __DIR__ . '/../includes/db.php';
file_put_contents(__DIR__ . '/../storage/logs/cron.log', date('c')." run cashify-payment-cron.php\n", FILE_APPEND);
echo "OK cashify-payment-cron.php\n";
