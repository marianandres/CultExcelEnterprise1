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
class indexActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            $fields = array(
                eventoTableClass::ID,
                eventoTableClass::IMAGEN,
                eventoTableClass::NOMBRE,
                eventoTableClass::DESCRIPCION,
                eventoTableClass::DIRECCION,
                eventoTableClass::FECHA_INICIAL_EVENTO,
                eventoTableClass::FECHA_FINAL_EVENTO,
                eventoTableClass::FECHA_INICIAL_PUBLICACION,
                eventoTableClass::FECHA_FINAL_PUBLICACION,
                eventoTableClass::COSTO,
                eventoTableClass::CATEGORIA_ID,
                eventoTableClass::CREATED_AT
            );
            $orderBy = array(
                eventoTableClass::NOMBRE
            );
            session::getInstance()->setFlash('userEvents', true);
            $this->objEventos = eventoTableClass::getAll($fields, true, $orderBy, 'ASC');
            $this->defineView('index', 'userEvents', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
