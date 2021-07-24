<?php

namespace Source\Http;

class Route
{
    private static $routing_table = [];

    public static function get(string $url, string $controller_actions, string $middleware = null )
    {   
        $controller_actions = explode("@",$controller_actions);
        $url_regex = "/^" . str_replace("/" ,"\/" ,$url) ."$/";
        self::$routing_table[$url_regex] = [
            "method"     => "GET",
            "controller" => $controller_actions[0],
            "action"     => $controller_actions[1],
            "middleware" => $middleware
        ];
    }

    public static function post(string $url , string $controller_actions, string $middleware = null )
    {   
        $controller_actions = explode("@",$controller_actions);
        $url_regex = "/^" . str_replace("/" ,"\/" ,$url) ."$/";
        self::$routing_table[$url_regex] = [
            "method"     => "post",
            "controller" => $controller_actions[0],
            "action"     => $controller_actions[1],
            "middleware" => $middleware
        ];
    }

    public function getRoutingTable()
    {
        return self::$routing_table;
    }
}