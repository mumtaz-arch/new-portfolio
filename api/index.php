<?php

// ambil halaman dari URL
$page = $_GET['page'] ?? 'home';

// Routing manual
switch ($page) {

    case 'about':
        require __DIR__ . '/../about.php';
        break;

    case 'contact':
        require __DIR__ . '/../contact.php';
        break;

    default:
        require __DIR__ . '/../index.php'; 
        break;
}
