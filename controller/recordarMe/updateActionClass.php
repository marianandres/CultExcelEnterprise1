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
class updateActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $id = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarMeTableClass::ID, true));
        $ip_address = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarMeTableClass::IP_ADDRESS, true));
        $usuario_id = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarMeTableClass::USUARIO_ID, true));
        $has_cookie = request::getInstance()->getPost(recordarMeTableClass::getNameField(recordarMeTableClass::HASH_COOKIE, true));

        $ids = array(
            recordarMeTableClass::ID => $id
        );

        $data = array(
            recordarMeTableClass::ID => $id,
            recordarMeTableClass::USUARIO_ID => $usuario_id,
            recordarMeTableClass::IP_ADDRESS => $ip_address,
            recordarMeTableClass::HASH_COOKIE => $has_cookie
        );

        recordarMeTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('recordarMe', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
