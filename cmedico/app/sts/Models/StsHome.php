<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsBlog
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsHome
{

    public  function index()
    {
        echo "Sts Home";
    }
}
