<?php
//
//global $action;
//require_once 'init.php';
//require_once 'check.php';
//require_once 'application/controllers/CalcCtrl.class.php';
//require_once 'application/controllers/LoginCtrl.class.php';
//
//switch ($action) {
//    case 'login':
//        $ctrl = new application\controllers\LoginCtrl();
//        $ctrl->doLogin();
//        break;
//
//    case 'calcCompute':
//        include 'check.php';
//        $ctrl = new application\controllers\CalcCtrl();
//        $ctrl->getMonthQuot();
//        break;
//
//    case 'logout':
//        include 'check.php';
//        $ctrl = new application\controllers\LoginCtrl();
//        $ctrl->doLogout();
//        break;
//
//    case 'action1':
//        // coś publicznego
//        print('reakcja na akcję publiczną ....');
//        break;
//
//    case 'action2':
//        include 'check.php';
//        print('reakcja na akcję niepubliczną ....');
//        break;
//
//    default:
//        if (isset($_SESSION['user'])) {
//            $ctrl = new application\controllers\CalcCtrl();
//            $ctrl->generateView();
//        } else {
//            $ctrl = new application\controllers\LoginCtrl();
//            $ctrl->generateView();
//        }
//        break;
//}
//

require_once 'init.php';

getRouter()->setDefaultRoute('personList');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('personList', 'PersonListCtrl');
getRouter()->addRoute('loginShow', 'LoginCtrl');
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl');
getRouter()->addRoute('personNew', 'PersonEditCtrl', ['user', 'admin']);
getRouter()->addRoute('personEdit', 'PersonEditCtrl', ['user', 'admin']);
getRouter()->addRoute('personSave', 'PersonEditCtrl', ['user', 'admin']);
getRouter()->addRoute('personDelete', 'PersonEditCtrl', ['admin']);

getRouter()->go();