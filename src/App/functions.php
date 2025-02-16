<?php
namespace App;
function redirectTo(string $path)
{
    header("Location: {$path}");
    //redirect status code
    http_response_code(302);
    exit;
}