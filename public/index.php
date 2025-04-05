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

// Set default font classes
$fontClasses = 'font-dm-sans';

// Load footer data
$footerData = json_decode(file_get_contents(__DIR__ . '/../src/templates/components/footer/footer.json'), true);

// Common data to pass to all templates
$commonData = [
    'font_classes' => $fontClasses,
    'footer' => $footerData['footer']
];

// Scan components directory for JSON files
$componentsDir = __DIR__ . '/../src/templates/components/';
$routes = [];

foreach (scandir($componentsDir) as $component) {
    if ($component === '.' || $component === '..') continue;

    $jsonPath = $componentsDir . $component . '/' . $component . '.json';
    if (file_exists($jsonPath)) {
        $routes[$component] = json_decode(file_get_contents($jsonPath), true);
    }
}

// Get the current route
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Special handling for home page
if ($path === '') {
    echo $twig->render('pages/index.twig', array_merge($commonData, [
        'title' => 'Photosnap',
        'maxStories' => 4,
        'stories' => $routes['story-card']['stories'],
        'heros' => $routes['hero']['heros'],
        'features' => $routes['feature-card']['features'],
    ]));
} 
// Check if a matching Twig template exists for the current path
elseif (file_exists(__DIR__ . "/../src/templates/pages/{$path}.twig")) {
    $data = $commonData;
    $data['title'] = ucfirst($path) . ' - Photosnap';

    // Add specific data based on the route
    switch ($path) {
        case 'stories':
            $data['stories'] = $routes['story-card']['stories'];
            $data['featuredStory'] = $routes['hero']['featured_story'];
            break;
        case 'features':
            $data['features'] = $routes['feature-card']['features'];
            $data['featuredStory'] = $routes['hero']['featured_hero'];
            break;
        case 'pricing':
            $data['prices'] = $routes['price-card']['prices'];
            $data['featuredStory'] = $routes['hero']['featured_pricing'];
            $data['features'] = $routes['feature-table']['features'];
            break;
    }

    echo $twig->render("pages/{$path}.twig", $data);
}
// Handle 404
else {
    header('HTTP/1.0 404 Not Found');
    echo $twig->render('pages/404.twig', array_merge($commonData, [
        'title' => '404 - Page Not Found - Photosnap'
    ]));
}