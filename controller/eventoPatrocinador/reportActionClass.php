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
          eventoPatrocinadorTableClass::ID,
          eventoPatrocinadorTableClass::EVENTO_ID,
          eventoPatrocinadorTableClass::PATROCINADOR_ID,
          eventoPatrocinadorTableClass::CREATED_AT,
          eventoPatrocinadorTableClass::DELETED_AT,
          eventoPatrocinadorTableClass::UPDATED_AT
      );
      $orderBy = array(
          eventoPatrocinadorTableClass::PATROCINADOR_ID
      );

      $this->objEventoPatrocinador = eventoPatrocinadorTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'eventoPatrocinador', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
