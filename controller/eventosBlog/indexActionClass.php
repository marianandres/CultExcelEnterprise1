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
            $where = null;
            if (request::getInstance()->hasPost('filter')) {
                $filter = request::getInstance()->getPost('filter');

                //Validaciones
                if (isset($filter['evento']) and $filter['evento'] !== null and $filter['evento'] !== '') {
                    $where[eventoTableClass::NOMBRE] = $filter['evento'];
                }

                session::getInstance()->setAttribute('eventoIndexFilter', $where);
            } else if (session::getInstance()->hasAttribute('eventoIndexFilter')) {
                $where = session::getInstance()->getAttribute('eventoIndexFilter');
            }
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
                eventoTableClass::CREATED_AT,
                eventoTableClass::FACEBOOK,
                eventoTableClass::TWITTER
            );
            $orderBy = array(
                eventoTableClass::NOMBRE
            );
            $page = 0;
            if (request::getInstance()->hasGet('page')) {
                $this->page = request::getInstance()->getGet('page');
                $page = request::getInstance()->getGet('page') - 1;
                $page = $page * config::getRowGrid();
            }
            session::getInstance()->setFlash('eventosBlog', true);
            $this->cntPages = eventoTableClass::getTotalPages(config::getRowGrid(), $where);
            $this->objEventos = eventoTableClass::getAll($fields, true, $orderBy, 'ASC', config::getRowGrid(), $page, $where);
            $this->defineView('index', 'eventosBlog', session::getInstance()->getFormatOutput());
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
