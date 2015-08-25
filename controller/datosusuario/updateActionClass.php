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
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ID, true));
        $nombre = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true));
        $apellido = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true));
        $correo = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true));
        $genero = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true));
        $fecha_nac = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true));
        $localidad = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true));
        $tid = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true));
        $userid = request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true));
        if ($password == $confipassword) {
          throw new PDOException(i18n::__(00004, null, 'errors', array(':Coincidencia' => $password)), 00004);
        }

        $ids = array(
            datoUsuarioTableClass::ID => $id
        );

        $data = array(
            datoUsuarioTableClass::NOMBRE => $nombre,
            datoUsuarioTableClass::APELLIDO => $apellido,
            datoUsuarioTableClass::CORREO => $correo,
            datoUsuarioTableClass::GENERO => $genero,
            datoUsuarioTableClass::FECHA_NACIMIENTO => $fecha_nac,
            datoUsuarioTableClass::LOCALIDAD_ID => $localidad,
            datoUsuarioTableClass::TIPO_DOCUMENTO_ID => $tid,
            datoUsuarioTableClass::USUARIO_ID => $userid
        );

        datoUsuarioTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('datosusuario', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
