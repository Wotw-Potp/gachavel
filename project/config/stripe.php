<?php

return [
  'api_key' => [
    'public' => env('STRIPE_API_PUBLIC_KEY', ''),
    'secret' => env('STRIPE_API_PRIVATE_KEY', ''),
  ],
];