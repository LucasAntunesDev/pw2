<?php

$expiracao = time() + (60 * 60 * 24 *30);
setcookie('tema', 'light', $expiracao, '/');

header('location: index.php');