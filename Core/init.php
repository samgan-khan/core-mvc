<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css|ico)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    include __DIR__ . '/../index.php';
}
