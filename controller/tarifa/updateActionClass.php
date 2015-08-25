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

        $id = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::ID, true));
        $actived = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::ACTIVED, true));
        $descripcion = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true));
        $valor = request::getInstance()->getPost(tarifaTableClass::getNameField(tarifaTableClass::VALOR, true));

        $ids = array(
            tarifaTableClass::ID => $id
        );

        $data = array(
            tarifaTableClass::DESCRIPCION => $descripcion,
            tarifaTableClass::VALOR => $valor,
            tarifaTableClass::ACTIVED => $actived,
        );



        tarifaTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('tarifa', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
