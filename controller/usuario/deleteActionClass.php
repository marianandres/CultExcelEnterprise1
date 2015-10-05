<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use hook\log\logHookClass as log;

/**
 * Description of ejemploClass
 *
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class deleteActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));

                $ids = array(
                    usuarioTableClass::ID => $id
                );
                usuarioTableClass::delete($ids, false);
                session::getInstance()->setSuccess(i18n::__(20004, null, 'default'));
                log::register('Eliminacion', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
                routing::getInstance()->redirect('usuario', 'index');
            } else {
                routing::getInstance()->redirect('usuario', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
