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

        $eventoId = request::getInstance()->getPost(eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::EVENTO_ID, true));
        $patrocinadorId = request::getInstance()->getPost(eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, true));



        $data = array(
            eventoPatrocinadorTableClass::EVENTO_ID => $eventoId,
            eventoPatrocinadorTableClass::PATROCINADOR_ID => $patrocinadorId
        );
        eventoPatrocinadorTableClass::insert($data);
        routing::getInstance()->redirect('eventoPatrocinador', 'index');
      } else {
        routing::getInstance()->redirect('eventoPatrocinador', 'index');
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
