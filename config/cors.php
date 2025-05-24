<?php

return [
    'paths' => ['api/*'], // Cho phép tất cả route API
    'allowed_methods' => ['*'], // Cho phép tất cả phương thức (GET, POST, ...)
    'allowed_origins' => ['http://localhost:5173'], // Origin của Vue.js
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Cho phép tất cả header
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false, // Không dùng credentials (cookie, auth headers)
];