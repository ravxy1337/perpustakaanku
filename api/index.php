<?php

// Pastikan folder cache view Laravel di /tmp tersedia (karena Vercel berstatus read-only filesystem)
$viewsPath = '/tmp/views';
if (!is_dir($viewsPath)) {
    mkdir($viewsPath, 0755, true);
}

require __DIR__ . '/../public/index.php';
