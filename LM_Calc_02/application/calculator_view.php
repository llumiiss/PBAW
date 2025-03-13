<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Calculator for credit</title>
    </head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/application/secured_web.php" class="pure-button">Next secured page</a>
    <a href="<?php print(_APP_ROOT); ?>/application/security/logout.php" class="pure-button pure-button-active">Logout</a>
</div>

<form action="<?php print(_APP_URL);?>/application/calculator.php" method="post" class="pure-form pure-form-stacked">
    <label for="id_Quota">Quota: </label>
    <input id="id_Quota" type="text" name="Quota" value="<?php out($Quota) ?>" placeholder="1,000-5,000,000(PLN)" /><br />
    <label for="id_Time">Time:  </label>
    <input id="id_Time" type="text" name="Time" value="<?php out($Time) ?>" placeholder="For how long(months)(1-420)" /><br />
    <label for="id_Stake">Stake: </label>
    <input id="id_Stake" type="text" name="Stake" value="<?php out($Stake) ?>" placeholder="0%-700%" /><br />
    <input type="submit" value="Calculate" class="pure-button pure-button-primary"/>
</form>

<?php
if (isset($messages)) {
    if (count ( $messages ) > 0) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
        foreach ( $messages as $key => $msg ) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($month_quot)){ ?>
    <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        <?php echo 'Result: '.$month_quot.' PLN/month'; ?>
    </div>
<?php } ?>

</body>
</html>