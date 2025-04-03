<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    'cache' => __DIR__ . '/../cache'
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

// Add global function to load JSON data
$twig->addFunction(new \Twig\TwigFunction('load_json', function ($path) use ($loader) {
    $fullPath = dirname($loader->getSourceContext($path . '.json')->getPath());
    $jsonPath = $fullPath . '/' . basename($path) . '.json';
    if (file_exists($jsonPath)) {
        return json_decode(file_get_contents($jsonPath), true);
    }
    return null;
}));

// Get the current route
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$path = trim($path, '/');

// Set default font classes
$fontClasses = 'font-dm-sans';

// Load footer data
$footerData = json_decode(file_get_contents(__DIR__ . '/../src/templates/components/footer/footer.json'), true);

// Common data to pass to all templates
$commonData = [
    'font_classes' => $fontClasses,
    'footer' => $footerData['footer']
];

// Handle routing
switch ($path) {
    case '':
        echo $twig->render('pages/index.twig', array_merge($commonData, [
            'title' => 'Photosnap',
            'maxStories' => 4
        ]));
        break;

    case 'stories':
        echo $twig->render('pages/stories.twig', array_merge($commonData, [
            'title' => 'Stories - Photosnap'
        ]));
        break;

    case 'features':
        echo $twig->render('pages/features.twig', array_merge($commonData, [
            'title' => 'Features - Photosnap'
        ]));
        break;

    case 'pricing':
        echo $twig->render('pages/pricing.twig', array_merge($commonData, [
            'title' => 'Pricing - Photosnap'
        ]));
        break;

    default:
        // 404 page
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('pages/404.twig', array_merge($commonData, [
            'title' => '404 - Page Not Found - Photosnap'
        ]));
        break;
}