<?php

require_once('vendor/autoload.php');

// use Embed/Embed
session_start();

foreach($_SESSION['links'] as $link){
    echo $link;
    echo '<br>';
}