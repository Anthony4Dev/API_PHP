<?php

require_once __DIR__ . '/../../../API/config.php';
require_once __DIR__ . '/../../../API/response.php';

if (API_ACTIVE) {
    echo Response::json(200, 'success', [
        'version' => API_VERSION, 
        'status' => 'active'
    ]);
} else {
    echo Response::json(200, 'success', [
        'version' => API_VERSION, 
        'status' => 'in maintenance'
    ]);
}
    