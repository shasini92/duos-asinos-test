<?php

function dd($data)
{
    echo '<pre>';
    exit(var_dump($data));
    echo '</pre>';
}

function cleanInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function redirectIfAuthenticated($redirectPath = "/")
{
    if (isset($_SESSION['name'])) {
        return redirect($redirectPath);
    }
}
