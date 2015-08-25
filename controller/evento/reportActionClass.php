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
class reportActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      $fields = array(
          eventoTableClass::ID,
          eventoTableClass::NOMBRE,
          eventoTableClass::CATEGORIA_ID,
          eventoTableClass::COSTO,
          eventoTableClass::DESCRIPCION,
          eventoTableClass::DIRECCION,
          eventoTableClass::FECHA_FINAL_EVENTO,
          eventoTableClass::FECHA_FINAL_PUBLICACION,
          eventoTableClass::FECHA_INICIAL_EVENTO,
          eventoTableClass::FECHA_INICIAL_PUBLICACION,
          eventoTableClass::IMAGEN,
          eventoTableClass::LUGAR_LATITUD,
          eventoTableClass::LUGAR_LONGITUD,
          eventoTableClass::USUARIO_ID,
          eventoTableClass::CREATED_AT,
          eventoTableClass::DELETED_AT,
          eventoTableClass::UPDATED_AT
      );
      $orderBy = array(
          eventoTableClass::NOMBRE
      );

      $this->objEventos = eventoTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'eventos', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
