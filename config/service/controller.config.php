<?php
/**
 * ZfcUserImpersonate Controller Config
 *
 * @created 20130709
 * @author Mark Tudor <code AT icefusion DOT co DOT uk>
 */

use ZfcUserImpersonate\Controller;

return array(
    'factories' => array(
        'zfcuserimpersonate_adminController' => function ($cm) {
            $adminController = new Controller\Admin();
            $adminController->setConfig($cm->get('zfcuserimpersonate_module_options'));
            $adminController->setUserService($cm->get('zfcuserimpersonate_user_service'));

            return $adminController;
        },
        'lmcuser' => function($cm) {
            /* @var RedirectCallback $redirectCallback */
            $redirectCallback = $cm->get('lmcuser_redirect_callback');

            /* @var UserController $controller */
            $controller = new Controller\User($redirectCallback);

            return $controller;
        },
    )
);
