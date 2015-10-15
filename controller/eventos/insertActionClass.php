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
class insertActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {

            if (usuarioTableClass::getVerifyUser(mvc\session\sessionClass::getInstance()->getUserId()) == 0) {
                routing::getInstance()->redirect('shfSecurity', 'noPermission');
            } else {
                $fields = array(
                    categoriaTableClass::ID,
                    categoriaTableClass::NOMBRE
                );
                $orderBy = array(
                    categoriaTableClass::NOMBRE
                );
                session::getInstance()->setFlash('eventos', true);
                $this->objCategoria = categoriaTableClass::getAll($fields, true, $orderBy, 'ASC');
                $this->defineView('insert', 'eventos', session::getInstance()->getFormatOutput());
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
