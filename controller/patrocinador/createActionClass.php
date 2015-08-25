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

        $correo = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true));
        $direccion = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true));
        $nombre = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true));
        $telefono = request::getInstance()->getPost(patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true));



        $data = array(
            patrocinadorTableClass::CORREO => $correo,
            patrocinadorTableClass::DIRECCION => $direccion,
            patrocinadorTableClass::NOMBRE => $nombre,
            patrocinadorTableClass::TELEFONO => $telefono
        );
        patrocinadorTableClass::insert($data);
        routing::getInstance()->redirect('patrocinador', 'index');
      } else {
        routing::getInstance()->redirect('patrocinador', 'index');
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
