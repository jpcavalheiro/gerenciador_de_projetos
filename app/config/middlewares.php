<?php

$app->Middleware('before', function ($c) {
    session_start();
});

$app->Middleware('before', function ($c) {
    header('Content-Type: application/json');
});

/*

$app->Middleware('after', function ($c) {
    echo 'after';
});

$app->Middleware('after', function ($c) {
    echo 'after 2';
});
*/