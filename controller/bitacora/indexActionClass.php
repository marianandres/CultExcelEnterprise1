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
 * @author Mariana Lopez, Andres Felipe Alvarez 
 */
class indexActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      $fields = array(
          bitacoraTableClass::ID,
          bitacoraTableClass::FECHA,
          bitacoraTableClass::USUARIO_ID,
          bitacoraTableClass::ACCION,
          bitacoraTableClass::TABLA,
          bitacoraTableClass::REGISTRO,
          bitacoraTableClass::OBSERVACION
      );
      session::getInstance()->setFlash('bitacora', 'bitacora');
      $this->objBitacora = bitacoraTableClass::getAll($fields, FALSE);
      $this->defineView('index', 'bitacora', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo $exc->getTraceAsString();
    }
  }
}
