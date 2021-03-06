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
class deleteActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarMeTableClass::ID, true));

                $ids = array(
                    recordarMeTableClass::ID => $id
                );
                recordarMeTableClass::delete($ids, false);
                session::getInstance()->setSuccess(i18n::__(20003, null, 'default'));
                routing::getInstance()->redirect('recordarMe', 'index');
            } else {
                routing::getInstance()->redirect('recordarMe', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
