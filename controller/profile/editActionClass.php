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
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class editActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->hasRequest(usuarioTableClass::ID)) {
//          $UserName = usuarioTableClass::getUserName(usuarioTableClass::ID);
                $fields = array(
                    usuarioTableClass::ID,
                    usuarioTableClass::USER,
                    usuarioTableClass::PASSWORD
                );
                $where = array(
                    usuarioTableClass::ID => request::getInstance()->getRequest(usuarioTableClass::ID)
                );
                session::getInstance()->setFlash('usuario', 'usuario');
                $this->objUsuario = usuarioTableClass::getAll($fields, true, null, null, null, null, $where);
                $this->defineView('edit', 'usuario', session::getInstance()->getFormatOutput());
            } else {
                routing::getInstance()->redirect('usuario', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
