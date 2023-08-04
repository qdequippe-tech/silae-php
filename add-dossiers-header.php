<?php

$content = file_get_contents(__DIR__.'/Silae_Paie_Rest_API_2023-07-03_Partenaires.json');
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
    }
}

file_put_contents('silae-paie-rest-api.json', json_encode($openAPISpec, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES));
