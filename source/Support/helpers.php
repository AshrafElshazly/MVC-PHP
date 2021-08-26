<?php

if(!function_exists('asset')) {
    function assets($path)
    {
        echo URL .'asset/'. $path ;
    }
}

if(!function_exists('upload')) {
    function uploads($path)
    {
        echo URL .'upload/'. $path ;
    }
}

if(!function_exists('url')) {
    function url($path = '')
    {
        echo URL . $path ;
    }
}

if(!function_exists('authCheck')) {
    function authCheck()
    {
        return Source\Http\Auth::check();
    }
}