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
            if (session::getInstance()->isUserAuthenticated()) {
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
                $id = session::getInstance()->getUserId();
                session::getInstance()->setFlash('userEvents', true);
                $this->cntPages = eventoTableClass::getTotalPagesUserEvents(config::getRowGrid(), $where);
                $this->objUserEvents = eventoTableClass::getUserEvents($id, config::getRowGrid(), $page, $where);
                $this->defineView('index', 'userEvents', session::getInstance()->getFormatOutput());
            } else {
                routing::getInstance()->redirect('shfSecurity', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
