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
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class createDatoUserActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $nombre = trim(request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true)));
                $apellido = trim(request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true)));
                $genero = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true));
                $fechaNacimiento = trim(request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true)));
                $localidad_id = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true));
                $tipo_Documento_id = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true));
                $documentoId = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::DOCUMENTOID, true));
                $usuarioId = session::getInstance()->getUserId();
                $updatestate = 1;
                $data = array(
                    datoUsuarioTableClass::NOMBRE => $nombre,
                    datoUsuarioTableClass::APELLIDO => $apellido,
                    datoUsuarioTableClass::GENERO => $genero,
                    datoUsuarioTableClass::FECHA_NACIMIENTO => $fechaNacimiento,
                    datoUsuarioTableClass::LOCALIDAD_ID => $localidad_id,
                    datoUsuarioTableClass::TIPO_DOCUMENTO_ID => $tipo_Documento_id,
                    datoUsuarioTableClass::DOCUMENTOID => $documentoId,
                    datoUsuarioTableClass::UPDATESTATE => $updatestate

                );
                datoUsuarioTableClass::insert($data);
                session::getInstance()->setSuccess("Actualizacion de Los Datos De Tu Cuenta Finalizada!.");
                routing::getInstance()->redirect('homepage', 'index');
            } else {
                routing::getInstance()->redirect('registrar', 'insertDatoUser');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

//    private function generarCodigo($longitud) {
//        $key = '';
//        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
//        $max = strlen($pattern) - 1;
//        for ($i = 0; $i < $longitud; $i++)
//            $key .= $pattern{mt_rand(0, $max)};
//        return $key;
//    }

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

        if ($usuario === usuarioTableClass::getNameField(usuarioTableClass::USER)) {
            session::getInstance()->setError(i18n::__(10004, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

        if ($flag === true) {
            request::getInstance()->setMethod('GET');
            routing::getInstance()->forward('registrar', 'insertDatoUser');
        }
    }

}
