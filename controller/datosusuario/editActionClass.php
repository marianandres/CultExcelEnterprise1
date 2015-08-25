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
class editActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->hasRequest(datoUsuarioTableClass::ID)) {
        $fields = array(
            datoUsuarioTableClass::ID,
            datoUsuarioTableClass::NOMBRE,
            datoUsuarioTableClass::APELLIDO,
            datoUsuarioTableClass::CORREO,
            datoUsuarioTableClass::GENERO,
            datoUsuarioTableClass::FECHA_NACIMIENTO,
            datoUsuarioTableClass::LOCALIDAD_ID,
            datoUsuarioTableClass::TIPO_DOCUMENTO_ID,
            datoUsuarioTableClass::USUARIO_ID
        );
        $where = array(
            datoUsuarioTableClass::ID => request::getInstance()->getRequest(datoUsuarioTableClass::ID)
        );
        $this->objDatoUsuario = datoUsuarioTableClass::getAll($fields, true, null, null, null, null, $where);
        $this->defineView('edit', 'datosusuario', session::getInstance()->getFormatOutput());
      } else {
        routing::getInstance()->redirect('datosusuario', 'index');
      }
//      if (request::getInstance()->isMethod('POST')) {
//
//        $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USUARIO, true));
//        $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
//
//        if (strlen($usuario) > usuarioTableClass::USUARIO_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => usuarioTableClass::USUARIO_LENGTH)), 00001);
//        }
//
//        $data = array(
//            usuarioTableClass::USUARIO => $usuario,
//            usuarioTableClass::PASSWORD => md5($password)
//        );
//        usuarioTableClass::insert($data);
//        routing::getInstance()->redirect('default', 'index');
//      } else {
//        routing::getInstance()->redirect('default', 'index');
//      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
