<?php
require __DIR__ . '/../includes/db.php';
file_put_contents(__DIR__ . '/../storage/logs/cron.log', date('c')." run mining-cron.php\n", FILE_APPEND);
echo "OK mining-cron.php\n";
