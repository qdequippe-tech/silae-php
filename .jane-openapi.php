<?php

declare(strict_types=1);

return [
    'openapi-file' => __DIR__ . '/silae-paie-rest-api.json',
    'namespace' => 'QdequippeTech\Silae\Api',
    'directory' => __DIR__ . '/generated/',
    'strict' => false,
    'date-format' => 'Y-m-d\\TH:i:s',
    'use-fixer' => true,
    'fixer-config-file' => __DIR__ . '/.php-cs-fixer.php',
];