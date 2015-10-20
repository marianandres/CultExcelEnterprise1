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

                //AQUI VAN LAS VALIDACIONES
                if (isset($filter['fechaCreacion1']) and $filter['fechaCreacion1'] !== null and $filter['fechaCreacion1'] !== "") {
                    $where[eventoTableClass::FECHA_INICIAL_EVENTO] = array(
                        $filter['fechaCreacion1'],
                        $filter['fechaCreacion2']
                    );
                }
                if (isset($filter['evento']) and $filter['evento'] !== null and $filter['evento'] !== "") {
                    $where[eventoTableClass::NOMBRE] = $filter['evento'];
                }
                if (isset($filter['categoria']) and $filter['categoria'] !== null and $filter['categoria'] !== "") {
                    $where[eventoTableClass::CATEGORIA_ID] = $filter['categoria'];
                }
                if (isset($filter['costo1']) and $filter['costo1'] !== null and $filter['costo1'] !== "") {
                    $where[eventoTableClass::COSTO] = array(
                        $filter['costo1'],
                        $filter['costo2']
                    );
                }
//        session::getInstance()->setAttribute('usuarioIndexFilters', $where);
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
                eventoTableClass::TWITTER,
                eventoTableClass::GOOGLEPLUS
            );
            $orderBy = array(
                eventoTableClass::FECHA_INICIAL_EVENTO
            );
            $page = 0;
            if (request::getInstance()->hasGet('page')) {
                $this->page = request::getInstance()->getGet('page');
                $page = request::getInstance()->getGet('page') - 1;
                $page = $page * config::getRowGrid();
            }
            $fields2 = array(
                categoriaTableClass::ID,
                categoriaTableClass::NOMBRE
            );
            $orderBy2 = array(
                categoriaTableClass::NOMBRE
            );
            $this->objCategoria = categoriaTableClass::getAll($fields2, true, $orderBy2, 'ASC');
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
