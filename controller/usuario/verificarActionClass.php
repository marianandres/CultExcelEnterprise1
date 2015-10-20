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
class verificarActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $passwordMd5 = md5($password);
                $verificarPass = usuarioTableClass::getVerifyUserPass($id);
                if ($verificarPass == $passwordMd5) {

                    $estadokey = 2;
                    $ids = array(
                        usuarioTableClass::ID => $id
                    );
                    $data = array(
                        usuarioTableClass::ESTADOKEY => $estadokey
                    );
//                    $verificacion = usuarioTableClass::getVerifyUserKey($id);

                    usuarioTableClass::update($ids, $data);
                    session::getInstance()->setSuccess("Bienvenido A El Portal WEb Cult Excel.Tu Solicitud de La Activacion De Su Cuenta Ha Sido Enviada!.");
                    log::register('Actualizar', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
                } else {
                    session::getInstance()->setError("La contraseña Ingresada Es Incorrecta!. Verifique");
                }
            }
            routing::getInstance()->redirect('homepage', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
