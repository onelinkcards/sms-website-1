<?php
/**
 * Vercel serverless entry — routes / and root-level *.php scripts.
 * Static files (e.g. /assets/...) are served by Vercel before these routes.
 *
 * @see https://github.com/vercel-community/php
 */
declare(strict_types=1);

$root = dirname(__DIR__);
chdir($root);

// Not valid as standalone web targets (includes / partials live elsewhere)
$deny = [
    'config.php',
    'base.php',
];

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}
$path = '/' . ltrim($path, '/');

$script = null;

if ($path === '/' || $path === '/index.php') {
    $script = $root . '/index.php';
} elseif (preg_match('#^/([a-zA-Z0-9][a-zA-Z0-9._-]*\.php)$#', $path, $m)) {
    $base = $m[1];
    if (!in_array($base, $deny, true)) {
        $candidate = $root . '/' . $base;
        if (is_file($candidate)) {
            $script = $candidate;
        }
    }
}

if ($script === null) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Not Found';
    exit;
}

require $script;
