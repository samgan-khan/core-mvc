<?php

include __DIR__ . '/../Config/connection.php';
include __DIR__ . '/../Views/View.php';
include __DIR__ . '/../Config/route.php';

/**
 * including all Repositories
 */
foreach (glob("Repositories/*.php") as $filename) {
    include $filename;
}

/**
 * including all models.
 */
foreach (glob("Models/*.php") as $filename) {
    include $filename;
}

/**
 * including all Controllers
 */
foreach (glob("Controllers/*.php") as $filename) {
    include $filename;
}