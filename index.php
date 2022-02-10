<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        return require_once 'templates/hello.php';
        break;

    case '/viewers':
        $context = ['name' => 'the viewers'];
        return require_once 'templates/with_variable.php';
        break;
}
