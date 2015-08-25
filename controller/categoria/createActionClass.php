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

        $nombre = request::getInstance()->getPost(categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true));



//        $this->validate($nombre);


        $data = array(
            categoriaTableClass::NOMBRE => $nombre,
        );
        categoriaTableClass::insert($data);
        routing::getInstance()->redirect('categoria', 'index');
      } else {
        routing::getInstance()->redirect('categoria', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

//  private function validate($usuario) {
//    $flag = false;
//
//
//    if (empty($usuario)) {
//
//      session::getInstance()->setError(i18n::__(00006, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
//      session::getInstance()->setError(i18n::__(00004, NULL, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));
//
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    if ($password !== $password2) {
//
//      session::getInstance()->setError(i18n::__(00005, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
//    }
//
//    if (empty($password)) {
//
//      session::getInstance()->setError(i18n::__(00007, NULL, 'errors'));
//      $flag = true;
//
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//
//    if (empty($password2)) {
//
//      session::getInstance()->setError(i18n::__(00009, NULL, 'errors'));
//      $flag = true;
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
//      session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//    }
//
//    $fields = array(
//        usuarioTableClass::USER
//    );
//    $objUsuario = usuarioTableClass::getAll($fields);
//
//    foreach ($objUsuario as $key) {
//      if ($key->user_name === $usuario) {
//        session::getInstance()->setError(i18n::__(00010, NULL, 'errors'));
//        $flag = true;
//        session::getInstance()->setFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
//      }
//    }
//
//
//    if ($flag === true) {
//
//      request::getInstance()->setMethod('GET');
//      routing::getInstance()->forward('categoria', 'insert');
//    }
//  }
}
