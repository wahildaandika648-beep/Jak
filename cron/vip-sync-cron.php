<?php
require __DIR__ . '/../includes/db.php';
file_put_contents(__DIR__ . '/../storage/logs/cron.log', date('c')." run vip-sync-cron.php\n", FILE_APPEND);
echo "OK vip-sync-cron.php\n";
