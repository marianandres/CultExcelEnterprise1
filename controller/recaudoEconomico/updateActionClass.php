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
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::ID, true));
        $evento_id = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::EVENTO_ID, true));
        $observacion = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, true));
        $tarifa_id = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, true));
        $usuario_id = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, true));
        $valor_parcial = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::VALOR_PARCIAL, true));
        $valor_total = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::VALOR_TOTAL, true));

        $ids = array(
            recaudoEconomicoTableClass::ID => $id
        );

        $data = array(
            recaudoEconomicoTableClass::EVENTO_ID => $evento_id,
            recaudoEconomicoTableClass::OBSERVACION => $observacion,
            recaudoEconomicoTableClass::TARIFA_ID => $tarifa_id,
            recaudoEconomicoTableClass::USUARIO_ID => $usuario_id,
            recaudoEconomicoTableClass::VALOR_PARCIAL => $valor_parcial,
            recaudoEconomicoTableClass::VALOR_TOTAL => $valor_total,
        );

        recaudoEconomicoTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('recaudoEconomico', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
