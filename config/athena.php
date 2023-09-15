<?php


$athenaConfiguration = [
    /*
    |--------------------------------------------------------------------------
    | Athena Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can configure the athena
    |
    */
    'credentials' => [

        'key'    => env('AWS_ACCESS_KEY_ID', ''),

        'secret' => env('AWS_SECRET_ACCESS_KEY', ''),

    ],

    'region' => env('AWS_REGION', 'us-east-1'),

    'version' => 'latest',

    'prefix' => env('ATHENA_TABLE_PREFIX', ''),

    'bucket' => env('S3_BUCKET'),

    'output_folder' => env('ATHENA_OUTPUT_FOLDER'),
];

$athenaConfiguration['s3output'] = 's3://' . $athenaConfiguration['bucket'] . '/' . $athenaConfiguration['output_folder'];

return $athenaConfiguration;
