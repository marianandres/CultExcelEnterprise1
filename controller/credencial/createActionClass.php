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
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $nombre = request::getInstance()->getPost(credencialTableClass::getNameField(credencialTableClass::NOMBRE, true));
                $data = array(
                    credencialTableClass::NOMBRE => $nombre,
                );
                credencialTableClass::insert($data);
                session::getInstance()->setSuccess(i18n::__(20001, null, 'default'));
                log::register('insertar', usuarioTableClass::getNameTable(), null, 1);
                routing::getInstance()->redirect('credencial', 'index');
            } else {
                routing::getInstance()->redirect('credencial', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
