<?php

use WorkOS\Laravel\WorkOSServiceProvider;

//update based on the API Secret Key & the project ID in the WorkOS Developer Dashboard in .env
return [
    // WorkOS API Key
    'api_key' => env('WORKOS_API_KEY'),

    // WorkOS Project ID
    'project_id' => env('WORKOS_PROJECT_ID'),
];
