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

                $tipoPeticion = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID, true));
                $titulo = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::TITULO, true));
                $contenido = request::getInstance()->getPost(pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true));
                $estadopqrs = 0;
                $userId = session::getInstance()->getUserId();
                $data = array(
                    pqrsTableClass::TIPO_PQRS_ID => $tipoPeticion,
                    pqrsTableClass::TITULO => $titulo,
                    pqrsTableClass::CONTENIDO => $contenido,
                    pqrsTableClass::USUARIO_ID => $userId,
                    pqrsTableClass::ESTADOPQRS => $estadopqrs
                );
                session::getInstance()->setSuccess("Su Peticion Ha Sido Recibida. Le Enviaremos Su Pronta Respuesta!.");
                pqrsTableClass::insert($data);
                routing::getInstance()->redirect('userPQRS', 'index');
            } else {
                routing::getInstance()->redirect('userPQRS', 'insert');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    private function validarFechaMenorActual($date) {
        $today = getdate();
        $validationdate = $date;
        if ($validationdate > $today) {
            return false;
        } else {
            return true;
        }
    }

    private function validarFechaMayorFechaInicio($fStart, $fEnd) {
        $DStart = $fStart;
        $valDEnd = $fEnd;
        if ($valDEnd >= $DStart) {
            return true;
        } else {
            return false;
        }
    }

    private function validatePublishing($startDatePublish) {
        $date = getdate();
        $publishDate = $startDatePublish;
        if ($publishDate < $date) {
            return 1;
        } elseif ($publishDate == $date) {
            return 2;
        } else {
            return 3;
        }
    }

}
