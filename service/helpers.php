<?php

function redirect(string $message = null)
{
    $url = strtok($_SERVER["REQUEST_URI"], '?');

    $query_string = $message ? "?message=" . $message : '';

    $base = "http://" . $_SERVER["HTTP_HOST"] . $url . $query_string;

    echo '<script>window.location.replace("' . $base . '");</script>';

    exit();
}