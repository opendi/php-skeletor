<?php

use Sami\Sami;

$source = __DIR__ . '/src';
$build = __DIR__ . '/target/sami/build';
$cache = __DIR__ . '/target/sami/cache';

return new Sami($src, [
    'title' => 'Skeletor API',
    'build_dir' => $build,
    'cache_dir' => $cache,
    'default_opened_level' => 2,
]);
