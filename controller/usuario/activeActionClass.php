<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;
use hook\log\logHookClass as log;

/**
 * Description of ejemploClass
 *
 * @author Mariana Lopez <lopezmariana1990@gmail.com>
 */
class activeActionClass extends controllerClass implements controllerActionInterface {

    public function execute() {
        try {
            if (request::getInstance()->isMethod('POST')) {

                $id = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::ID, true));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true));
                $estadokey = 1;
                $password1 = md5($password);
                $ids = array(
                    usuarioTableClass::ID => $id
                );
                $data = array(
                    usuarioTableClass::ESTADOKEY => $estadokey
                );
                $verificacion = usuarioTableClass::getVerifyUserPass($id);

                if ($verificacion == $password1) {
                    // email de destino
                    $email = $correo;
                    // asunto del email
                    $subject = "Activa tu cuenta Cult Excel.";
                    // Cuerpo del mensaje
                    $mensaje = "---------------------------------- \n";
                    $mensaje.= " Sistema De Registro De Usuarios   \n";
                    $mensaje.= "---------------------------------- \n";
                    $mensaje.= "NOMBRE:   " . $usuario . "\n";
                    $mensaje.= "EMAIL:    " . $correo . "\n";
                    $mensaje.= "FECHA:    " . date("d-m-Y") . "\n";
                    $mensaje.= "HORA:    " . date("H-i-s") . "\n";
                    $mensaje.= "---------------------------------- \n\n";
                    $mensaje.= "Hola $usuario, Bienvenido tu te as registrado en "
                            . "http://$web y para activar tu cuenta necesitas meterte en esta url. "
                            . "http://$web/validacion.php?email=$correo&key=$key \n";
                    $mensaje.= "---------------------------------- \n";
                    $mensaje.= "Enviado desde Cult Excel Enterprise \n";

                    // headers del email
                    $headers = "From: andy_93421@hotmail.com \r\n";

                    // Enviamos el mensaje 
                    if (mail($email, $subject, $mensaje, $headers)) {
                        echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'index.php';
</script>";
                    } else {
                        echo "Error de envío.";
                    }
                    usuarioTableClass::update($ids, $data);
                    session::getInstance()->setSuccess("La Cuenta A Sido Activada!");
                    log::register('Actualizar', usuarioTableClass::getNameTable(), null, session::getInstance()->getUserId());
                } else {
                    session::getInstance()->setError("La Constraseña Del Administrador No Es Correcta!. Verifique");
                }
            }

            routing::getInstance()->redirect('usuario', 'index');
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

}
