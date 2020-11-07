<?php

return [
    'endpoint' => 'api/jp_postal_code',
    'import_path' => storage_path('app/csv/KEN_ALL.CSV'),
    'temp_path' => storage_path('app/csv/postal_code_utf8.csv'),
    'address_format' => '〒{first_code}-{last_code} {prefecture}{city}{address}',
    'postal_code_format' => '{first_code}-{last_code}'
];
