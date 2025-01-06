<?php

declare(strict_types=1);

use RuntimeException;

// Uses Icons from:
// https://github.com/adamwathan/entypo-optimized/tree/master/dist/icons

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    $svgContent = file_get_contents($tempFilepath);

    if ($svgContent === false) {
        throw new RuntimeException('Unable to read SVG file.');
    }

    $svgContent = str_replace('<svg ', '<svg fill="currentColor" ', $svgContent);
    $result = file_put_contents($tempFilepath, $svgContent);

    if ($result === false) {
        throw new RuntimeException('Unable to write SVG file.');
    }
};

return [
    [
        'source' => __DIR__.'/../node_modules/entypo-optimized/dist/icons',
        'destination' => __DIR__.'/../resources/svg',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
