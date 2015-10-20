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
class inactiveActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $estadokey = 0;
                $userId = session::getInstance()->getUserId();
                $password1 = md5($password);
                $verificacion = usuarioTableClass::getVerifyUserPass($userId);
                if ($verificacion == $password1) {
                    $ids = array(
                        usuarioTableClass::ID => $id
                    );
                    $data = array(
                        usuarioTableClass::ESTADOKEY => $estadokey
                    );
                    usuarioTableClass::update($ids, $data);
                    session::getInstance()->setSuccess("La Cuenta A Sido Desactivada!");
                    log::register('Actualizar', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
                } else {
                    session::getInstance()->setError("La Constraseña Del Administrador No Es Correcta!. Verifique");
                }
            }

            routing::getInstance()->redirect('usuario', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
