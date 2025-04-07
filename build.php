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

// Load JSON data from components
$componentsDir = __DIR__ . '/src/templates/components/';
$routes = [];

foreach (scandir($componentsDir) as $component) {
    if ($component === '.' || $component === '..') continue;

    $jsonPath = $componentsDir . $component . '/' . $component . '.json';
    if (file_exists($jsonPath)) {
        $routes[$component] = json_decode(file_get_contents($jsonPath), true);
    }
}

// Load footer data
$footerData = json_decode(file_get_contents($componentsDir . 'footer/footer.json'), true);

// Common data for all templates
$commonData = [
    'font_classes' => 'font-dm-sans',
    'footer' => $footerData['footer']
];

// Set up Twig
$loader = new \Twig\Loader\FilesystemLoader($templatesDir);
$twig = new \Twig\Environment($loader);

// Add global variable for base URL - use /demo-photosnap-twig for GitHub Pages build
$twig->addGlobal('base_path', '/demo-photosnap-twig');
$twig->addGlobal('is_github_pages', true);

// Compile templates with their required data
$pages = [
    'pages/index.twig' => [
        'output' => 'index.html',
        'data' => array_merge($commonData, [
            'title' => 'Photosnap',
            'maxStories' => 4,
            'stories' => $routes['story-card']['stories'] ?? null,
            'heros' => $routes['hero']['heros'] ?? null,
            'features' => $routes['feature-card']['features'] ?? null,
        ])
    ],
    'pages/stories.twig' => [
        'output' => 'stories.html',
        'data' => array_merge($commonData, [
            'title' => 'Stories - Photosnap',
            'stories' => $routes['story-card']['stories'] ?? null,
            'featuredStory' => $routes['hero']['featured_story'] ?? null,
        ])
    ],
    'pages/features.twig' => [
        'output' => 'features.html',
        'data' => array_merge($commonData, [
            'title' => 'Features - Photosnap',
            'features' => $routes['feature-card']['features'] ?? null,
            'featuredStory' => $routes['hero']['featured_hero'] ?? null,
        ])
    ],
    'pages/pricing.twig' => [
        'output' => 'pricing.html',
        'data' => array_merge($commonData, [
            'title' => 'Pricing - Photosnap',
            'prices' => $routes['price-card']['prices'] ?? null,
            'featuredStory' => $routes['hero']['featured_pricing'] ?? null,
            'features' => $routes['feature-table']['features'] ?? null,
        ])
    ]
];

foreach ($pages as $template => $config) {
    try {
        $html = $twig->render($template, $config['data']);
        file_put_contents($buildDir . '/' . $config['output'], $html);
        echo "Generated {$config['output']}\n";
    } catch (Exception $e) {
        echo "Error generating {$config['output']}: " . $e->getMessage() . "\n";
    }
}