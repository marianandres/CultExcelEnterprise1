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
class answerActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::ID, true));
                $respuesta = request::getInstance()->getPost(detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $estadopqrs = 1;
                
                $userId = session::getInstance()->getUserId();
                $password1 = md5($password);
                $verificacion = usuarioTableClass::getVerifyUserPass($userId);
                if ($verificacion == $password1) {
                    $ids = array(
                        pqrsTableClass::ID => $id
                    );
                    $data = array(
                        pqrsTableClass::ESTADOPQRS => $estadopqrs
                    );
                    pqrsTableClass::update($ids, $data);
                    $data1 = array(
                        detallePqrsTableClass::PQRS_ID => $id,
                        detallePqrsTableClass::USUARIO_ID =>$userId,
                        detallePqrsTableClass::RESPUESTA => $respuesta
                    );
                    detallePqrsTableClass::insert($data1);
                    session::getInstance()->setSuccess("La Peticion Ha Entrado En Proceso!");
      
                } else {
                    session::getInstance()->setError("La Constraseña Del Administrador No Es Correcta!. Verifique");
                }
            }

            routing::getInstance()->redirect('pqrs', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
