<?php
if (defined('CONFIG_LOADED')) {
    return;
}
define('CONFIG_LOADED', true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}