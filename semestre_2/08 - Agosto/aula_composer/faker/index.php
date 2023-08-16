<?php
//index.php

require_once('vendor/autoload.php');

$faker = Faker\Factory::create('pt_BR');

echo $faker->name();
echo '<br>';
echo $faker->email();
echo '<br>';
echo $faker->city();
echo '<br>';
echo $faker->state();