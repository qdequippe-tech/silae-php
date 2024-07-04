<?php

declare(strict_types=1);

return [
    'openapi-file' => __DIR__ . '/openapi/silae-paie-rest-api.json',
    'namespace' => 'QdequippeTech\Silae\Api',
    'directory' => __DIR__ . '/generated/',
    'strict' => false,
    'date-format' => 'Y-m-d\\TH:i:s',
    'throw-unexpected-status-code' => true,
];
