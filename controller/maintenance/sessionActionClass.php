<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of maintenanceActionClass
 *
 * @author Andres Felipe Alvarez <andy_93421@hotmail.com>
 */
class sessionActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {

      $fields = array(
          usuarioTableClass::ID,
          usuarioTableClass::USER,
          usuarioTableClass::CREATED_AT,
          usuarioTableClass::LAST_LOGIN_AT
      );
      $orderBy = array(
          usuarioTableClass::USER
      );
      $this->objUsuarios = usuarioTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('session', 'maintenance', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
