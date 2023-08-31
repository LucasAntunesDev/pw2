<?php
//index.php

require_once('vendor/autoload.php');

use Embed\Embed;
use Embed\Exceptions\InvalidUrlException;

try {
    $info = Embed::create('https://youtube.com/');
    echo $info->title;
} catch (InvalidUrlException) {
    echo 'URL Inválida';
}
