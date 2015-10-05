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
 * @author Mariana Lopez, Andres Felipe Alvarez
 */
class deleteSelectActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $idsToDelete = request::getInstance()->getPost('chk');

                foreach ($idsToDelete as $id) {
                    $ids = array(
                        usuarioTableClass::ID => $id
                    );
                    usuarioTableClass::delete($ids, true);
                }
                session::getInstance()->setSuccess(i18n::__(20003, null, 'default'));
                log::register('EliminacionSeleccionado', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
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
