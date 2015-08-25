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
          recaudoEconomicoTableClass::ID,
          recaudoEconomicoTableClass::EVENTO_ID,
          recaudoEconomicoTableClass::OBSERVACION,
          recaudoEconomicoTableClass::TARIFA_ID,
          recaudoEconomicoTableClass::USUARIO_ID,
          recaudoEconomicoTableClass::VALOR_PARCIAL,
          recaudoEconomicoTableClass::VALOR_TOTAL
      );
      $orderBy = array(
          recaudoEconomicoTableClass::EVENTO_ID
      );
      $this->objRecaudoEconomico = recaudoEconomicoTableClass::getAll($fields, true, $orderBy, 'ASC');
      $this->defineView('index', 'recaudoEconomico', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
