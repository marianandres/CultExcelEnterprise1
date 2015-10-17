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
class insertDatoUserActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            $fields = array(
                localidadTableClass::ID,
                localidadTableClass::NOMBRE
            );
            $orderBy = array(
                localidadTableClass::NOMBRE
            );
            
            $fields2 = array(
                tipoDocumentoTableClass::ID,
                tipoDocumentoTableClass::NOMBRE
            );
            $orderBy2 = array(
                tipoDocumentoTableClass::NOMBRE
            );
            session::getInstance()->setFlash('register', 'register');
            $this->objLocalidad = localidadTableClass::getAll($fields, true, $orderBy, 'ASC');
            $this->objTipoDoc = tipoDocumentoTableClass::getAll($fields, true, $orderBy, 'ASC');
            $this->defineView('insertDatoUser', 'registrar', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
