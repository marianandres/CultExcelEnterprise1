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
 * @author Mariana Lopez, Andres Felipe Alvarez
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            $fields = array(
                usuarioTableClass::ID,
                usuarioTableClass::USER,
                usuarioTableClass::CREATED_AT
            );
            $orderBy = array(
                usuarioTableClass::USER
            );

            session::getInstance()->setFlash('report', 'report');
            $this->objUsuarios = usuarioTableClass::getAll($fields, true, $orderBy, 'ASC', null, null, null);
            $this->defineView('index', 'report', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
