<?php

$conn = mysqli_connect("localhost", "root", "7Hpd9ub5", "kdavies_ttnz");

if (!$conn) {
    die("Couldn't connect to database");
}

$mysqli_real_escape_string_fn = function($conn)
{
    return function(string $s)  use($conn){
        return mysqli_real_escape_string($conn, $s);
    };
};

$mysqli_query_fn = function($conn)
{
    return function(string $sql) use($conn){
        $result = mysqli_query($conn, $sql);
        if (!empty(mysqli_error($conn))) {
            throw new Exception(mysqli_error($conn) . " - $sql");
        }
        return $result;
    };
};

$mysqli_real_escape_string = $mysqli_real_escape_string_fn($conn);
$mysqli_query = $mysqli_query_fn($conn);