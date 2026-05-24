# NOXARA - PHP Native 8.2 + MySQL + Nginx

Deploy root: `/www/wwwroot/noxara.page` (tanpa `/public`).

## Struktur
Sesuai permintaan: `index.php`, `config`, `includes`, `pages`, `actions`, `database`, `cron`, `nginx`, `assets`, `uploads`, `storage`.

## Import DB
1. Buat database `noxara_Jaka22`
2. Import `database/schema.sql`
3. Import `database/seed.sql`

## Cron aaPanel
- `php /www/wwwroot/noxara.page/cron/mining-cron.php`
- `php /www/wwwroot/noxara.page/cron/product-expire-cron.php`
- `php /www/wwwroot/noxara.page/cron/cashify-payment-cron.php`
- `php /www/wwwroot/noxara.page/cron/vip-sync-cron.php`
- `php /www/wwwroot/noxara.page/cron/backup-cron.php`

## Nginx
Gunakan `nginx/noxara.conf` lalu aktifkan SSL Let's Encrypt di aaPanel.

## Login Demo
- User: `demo` / Password: `password123`
- Admin: `admin` / Password: `password123`

## Catatan
Project ini native PHP tanpa React/Vite/Node/APK.
