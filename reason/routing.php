<?php

class app
{
    function __construct($app_server)
    {
        $this->app_server = $app_server;
    }
    function route($adress, $function)
    {
        switch ($this->app_server)
        {
            case $adress:
                $function();
        }
    }
}

?>