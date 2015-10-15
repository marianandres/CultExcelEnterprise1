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
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $nombre = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::NOMBRE, true));
                $facebook = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FACEBOOK, true));
                $twitter = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::TWITTER, true));
                $hora = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::STARTTIME, true));
                $lugar_latitud = '00000';
                $lugar_longitud = '00000';
                $file = request::getInstance()->getFile(eventoTableClass::getNameField(eventoTableClass::IMAGEN, true));
                $direccion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DIRECCION, true));
                $fecha_inicial_evento = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true));
                $fecha_final_evento = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true));
                $descripcion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true));
//                $fecha_inicial_publicacion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true));
//                $fecha_final_publicacion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true));
                $costo = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::COSTO, true));
                $categoria_id = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true));

                $usuario_id = session::getInstance()->getUserId();
                
                $ext = $file['name'];
                $nameFile = md5($usuario_id) . '.'. $ext;
                move_uploaded_file($file['tmp_name'], config::getPathAbsolute() . 'web/upload/' . $nameFile);
                $data = array(
                    eventoTableClass::IMAGEN => $nameFile,
                    eventoTableClass::CATEGORIA_ID => $categoria_id,
                    eventoTableClass::COSTO => $costo,
                    eventoTableClass::DESCRIPCION => $descripcion,
                    eventoTableClass::DIRECCION => $direccion,
                    eventoTableClass::FECHA_FINAL_EVENTO => $fecha_final_evento,
                    eventoTableClass::FECHA_INICIAL_EVENTO => $fecha_inicial_evento,
                    eventoTableClass::LUGAR_LATITUD => $lugar_latitud,
                    eventoTableClass::LUGAR_LONGITUD => $lugar_longitud,
                    eventoTableClass::NOMBRE => $nombre,
                    eventoTableClass::STARTTIME => $hora,
                    eventoTableClass::USUARIO_ID => $usuario_id,
                    eventoTableClass::FACEBOOK => $facebook,
                    eventoTableClass::TWITTER => $twitter,
                    '__sequence' => 'evento_id_seq'
                );
                eventoTableClass::insert($data);
                routing::getInstance()->redirect('eventosBlog', 'index');
            } else {
                routing::getInstance()->redirect('eventos', 'insert');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

//  private function validate($nombre, $lugar_latitud, $lugar_longitud, $imagen, $direccion, $fecha_inicial_evento, 
//                $fecha_final_evento, $descripcion, $fecha_inicial_publicacion, $fecha_final_publicacion, $costo,
//                $categoria_id) {
//    $flag = false;
//
//    if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
//      session::getInstance()->setError(i18n::__(10001, null, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if (($password) !== ($password2)) {
//      session::getInstance()->setError(i18n::__(10002, null, 'errors'));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
//    }
//
////    if (($cadena) !== ($usuario )) {
////      session::getInstance()->setError(i18n::__(00001, null, 'errors'));
////      $flag = true;
////      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
////    }
////
//    if ($usuario == "" or $password == "" or $password2 == "") {
//      session::getInstance()->setError(i18n::__(10003, null, 'errors'));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if ($usuario === usuarioTableClass::getNameField(usuarioTableClass::USER)) {
//      session::getInstance()->setError(i18n::__(10004, null, 'errors'));
//      $flag = true;
//      session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if ($flag === true) {
//      request::getInstance()->setMethod('GET');
//      routing::getInstance()->forward('eventos', 'insert');
//    }
//  }
}
