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
        if (isset($filter['usuario']) and $filter['usuario'] !== null and $filter['usuario'] !== "") {
          $where[usuarioTableClass::USER] = $filter['usuario'];
        }
        if (isset($filter['fechaCreacion1']) and $filter['fechaCreacion1'] !== null and $filter['fechaCreacion1'] !== "") {
          $where[usuarioTableClass::CREATED_AT] = array(
              date(config::getFormatTimestamp(), strtotime($filter['fechaCreacion1'] . ' 00:00:00')),
              date(config::getFormatTimestamp(), strtotime($filter['fechaCreacion2'] . ' 23:59:59'))
          );
        }

//        session::getInstance()->setAttribute('usuarioIndexFilters', $where);
      }// else if (session::getInstance()->hasAttribute('usuarioIndexFilters')) {
//        $where = session::getInstance()->getAttribute('usuarioIndexFilters');
//      }
//      print_r(request::getInstance()->getPost('filter'));
//      exit();

      $fields = array(
          usuarioTableClass::ID,
          usuarioTableClass::USER,
          usuarioTableClass::CREATED_AT
      );
      $orderBy = array(
          usuarioTableClass::USER
      );
      $page = 0;
      if (request::getInstance()->hasGet('page')) {
//        $page = request::getInstance()->getGet('page') - 1;
        $this->page = request::getInstance()->getGet('page');
        $page = $page * config::getRowGrid();
      }

      $this->cntPages = usuarioTableClass::getTotalPages(config::getRowGrid(), $where);
      $this->objUsuarios = usuarioTableClass::getAll($fields, true, $orderBy, 'ASC', null, null, $where);
      $this->defineView('index', 'usuario', session::getInstance()->getFormatOutput());
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
