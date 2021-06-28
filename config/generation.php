<?php

// Uses Icons from:
// https://github.com/adamwathan/entypo-optimized/tree/master/dist/icons

$svgNormalization = static function (string $tempFilepath, array $iconSet) {
    /** @var string $svgContent */
    $svgContent = file_get_contents($tempFilepath);
    $svgContent = str_replace('<svg ', '<svg fill="currentColor" ', $svgContent);
    file_put_contents($tempFilepath, $svgContent);
};

return [
    [
        'source' => __DIR__.'/../node_modules/entypo-optimized/dist/icons',
        'destination' => __DIR__.'/../resources/svg',
        'after' => $svgNormalization,
        'safe' => true,
    ],
];
