<?php
require_once dirname(__FILE__).'/../../config.php';

$form = array();
$messages = array();

getParamsLogin($form);
function getParamsLogin(&$form){
    $form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
    $form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

function validateLogin(&$form,&$messages){
    if ( ! (isset($form['login']) && isset($form['pass']))) {
        return false;
    }

    if ( $form['login'] == "") {
        $messages [] = 'Didnt get the login';
    }
    if ( $form['pass'] == "") {
        $messages [] = 'Didnt get the password';
    }

    if (count ( $messages ) > 0) return false;

    if ($form['login'] == "admin" && $form['pass'] == "admin") {
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['pass'] == "user") {
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }

    $messages [] = ' Wrong login or password';
    return false;
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form,$messages)) {
    include _ROOT_PATH.'/application/security/login_view.php';
} else {

    header("Location: "._APP_URL);
    include _ROOT_PATH.'/index.php';

}