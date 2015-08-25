<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use mvc\controller\controllerClass\credencial;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class editActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->hasRequest(usuarioCredencialTableClass::ID)) {
        $fields = array(
            usuarioCredencialTableClass::ID,
            usuarioCredencialTableClass::CREDENCIAL_ID,
            usuarioCredencialTableClass::USUARIO_ID
        );





        $where = array(
            usuarioCredencialTableClass::ID => request::getInstance()->getRequest(usuarioCredencialTableClass::ID)
        );

        $fields1 = array(
            credencialTableClass::ID,
            credencialTableClass::NOMBRE,
        );
        $where1 = array(
            credencialTableClass::ID => request::getInstance()->getRequest(credencialTableClass::ID)
        );






// en este caso, el getAll No me sirve
        // debes traer es el nombre del usuario por ejemplo y de la credencial
        // es decir, construir un SELECT ajustado a ese punto ¿me comprnedes?
        //solamente el atributo o construir un metodo nuevo?
        // construir un nuevo método ,en que clase?,
        // ya te hago un ejemplo
        // $this->objUsuarioCredencial = usuarioCredencialTableClass::getAll($fields, FALSE, null, null, null, null, $where);


        $this->objUsuarioCredencial = usuarioCredencialTableClass::findById(request::getInstance()->getRequest(usuarioCredencialTableClass::ID));
        $this->objCredencial1 = credencialTableClass::getAll($fields1, true, null, null, null, null, null);
        $this->defineView('edit', 'usuarioCredencial', session::getInstance()->getFormatOutput());
      } else {
        routing::getInstance()->redirect('usuarioCredencial', 'index');
      }
//      if (request::getInstance()->isMethod('POST')) {
//
//        $usuario = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USUARIO, true));
//        $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
//
//        if (strlen($usuario) > usuarioTableClass::USUARIO_LENGTH) {
//          throw new PDOException(i18n::__(00001, null, 'errors', array(':longitud' => usuarioTableClass::USUARIO_LENGTH)), 00001);
//        }
//
//        $data = array(
//            usuarioTableClass::USUARIO => $usuario,
//            usuarioTableClass::PASSWORD => md5($password)
//        );
//        usuarioTableClass::insert($data);
//        routing::getInstance()->redirect('default', 'index');
//      } else {
//        routing::getInstance()->redirect('default', 'index');
//      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
