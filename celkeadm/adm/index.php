<!DOCTYPE html>
<html lang="pt-br"></html>
<?php

require './core/Config.php';
require './vendor/autoload.php';

use Core\ConfigController as Home;

$Url = new Home();
$Url->carregar();
?>
</html>