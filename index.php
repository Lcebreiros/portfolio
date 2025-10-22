<?php
// Simple front controller for shared hosting
// For servers where the document root cannot be set to `public/`,
// this file forwards all requests to Laravel's public/index.php.

require __DIR__ . '/public/index.php';

