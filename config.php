<?php
/**
 * Database Configuration
 * WARNING: Add this file to .gitignore — never commit real credentials to GitHub!
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'mywebsite_db');
define('DB_USER', 'root');
define('DB_PASS', 'your_password_here');
define('DB_CHARSET', 'utf8mb4');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // Never show DB errors to users in production
    error_log('Database connection failed: ' . $e->getMessage());
    die('A database error occurred. Please try again later.');
}
