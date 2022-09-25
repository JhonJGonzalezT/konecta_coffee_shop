<?php
class Connect
{
    public static function connection()
    {
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'konecta_coffee_shop';
        return new mysqli($server, $user, $password, "$database");
    }
}