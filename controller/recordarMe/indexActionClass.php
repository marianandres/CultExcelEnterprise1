<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {

            $fields = array(
                recordarMeTableClass::ID,
                recordarMeTableClass::USUARIO_ID,
                recordarMeTableClass::IP_ADDRESS,
                recordarMeTableClass::HASH_COOKIE,
            );
            $orderBy = array(
                recordarMeTableClass::ID
            );
            session::getInstance()->setFlash('recordarme', 'recordarme');
            $this->objRecordarMe = recordarMeTableClass::getAll($fields, false, $orderBy, 'ASC');
            $this->defineView('index', 'recordarMe', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
