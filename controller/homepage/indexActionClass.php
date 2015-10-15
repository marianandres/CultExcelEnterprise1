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
//      if (session::getInstance()->hasCredential('admin')) {
//        routing::getInstance()->redirect('admin', 'index');
//      } elseif (session::getInstance()->hasCredential('usuario')) {
//        routing::getInstance()->redirect('homepage', 'index');
//      } else {
            $fields = array(
                usuarioTableClass::ID,
                usuarioTableClass::USER,
                usuarioTableClass::CREATED_AT
            );
            $orderBy = array(
                usuarioTableClass::USER
            );
            

            $this->objUsuarios = usuarioTableClass::getAll($fields, true, $orderBy, 'ASC');
            session::getInstance()->setFlash('homepage', true);
            $this->defineView('index', 'homepage', session::getInstance()->getFormatOutput());
//      }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    static public function contador() {
        $archivo = "./contador.txt";
        $contador = 0;

        $fp = fopen($archivo, "r");
        $contador = fgets($fp, 26);
        fclose($fp);

        ++$contador;

        $fp = fopen($archivo, "w+");
        fwrite($fp, $contador, 26);
        fclose($fp);

        echo "Visitada $contador veces";
    }

}
