<?php
/**
 * ZfcUserImpersonate Module Config
 *
 * @created 20130709
 * @author Mark Tudor <code AT icefusion DOT co DOT uk>
 */

return array(
    'service_manager' => array(
        'allow_override' => true,
        'aliases' => array(
            'zfcuser_user_service' => 'zfcuserimpersonate_user_service', // TODO: check if this should be lmcuser_user_service instead
        ),
    ),
);
