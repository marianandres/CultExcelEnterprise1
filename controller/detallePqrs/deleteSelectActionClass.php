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
class deleteSelectActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $idsToDelete = request::getInstance()->getPost('chk');

        foreach ($idsToDelete as $id) {
          $ids = array(
              detallePqrsTableClass::ID => $id
          );
          detallePqrsTableClass::delete($ids, true);
        }

        routing::getInstance()->redirect('detallePqrs', 'index');
      } else {
        routing::getInstance()->redirect('detallePqrs', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
