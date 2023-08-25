<?php

declare(strict_types=1);

use OwenVoke\BladeEntypo\Tests\TestCase;

use function Spatie\Snapshots\assertMatchesSnapshot;

uses(TestCase::class);

it('compiles a single anonymous component', function () {
    $result = svg('entypo-plus')->toHtml();

    assertMatchesSnapshot($result);
});

it('can add classes to icons', function () {
    $result = svg('entypo-plus', 'w-6 h-6 text-gray-500')->toHtml();

    assertMatchesSnapshot($result);
});

it('can add styles to icons', function () {
    $result = svg('entypo-plus', ['style' => 'color: #555'])->toHtml();

    assertMatchesSnapshot($result);
});
