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

        $contenido = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true));
        $estado_pqrs_id = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::ESTADO_PQRS_ID, true));
        $tipo_pqrs_id = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID, true));
        $titulo = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::TITULO, true));
        $usuario_id = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::USUARIO_ID, true));



        $data = array(
            pqrsTableClass::CONTENIDO => $contenido,
            pqrsTableClass::ESTADO_PQRS_ID => $estado_pqrs_id,
            pqrsTableClass::TIPO_PQRS_ID => $tipo_pqrs_id,
            pqrsTableClass::TITULO => $titulo,
            pqrsTableClass::USUARIO_ID => $usuario_id
        );
        pqrsTableClass::insert($data);
        routing::getInstance()->redirect('pqrs', 'index');
      } else {
        routing::getInstance()->redirect('pqrs', 'index');
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
