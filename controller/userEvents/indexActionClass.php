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

                    //Validaciones
                    if (isset($filter['evento']) and $filter['evento'] !== null and $filter['evento'] !== '') {
                        $where[eventoTableClass::NOMBRE] = $filter['evento'];
                    }

                    session::getInstance()->setAttribute('eventoIndexFilter', $where);
                } else if (session::getInstance()->hasAttribute('eventoIndexFilter')) {
                    $where = session::getInstance()->getAttribute('eventoIndexFilter');
                }
                $page = 0;
                if (request::getInstance()->hasGet('page')) {
                    $this->page = request::getInstance()->getGet('page');
                    $page = request::getInstance()->getGet('page') - 1;
                    $page = $page * config::getRowGrid();
                }
                $id = session::getInstance()->getUserId();
                session::getInstance()->setFlash('userEvents', true);
                $this->cntPages = eventoTableClass::getTotalPagesUserEvents(config::getRowGrid(), $where);
                $this->objUserEvents = eventoTableClass::getUserEvents($id, config::getRowGrid(), $page);
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
