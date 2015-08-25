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
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      $fields = array(
          datoUsuarioTableClass::ID,
          datoUsuarioTableClass::NOMBRE,
          datoUsuarioTableClass::APELLIDO,
          datoUsuarioTableClass::CORREO,
          datoUsuarioTableClass::GENERO,
          datoUsuarioTableClass::FECHA_NACIMIENTO,
          datoUsuarioTableClass::LOCALIDAD_ID,
          datoUsuarioTableClass::TIPO_DOCUMENTO_ID,
          datoUsuarioTableClass::USUARIO_ID,
          datoUsuarioTableClass::ORGANIZACION_ID
      );
      $this->objDatoUsuario = datoUsuarioTableClass::getAll($fields, true);
      $this->defineView('index', 'datosusuario', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo $exc->getTraceAsString();
    }


    //$this->defineView('ejemplo', 'default', session::getInstance()->getFormatOutput());
  }

}
