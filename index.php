<?php
include 'reason/routing.php';
include 'reason/templates.php';
include 'reason/utils.php';

$app = new app($_SERVER['REQUEST_URI']);

function main()
{  
    $ahoj = "<jsi kokot vis to?";
    view("index.php", compact("ahoj"));
}

$app->route("/", "main");

function contact()
{   
    view("contact.php");
}

$app->route("/contact", "contact");

function redtest()
{
    redirect("/");
}

$app->route("/redtest", "redtest");


?>