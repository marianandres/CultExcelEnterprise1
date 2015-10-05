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

                $nombre = trim(request::getInstance()->getPost(tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true)));
                $data = array(
                    tipoDocumentoTableClass::NOMBRE => $nombre,
                );
                tipoDocumentoTableClass::insert($data);
                routing::getInstance()->redirect('tipoDocumento', 'index');
            } else {
                routing::getInstance()->redirect('tipoDocumento', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
