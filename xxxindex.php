<?php

include __DIR__ . '/vendor/autoload.php';

// \ModernWays\MVC\Routing::setRouteFromUrl($_SERVER['SCRIPT_NAME'], $_SERVER['REDIRECT_URL']);
// \ModernWays\MVC\Routing::setRoute($_SERVER['PATH_INFO']);
//::static
\ModernWays\MVC\Routing::setRoute($_SERVER['REDIRECT_URL']);
$defaultRoute = 'ModernWays\Competition/Admin/Index';
\ModernWays\MVC\Routing::init($defaultRoute);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soccer Competition</title>
</head>
<body>
<h1>Is de pagina die wordt opgeroepen als de bezoeker op onze Competition pagina komt</h1>
<pre id="feedback">
    <?php echo \ModernWays\MVC\Routing::toString(); ?>
    <?php echo var_dump($_SERVER);?>
</pre>
</body>
</html>
