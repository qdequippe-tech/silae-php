<?php

$content = file_get_contents(__DIR__.'/Silae_Paie_Rest_API_Partenaires_latest.json');
$openAPISpec = json_decode($content, true);

foreach ($openAPISpec['paths'] as $key => &$path) {
    foreach ($path as $operationKey => &$operation) {
        if (false === isset($operation['parameters'])) {
            continue;
        }

        $operation['parameters'][] = [
            'name' => 'dossiers',
            'in' => 'header',
            'required' => true,
            'type' => 'string',
            'default' => '{{dossiers}}',
        ];

        $operation['parameters'][] = [
            'name' => 'Authorization',
            'in' => 'header',
            'required' => true,
            'type' => 'string',
            'description' => 'Authorization de type Bearer.',
            'x-example' => 'Bearer {{access_token}}',
        ];
    }
}

file_put_contents('silae-paie-rest-api.json', json_encode($openAPISpec, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));
