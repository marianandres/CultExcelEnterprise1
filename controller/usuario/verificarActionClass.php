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
                $codigokey = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true));
                $estadokey = 1;
                $ids = array(
                    usuarioTableClass::ID => $id
                );
                $data = array(
                    usuarioTableClass::CODIGOKEY => $codigokey,
                    usuarioTableClass::ESTADOKEY => $estadokey
                );
                $verificacion = usuarioTableClass::getVerifyUserKey($id);

                if ($verificacion == $codigokey) {
                    usuarioTableClass::update($ids, $data);
                    session::getInstance()->setSuccess("Bienvenido A El Portal WEb Cult Excel. Su Cuenta a Sido Verificada!");
                    log::register('Actualizar', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
                } else {
                    session::getInstance()->setError("El Codigo De Verificacion No Es Correcto y/o Valido!. Verifique");
                }
            }

            routing::getInstance()->redirect('homepage', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
