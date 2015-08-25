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
          tipoPqrsTableClass::ID,
          tipoPqrsTableClass::NOMBRE,
          tipoPqrsTableClass::CREATED_AT,
          tipoPqrsTableClass::DELETED_AT,
          tipoPqrsTableClass::UPDATED_AT
      );
      $orderBy = array(
          tipoPqrsTableClass::NOMBRE
      );

      $this->objTipoPqrs = tipoPqrsTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'tipoPqrs', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
