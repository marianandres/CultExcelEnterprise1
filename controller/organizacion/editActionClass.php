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
class editActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->hasRequest(organizacionTableClass::ID)) {
                $fields = array(
                    organizacionTableClass::ID,
                    organizacionTableClass::CORREO,
                    organizacionTableClass::DIRECCION,
                    organizacionTableClass::FAX,
                    organizacionTableClass::NOMBRE,
                    organizacionTableClass::PAGINA_WEB,
                    organizacionTableClass::TELEFONO
                );
                $where = array(
                    organizacionTableClass::ID => request::getInstance()->getRequest(organizacionTableClass::ID)
                );
                session::getInstance()->setFlash('organizacion', 'organizacion');
                $this->objOrganizacion = organizacionTableClass::getAll($fields, true, null, null, null, null, $where);
                $this->defineView('edit', 'organizacion', session::getInstance()->getFormatOutput());
            } else {
                routing::getInstance()->redirect('organizacion', 'index');
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
