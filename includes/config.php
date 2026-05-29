<?php
/**
 * ============================================================
 *  دانش‌یار - فایل پیکربندی اصلی
 * ============================================================
 */

// -------- تنظیمات دیتابیس --------
define('DB_HOST', 'localhost');
define('DB_NAME', 'daneshyar');
define('DB_USER', 'root');
define('DB_PASS', '');           // در XAMPP پیش‌فرض خالی است
define('DB_CHARSET', 'utf8mb4');

// -------- تنظیمات کلی سایت --------
define('SITE_NAME', 'دانش‌یار');
define('SITE_SLOGAN', 'هم‌کلاسی هوشمند تو، همیشه کنارت');

// آدرس پایه به‌صورت خودکار محاسبه می‌شود
if (!defined('BASE_URL')) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $script = preg_replace('#/(admin|user|api)$#', '', $script);
    if ($script === '/' || $script === '.') $script = '';
    define('BASE_URL', $scheme . '://' . $host . $script);
}

// -------- مسیر فیزیکی فایل‌ها --------
define('ROOT_PATH',    realpath(__DIR__ . '/..'));
define('BOOKS_PATH',   ROOT_PATH . '/books');
define('UPLOADS_PATH', ROOT_PATH . '/uploads');
define('RECEIPTS_PATH', ROOT_PATH . '/uploads/receipts');

// -------- AI / GapGPT --------
define('AI_API_URL',  'https://api.gapgpt.app/v1/chat/completions');
define('AI_MODEL',    'gemini-3-flash-preview');
define('AI_API_KEY',  'sk-kc61Y9n64u02EslIQ7swPTnrXpLMaHFNub3UbksE702rLP2X');

// -------- ادمین --------
define('ADMIN_USER', 'webmania');
define('ADMIN_PASS', 'zamn1222');

// -------- محدودیت‌ها --------
define('FREE_DAILY_LIMIT', 3);
define('MAX_UPLOAD_MB',    10);

// -------- اطلاعات کارت بانکی برای پرداخت کارت به کارت --------
define('CARD_NUMBER',    '6037 9982 5668 6014');
define('CARD_HOLDER',    'امید عباسپور');
define('CARD_BANK',      'بانک ملی');

// -------- اطلاعات تماس --------
define('CONTACT_PHONE',   '09921627009');
define('CONTACT_TELEGRAM', 'webmania_admin');

// -------- منطقه زمانی --------
date_default_timezone_set('Asia/Tehran');

// -------- Session طولانی‌مدت --------
define('SESSION_LIFETIME', 30 * 24 * 3600); // 30 روز

// -------- نمایش خطا (فقط در حالت توسعه) --------
define('DEV_MODE', true);
if (DEV_MODE) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
