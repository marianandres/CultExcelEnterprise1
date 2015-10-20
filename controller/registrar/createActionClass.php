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

                $usuario = trim(request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true)));
                $password = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1');
                $password2 = request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2');
                $correo = trim(request::getInstance()->getPost(datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true)));

                $this->validate($usuario, $password, $password2);
                $verifyExistingUser = usuarioTableClass::getVerifyExistingUser($usuario);
                if ($verifyExistingUser == $usuario) {
                    session::getInstance()->setError("El NickName De Usuario Ingresado Ya Existe E La Base De Datos!. ");
                    routing::getInstance()->redirect('registrar', 'insert');
                } else {
                    $key = $this->generarCodigo(8);

                    $data = array(
                        usuarioTableClass::USER => $usuario,
                        usuarioTableClass::PASSWORD => md5($password),
                        usuarioTableClass::CODIGOKEY => $key
                    );
                    usuarioTableClass::insert($data);

                    $user = usuarioTableClass::getIdNewUser($usuario);
                    $credential = 'usuario';
                    $credencial = credencialTableClass::getIdCredencial($credential);

                    $data1 = array(
                        usuarioCredencialTableClass::USUARIO_ID => $user,
                        usuarioCredencialTableClass::CREDENCIAL_ID => $credencial
                    );
                    $data2 = array(
                        datoUsuarioTableClass::USUARIO_ID => $user,
                        datoUsuarioTableClass::CORREO => $correo
                    );
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
                    $mensaje.= "Hola $usuario, Bienvenido al Portal Web  tu te as registrado en "
                            . " Cult excel Enterprise. \n";
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
                    usuarioCredencialTableClass::insert($data1);
                    datoUsuarioTableClass::insert($data2);
                    session::getInstance()->setSuccess("Bienvenido! Te has registrado en El Portal Cult Excel Enterprise. Porfavor Ingrese a Su Correo electronico Para Verificar su Cuenta!");
                    routing::getInstance()->redirect('shfSecurity', 'index');
                }
            } else {
                routing::getInstance()->redirect('registrar', 'insert');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    private function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++)
            $key .= $pattern{mt_rand(0, $max)};
        return $key;
    }

    private function validate($usuario, $password, $password2) {
        $flag = false;

        if (strlen($usuario) > usuarioTableClass::USER_LENGTH) {
            session::getInstance()->setError(i18n::__(10001, null, 'errors', array('%user%' => $usuario, '%caracteres%' => usuarioTableClass::USER_LENGTH)));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

        if (($password) !== ($password2)) {
            session::getInstance()->setError(i18n::__(10002, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true), true);
        }
        if ($usuario == "" or $password == "" or $password2 == "") {
            session::getInstance()->setError(i18n::__(10003, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

        if ($usuario === usuarioTableClass::getNameField(usuarioTableClass::USER)) {
            session::getInstance()->setError(i18n::__(10004, null, 'errors'));
            $flag = true;
            session::getInstance()->getFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true), true);
        }

        if ($flag === true) {
            request::getInstance()->setMethod('GET');
            routing::getInstance()->forward('registrar', 'insert');
        }
    }

}
