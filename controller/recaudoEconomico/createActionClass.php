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
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $eventoId = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::EVENTO_ID, true));
        $observacion = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::OBSERVACION, true));
        $tarifaId = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::TARIFA_ID, true));
        $usuario_id = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::USUARIO_ID, true));
        $valorParcial = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::VALOR_PARCIAL, true));
        $valorTotal = request::getInstance()->getPost(recaudoEconomicoTableClass::getNameField(recaudoEconomicoTableClass::VALOR_TOTAL, true));



        $data = array(
            recaudoEconomicoTableClass::EVENTO_ID => $eventoId,
            recaudoEconomicoTableClass::OBSERVACION => $observacion,
            recaudoEconomicoTableClass::TARIFA_ID => $tarifaId,
            recaudoEconomicoTableClass::USUARIO_ID => $usuario_id,
            recaudoEconomicoTableClass::VALOR_PARCIAL => $valorParcial,
            recaudoEconomicoTableClass::VALOR_TOTAL => $valorTotal
        );
        recaudoEconomicoTableClass::insert($data);
        routing::getInstance()->redirect('recaudoEconomico', 'index');
      } else {
        routing::getInstance()->redirect('recaudoEconomico', 'index');
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
