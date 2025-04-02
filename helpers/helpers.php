<?php

use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;

function app(): \PHPFrw\Application
{
    return \PHPFrw\Application::$app;
}

function request(): \PHPFrw\Request
{
    return app()->request;
}

function response(): \PHPFrw\Response
{
    return app()->response;
}

function session(): \PHPFrw\Session
{
    return app()->session;
}

function cache(): \PHPFrw\Cache
{
    return app()->cache;
}

function router(): \PHPFrw\Router
{
    return app()->router;
}

function get_route_params(): array
{
    return router()->getRouteParams();
}

function get_route_param($key, $default=''): string
{
    return router()->getRouteParams()[$key] ?? $default;
}

function array_value_search($arr, $index, $value): int|string|null
{
    foreach ($arr as $k => $v) {
        if ($v[$index] == $value){
            return $k;
        }
    }
    return null;
}

function db(): \PHPFrw\DataBase
{
    return app()->db;
}

function view($view = '', $data = [], $layout=''): string|\PHPFrw\View
{
    if($view){
        return app()->view->render($view,$data, $layout);
    }
    return app()->view;
}

function abort($error = '', $code = 404)
{
    response()->setResponseCode($code);
    echo view("errors/{$code}", ['error' => $error], false);
    die;
}

function base_url($path=''): string
{
    return PATH.$path;
}

function get_alerts(): void
{
    if (!empty($_SESSION['flash'])){
        foreach ($_SESSION['flash'] as $k => $v) {
            echo view()->renderPartial(
                "incs/alert_{$k}",
                ["flash_{$k}" => session()->getFlash($k)]);
        }
    }
}

function get_errors($fieldName): string
{
    $output = '';
    $errors = session()->get('form_errors');
    if (isset($errors[$fieldName])) {
        $output .= '<div class="invalid-feedback d-block"><ul class="list-unstyled">';
        foreach ($errors[$fieldName] as $error ) {
            $output .= "<li>$error</li>";
        }
        $output .= '</ul></div>';
    }
    return $output;
}

function get_validation_class($fieldName): string
{
    $errors = session()->get('form_errors');
    if (empty($errors)){
        return '';
    }
    return isset($errors[$fieldName]) ? 'is-invalid' : 'is-valid';
}

function old($fieldName): string
{
    return isset(session()->get('form_data')[$fieldName]) ?
        h(session()->get('form_data')[$fieldName]) : '';
}

function h($str): string
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function get_csrf_token(): string
{
    return '<input type="hidden" name="csrf_token" value="'. session()->get('csrf_token') .'">';
}

function get_csrf_meta(): string
{
    return '<meta name="csrf-token" content="'. session()->get('csrf_token') .'">';
}

function check_auth(): bool
{
    return \PHPFrw\Auth::isAuth();
}

function getUser()
{
    return \PHPFrw\Auth::user();
}