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

        $categoria_id = request::getInstance()->getPost(usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::CATEGORIA_ID, true));
        $usuario_id = request::getInstance()->getPost(usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::USUARIO_ID, true));



        $data = array(
            usuarioGustaCategoriaTableClass::CATEGORIA_ID => $categoria_id,
            usuarioGustaCategoriaTableClass::USUARIO_ID => $usuario_id
        );
        usuarioGustaCategoriaTableClass::insert($data);
        routing::getInstance()->redirect('usuarioGustaCategoria', 'index');
      } else {
        routing::getInstance()->redirect('usuarioGustaCategoria', 'index');
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
