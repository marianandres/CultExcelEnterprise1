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
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class createActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {
                // email de destino
                $email = "andy_93421@hotmail.com";

                // asunto del email
                $subject = $_POST['asunto'];

                // Cuerpo del mensaje
                $mensaje = "---------------------------------- \n";
                $mensaje.= "            Contacto               \n";
                $mensaje.= "---------------------------------- \n";
                $mensaje.= "NOMBRE:   " . $_POST['name'] . "\n";
                $mensaje.= "EMAIL:    " . $_POST['email'] . "\n";
                $mensaje.= "FECHA:    " . date("d-m-Y") . "\n";
                $mensaje.= "HORA:    " . date("H-i-s") . "\n";
                $mensaje.= "---------------------------------- \n\n";
                $mensaje.= $_POST['mensaje'] . "\n\n";
                $mensaje.= "---------------------------------- \n";
                $mensaje.= "Enviado desde Cult Excel Enterprise \n";

                // headers del email
                $headers = "From: " . $_POST['email'] . "\r\n";

                // Enviamos el mensaje 
                if (mail($email, $subject, $mensaje, $headers)) {
                    echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'index.php';
</script>";
                } else {
                    echo "Error de envío.";
                }
                routing::getInstance()->redirect('contact', 'index');
            } else {
                routing::getInstance()->redirect('contact', 'index');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
