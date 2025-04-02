<?php
require_once __DIR__ . '/vendor/autoload.php';

// Configuration
$buildDir = __DIR__ . '/build';
$templatesDir = __DIR__ . '/src/templates';

// Create build directory if it doesn't exist
if (!file_exists($buildDir)) {
    mkdir($buildDir, 0777, true);
}

// Copy static assets
function copyDir($src, $dst) {
    $dir = opendir($src);
    if (!file_exists($dst)) {
        mkdir($dst, 0777, true);
    }
    while (($file = readdir($dir)) !== false) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Copy public assets to build directory
copyDir(__DIR__ . '/public', $buildDir);

// Set up Twig
$loader = new \Twig\Loader\FilesystemLoader($templatesDir);
$twig = new \Twig\Environment($loader);

// Compile templates
$pages = [
    'pages/index.twig' => 'index.html',
    // Add more pages here as needed
];

foreach ($pages as $template => $outputFile) {
    try {
        $html = $twig->render($template);
        file_put_contents($buildDir . '/' . $outputFile, $html);
        echo "Generated $outputFile\n";
    } catch (Exception $e) {
        echo "Error generating $outputFile: " . $e->getMessage() . "\n";
    }
}