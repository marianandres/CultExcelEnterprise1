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

        $id = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::ID, true));
        $correo = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::CORREO, true));
        $direccion = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true));
        $fax = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::FAX, true));
        $nombre = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true));
        $pagina_web = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true));
        $telefono = request::getInstance()->getPost(organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true));

        $ids = array(
            organizacionTableClass::ID => $id
        );

        $data = array(
            organizacionTableClass::CORREO => $correo,
            organizacionTableClass::DIRECCION => $direccion,
            organizacionTableClass::FAX => $fax,
            organizacionTableClass::NOMBRE => $nombre,
            organizacionTableClass::PAGINA_WEB => $pagina_web,
            organizacionTableClass::TELEFONO => $telefono,
        );

        organizacionTableClass::update($ids, $data);
      }

      routing::getInstance()->redirect('organizacion', 'index');
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
