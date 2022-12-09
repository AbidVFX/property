<?php

function active_class($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function is_in_array($array, $key, $key_value)
{
    $within_array = 'false';
    foreach ($array as $k => $v) {
        if (is_array($v)) {
            $within_array = is_in_array($v, $key, $key_value);
            if ($within_array == 'true') {
                break;
            }
        } else {
            if ($v == $key_value && $k == $key) {
                $within_array = 'true';
                break;
            }
        }
    }
    return $within_array;
}