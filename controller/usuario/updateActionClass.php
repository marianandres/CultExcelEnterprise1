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
class updateActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
                $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $passwordMd5 = md5($password);
                $ids = array(
                    usuarioTableClass::ID => $id
                );
                $data = array(
                    usuarioTableClass::USER => $usuario,
                    usuarioTableClass::PASSWORD => $passwordMd5,
                );
                usuarioTableClass::update($ids, $data);
                session::getInstance()->setSuccess("La Cuenta Ha Sido Actualizada Con exito!");
                log::register('Actualizar', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
            }
            routing::getInstance()->redirect('usuario', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
