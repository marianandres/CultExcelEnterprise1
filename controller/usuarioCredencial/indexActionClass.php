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
          usuarioCredencialTableClass::ID,
          usuarioCredencialTableClass::USUARIO_ID,
          usuarioCredencialTableClass::CREDENCIAL_ID,
          usuarioCredencialTableClass::CREATED_AT
      );
      $orderBy = array(
          usuarioCredencialTableClass::ID
      );
      if (request::getInstance()->hasGet(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true))) {
        $usuarioId = request::getInstance()->getGet(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true));
        $where = array(
            usuarioCredencialTableClass::USUARIO_ID => $usuarioId
        );
      }



      $this->objUsuarioCredencial = usuarioCredencialTableClass::getAll($fields, false, $orderBy, 'ASC', null, null, $where);
      $this->defineView('index', 'usuarioCredencial', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
