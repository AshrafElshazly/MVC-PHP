<?php

namespace Source\Http;

class Route
{
    private static $routing_table = [];

    public static function get(string $url, string $controller, string $middleware = null )
    {   
        $controller = explode("@",$controller);
        $url_regex = "/^" . str_replace("/" ,"\/" ,$url) ."$/";
        self::$routing_table[$url_regex] = [
            "method"     => "GET",
            "controller" => $controller[0],
            "action"     => $controller[1],
            "middleware" => $middleware
        ];
    }

    public static function post(string $url , string $controller, string $middleware = null )
    {   
        $controller = explode("@",$controller);
        $url_regex = "/^" . str_replace("/" ,"\/" ,$url) ."$/";
        self::$routing_table[$url_regex] = [
            "method"     => "POST",
            "controller" => $controller[0],
            "action"     => $controller[1],
            "middleware" => $middleware
        ];
    }

    public function getRoutingTable()
    {
        return self::$routing_table;
    }
}