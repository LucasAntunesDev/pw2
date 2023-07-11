<?php

$expiracao = time() + (60 * 60 * 24 *30);
setcookie('tema', 'dark', $expiracao, '/');

header('location: index.php');