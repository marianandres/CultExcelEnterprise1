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
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $usuario = trim(request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true)));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1');
                $password2 = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2');
                $cadena = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true));

                $this->validate($usuario, $password, $password2);
                $this->validateUser($usuario);

                $data = array(
                    usuarioTableClass::USER => $usuario,
                    usuarioTableClass::PASSWORD => md5(md5($password))
                );
                usuarioTableClass::insert($data);
                session::getInstance()->setSuccess(i18n::__(20001, null, 'default'));
                log::register('insertar', usuarioTableClass::getNameTable(), null, 1);
                routing::getInstance()->redirect('usuario', 'index');
            } else {
                routing::getInstance()->redirect('usuario', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    private function caracteres($cadena) {
        $cadena = " !  # $ % & ' ( ) * +, -. /:;= ? ^ _  ` [ \ ] { | } ~";
        $flag = false;
        try {
            $cadena;
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    private function validateUser($usuario) {
        $flag = false;

        if ($usuario === usuarioTableClass::getNameField(usuarioTableClass::USER)) {
            session::getInstance()->setError(i18n::__(10004, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }
        if ($flag === true) {
            request::getInstance()->setMethod('GET');
            routing::getInstance()->forward('usuario', 'index');
        }
    }

    private function validate($usuario, $password, $password2) {
        $flag = false;

        if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
            session::getInstance()->setError(i18n::__(10001, null, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

        if (($password) !== ($password2)) {
            session::getInstance()->setError(i18n::__(10002, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
        }

//    if (($cadena) !== ($usuario )) {
//      session::getInstance()->setError(i18n::__(00001, null, 'errors'));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
        if ($usuario == "" or $password == "" or $password2 == "") {
            session::getInstance()->setError(i18n::__(10003, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

//    if ($usuario === usuarioTableClass::getNameField(usuarioTableClass::USER)) {
//      session::getInstance()->setError(i18n::__(10004, null, 'errors'));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }

        if ($flag === true) {
            request::getInstance()->setMethod('GET');
            routing::getInstance()->forward('usuario', 'index');
        }
    }

}
