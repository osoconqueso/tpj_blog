<?php


return array(
    "paths" => array(
        "migrations" => "migrations"
    ),
    "environments" => array(
        "default_migration_table" => "phinxlog",
        "default_database" => "development",
        "development" => array(
            "adapter" => "mysql",
            "host" => 'localhost',
            "name" => 'tpj',
            "user" => 'root',
            "pass" => 'root',
            "port" => '3306'
        )
    )
);