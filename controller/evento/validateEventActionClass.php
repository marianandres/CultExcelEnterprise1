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
class validateEventActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {
                $id = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::ID, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $estadopublicacion = 1;
                $passwordMd5 = md5($password);
                $userId = session::getInstance()->getUserId();
                $validatePass = usuarioTableClass::getVerifyUserPass($userId);
                if ($validatePass == $passwordMd5) {
                    $ids = array(
                        eventoTableClass::ID => $id
                    );
                    $data = array(
                        eventoTableClass::ESTADOPUBLICACION => $estadopublicacion,
                    );
                    eventoTableClass::update($ids, $data);
                    routing::getInstance()->redirect('evento', 'index');
                } else {
                    session::getInstance()->setError("La Contraseña De Administrador Ingresada No Es Correcta. Verifique!");
                    routing::getInstance()->redirect('evento', 'index');
                }
            } else {
                routing::getInstance()->redirect('evento', 'index');
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
