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
 * @author Mariana lopez , Andres Felipe Alvarez 
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {

            $fields = array(
                categoriaTableClass::ID,
                categoriaTableClass::NOMBRE,
                categoriaTableClass::CREATED_AT,
                categoriaTableClass::UPDATED_AT,
                categoriaTableClass::DELETED_AT,
            );
            $orderBy = array(
                categoriaTableClass::NOMBRE
            );
            $this->objCategoria = categoriaTableClass::getAll($fields, true, $orderBy, 'ASC');
            $this->defineView('index', 'categoria', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
