<?php
require __DIR__ . '/../includes/db.php';
file_put_contents(__DIR__ . '/../storage/logs/cron.log', date('c')." run backup-cron.php\n", FILE_APPEND);
echo "OK backup-cron.php\n";
