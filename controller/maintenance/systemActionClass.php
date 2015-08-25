<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of maintenanceActionClass
 *
 * @author Andres Felipe Alvarez <andy_93421@hotmail.com>
 */
class systemActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      # maintenance system mode 

      function maintain($mode = FALSE) { # $mode either equals TRUE or FALSE 
        if ($mode) {
          # if we are in maintenance, require all pages to go to the maintenance page 
          if (filename($_SERVER['SCRIPT_FILENAME']) != 'maintenance.php') {
            # Replace the location to the loacation of your maintenance page
            routing::getInstance()->redirect('maintenance', 'system');
          }
        } else {
          # if we are not in maintenance, don't allow link to maintenance page 
          if (filename($_SERVER['SCRIPT_FILENAME']) == 'maintenance.php') {
            # Replace the location to the loacation to my homepage 
            $fields = array(
                usuarioTableClass::ID,
                usuarioTableClass::USER,
                usuarioTableClass::CREATED_AT,
                usuarioTableClass::LAST_LOGIN_AT
            );
            $orderBy = array(
                usuarioTableClass::USER
            );
            $this->objUsuarios = usuarioTableClass::getAll($fields, true, $orderBy, 'ASC');
            $this->defineView('system', 'maintenance', session::getInstance()->getFormatOutput());
          }
        }
      }

    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
