<?php

$GLOBALS['timeIni'] = microtime(true);
session_name('mvcSite');
session_start();
ob_start();

if (file_exists('../config/config.php')) {
    if (filesize('../config/config.php') > 0) {
        include_once __DIR__ . '/../libs/vendor/autoLoadClass.php';
        mvc\autoload\autoLoadClass::getInstance()->autoLoad();
        mvc\dispatch\dispatchClass::getInstance()->main();
    } else {
        include_once './install/installerClass.php';
        $installer = new installerClass();
        $installer->install();
    }
} else {
    include_once './install/installerClass.php';
    $installer = new installerClass();
    $installer->install();
}

