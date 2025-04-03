<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => __DIR__ . '/../cache'
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

// Get the current route
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

// Set default font classes
$fontClasses = 'font-dm-sans';

// Handle routing
switch ($path) {
    case '':
        echo $twig->render('pages/index.twig', [
            'title' => 'Photosnap',
            'font_classes' => $fontClasses,
            'maxStories' => 4  // You can adjust this number as needed
        ]);
        break;

    case 'stories':
        echo $twig->render('pages/stories.twig', [
            'title' => 'Stories - Photosnap',
            'font_classes' => $fontClasses
        ]);
        break;

    case 'features':
        echo $twig->render('pages/features.twig', [
            'title' => 'Features - Photosnap',
            'font_classes' => $fontClasses
        ]);
        break;

    case 'pricing':
        echo $twig->render('pages/pricing.twig', [
            'title' => 'Pricing - Photosnap',
            'font_classes' => $fontClasses
        ]);
        break;

    default:
        // 404 page
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('pages/404.twig', [
            'title' => '404 - Page Not Found - Photosnap',
            'font_classes' => $fontClasses
        ]);
        break;
}