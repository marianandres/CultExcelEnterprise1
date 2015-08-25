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
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class reportActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      $fields = array(
          datoUsuarioTableClass::ID,
          datoUsuarioTableClass::NOMBRE,
          datoUsuarioTableClass::APELLIDO,
          datoUsuarioTableClass::CORREO,
          datoUsuarioTableClass::FECHA_NACIMIENTO,
          datoUsuarioTableClass::GENERO,
          datoUsuarioTableClass::LOCALIDAD_ID,
          datoUsuarioTableClass::ORGANIZACION_ID,
          datoUsuarioTableClass::TIPO_DOCUMENTO_ID,
          datoUsuarioTableClass::USUARIO_ID,
          datoUsuarioTableClass::CREATED_AT,
          datoUsuarioTableClass::DELETED_AT,
          datoUsuarioTableClass::UPDATED_AT,
      );
      $orderBy = array(
          datoUsuarioTableClass::NOMBRE
      );

      $this->objDatoUsuario = datoUsuarioTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'datosusuario', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
