<?php

class Connection
{
    public static function make($config)
    {
        $dsn = "mysql:host=" . $config['connection'] . ';port=' .  $config['port'] . ';dbname=' . $config['name'];

        try {
            return new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $exception) {
            dd($exception->getMessage());
        }
    }
}
