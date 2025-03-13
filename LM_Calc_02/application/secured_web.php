<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/application/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Secured website</title>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/application/calculator.php" class="pure-button">Back to Calculator</a>
    <a href="<?php print(_APP_ROOT); ?>/application/security/logout.php" class="pure-button pure-button-active">Logout</a>
</div>

<div style="width:90%; margin: 2em auto;">
    <p>This another secured page.</p>
</div>

</body>
</html>