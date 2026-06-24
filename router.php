<?php
// Simple router specifically for PHP Built-in Web Server (php -S)

// Get the requested URI path
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Map /home to /index.php
if ($uri === '/home' || $uri === '/home/') {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    require __DIR__ . '/index.php';
    return true;
}

// Serve existing files directly (like .css, .js, .jpg)
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // Tells the built-in web server to serve the file
}

// Automatically append .php to extensionless requests
$phpFile = __DIR__ . $uri . '.php';
if ($uri !== '/' && file_exists($phpFile)) {
    $_SERVER['SCRIPT_NAME'] = $uri . '.php';
    require $phpFile;
    return true;
}

// Serve index.php for root path
if ($uri === '/') {
    require __DIR__ . '/index.php';
    return true;
}

// Return 404 for anything else
return false;
?>
