<?php

function url_for(string $script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] !== "/") {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}


function secure_http(string $url)
{
    if (isset($url)) {
        return htmlspecialchars(urlencode($url));
    }
}


function is_request(string $res)
{
    return $_SERVER["REQUEST_METHOD"] == strtoupper($res);
}


function redirect_to(string $destination)
{
    header("Location: " . url_for($destination));
    exit("Redirect successfully");
}
