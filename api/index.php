<?php
$root = dirname(__DIR__);
chdir($root);

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$requestPath = trim(rawurldecode((string) $requestPath), '/');

$allowedNestedFiles = [
    'utils/captcha.php',
];

if ($requestPath === '') {
    $target = 'index.php';
} elseif (in_array($requestPath, $allowedNestedFiles, true)) {
    $target = $requestPath;
} elseif (strpos($requestPath, '/') === false) {
    $target = $requestPath;
    if (pathinfo($target, PATHINFO_EXTENSION) === '') {
        $target .= '.php';
    }
} else {
    $target = '';
}

$targetPath = $target !== '' ? realpath($root . DIRECTORY_SEPARATOR . $target) : false;
$rootPath = realpath($root);

$isValidTarget = $targetPath
    && $rootPath
    && str_starts_with($targetPath, $rootPath . DIRECTORY_SEPARATOR)
    && is_file($targetPath)
    && strtolower(pathinfo($targetPath, PATHINFO_EXTENSION)) === 'php';

if (!$isValidTarget) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Not Found';
    exit;
}

$_SERVER['SCRIPT_NAME'] = '/' . str_replace(DIRECTORY_SEPARATOR, '/', $target);
$_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'];

require $targetPath;
