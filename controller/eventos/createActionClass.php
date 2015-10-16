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

                $nombre = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::NOMBRE, true));
                $facebook = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FACEBOOK, true));
                $twitter = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::TWITTER, true));
                $googleplus = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::GOOGLEPLUS, true));
                $hora = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::STARTTIME, true));
                $lugar_latitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true));
                $lugar_longitud = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true));
                $file = request::getInstance()->getFile(eventoTableClass::getNameField(eventoTableClass::IMAGEN, true));
                $direccion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DIRECCION, true));
                $fecha_inicial_evento = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true));
                $fecha_final_evento = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true));
                $descripcion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true));
                $fecha_inicial_publicacion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true));
                $fecha_final_publicacion = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true));
                $costo = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::COSTO, true));
                $categoria_id = request::getInstance()->getPost(eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true));

                $usuario_id = session::getInstance()->getUserId();
                $validateStateEvent = $this->validatePublishing($fecha_inicial_publicacion);
                if ($validateStateEvent == 1) {
                    $estadopublicacion = 1;// fecha menor a la de publicacion no se publica
                } elseif ($validateStateEvent == 2) {
                    $estadopublicacion = 2;// en la fecha de publicacion se realiza la publicacion
                } else {
                    $estadopublicacion = 3;//fecha mayor a la de publicacion se publica
                }

                $validacionDate = $this->validarFechaMenorActual($fecha_inicial_evento);
                if ($validacionDate == false) {
                    session::getInstance()->setError("La Fecha De Inicio Del Evento Es Pasada!. Por Favor Ingrese una Fecha Futura.");
                    routing::getInstance()->redirect('eventos', 'insert');
                } else {
                    $validacionDate2 = $this->validarFechaMenorActual($fecha_final_evento);
                    if ($validacionDate2 == false) {
                        session::getInstance()->setError("La Fecha Final Del Evento Es Pasada a la fecha Actual!. Por Favor Ingrese una Fecha Futura de finalizacion Del Evento.");
                        routing::getInstance()->redirect('eventos', 'insert');
                    } else {
                        $validacionEndDate = $this->validarFechaMayorFechaInicio($fecha_inicial_evento, $fecha_final_evento);
                        if ($validacionEndDate == true) {
                            $validacionFechaInicioPub = $this->validarFechaMenorActual($fecha_inicial_publicacion);
                            if ($validacionFechaInicioPub == false) {
                                session::getInstance()->setError("La Fecha De Inicio De Publicacion Del Evento Es Pasada a La Fecha Actual, Por Favor Verifique!.");
                                routing::getInstance()->redirect('eventos', 'insert');
                            } else {
                                $valFechaFinPub = $this->validarFechaMenorActual($fecha_final_publicacion);
                                if ($validacionFechaInicioPub == false) {
                                    session::getInstance()->setError("La Fecha De Finalizacion De Publicacion Del Evento Es Pasada a La Fecha Actual, Por Favor Verifique!.");
                                    routing::getInstance()->redirect('eventos', 'insert');
                                } else {
                                    $validacionEndDate = $this->validarFechaMayorFechaInicio($fecha_inicial_evento, $fecha_final_evento);
                                    if ($validacionEndDate == true) {
                                        $ext = $file['name'];
                                        $nameFile = md5($usuario_id) . '.' . $ext;
                                        move_uploaded_file($file['tmp_name'], config::getPathAbsolute() . 'web/upload/' . $nameFile);
                                        $data = array(
                                            eventoTableClass::IMAGEN => $nameFile,
                                            eventoTableClass::CATEGORIA_ID => $categoria_id,
                                            eventoTableClass::COSTO => $costo,
                                            eventoTableClass::DESCRIPCION => $descripcion,
                                            eventoTableClass::DIRECCION => $direccion,
                                            eventoTableClass::FECHA_FINAL_EVENTO => $fecha_final_evento,
                                            eventoTableClass::FECHA_INICIAL_EVENTO => $fecha_inicial_evento,
                                            eventoTableClass::LUGAR_LATITUD => $lugar_latitud,
                                            eventoTableClass::LUGAR_LONGITUD => $lugar_longitud,
                                            eventoTableClass::FECHA_INICIAL_PUBLICACION => $fecha_inicial_publicacion,
                                            eventoTableClass::FECHA_FINAL_PUBLICACION => $fecha_final_publicacion,
                                            eventoTableClass::GOOGLEPLUS => $googleplus,
                                            eventoTableClass::NOMBRE => $nombre,
                                            eventoTableClass::STARTTIME => $hora,
                                            eventoTableClass::USUARIO_ID => $usuario_id,
                                            eventoTableClass::FACEBOOK => $facebook,
                                            eventoTableClass::TWITTER => $twitter,
                                            eventoTableClass::ESTADOPUBLICACION => $estadopublicacion,
                                            '__sequence' => 'evento_id_seq'
                                        );
//                            session::getInstance()->setSuccess($nameFile);
                                        eventoTableClass::insert($data);
                                        routing::getInstance()->redirect('eventosBlog', 'index');
                                    } else {
                                        session::getInstance()->setError("La Fecha Final De Publicacion Del Evento No Debe Ser Menor a La Fecha De Inicio De Publicacion del Evento!.");
                                        routing::getInstance()->redirect('eventos', 'insert');
                                    }
                                }
                            }
                        } else {
                            session::getInstance()->setError("La Fecha Final Del Evento No Debe Ser Menor a La Fecha De Inicio del Evento!.");
                            routing::getInstance()->redirect('eventos', 'insert');
                        }
                    }
                }
            } else {
                routing::getInstance()->redirect('eventos', 'insert');
            }
        } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
    }

    private function validarFechaMenorActual($date) {
        $today = getdate();
        $validationdate = $date;
        if ($validationdate > $today) {
            return false;
        } else {
            return true;
        }
    }

    private function validarFechaMayorFechaInicio($fStart, $fEnd) {
        $DStart = $fStart;
        $valDEnd = $fEnd;
        if ($valDEnd >= $DStart) {
            return true;
        } else {
            return false;
        }
    }

    private function validatePublishing($startDatePublish) {
        $date = getdate();
        $publishDate = $startDatePublish;
        if ($publishDate < $date) {
            return 1;
        } elseif ($publishDate == $date) {
            return 2;
        } else {
            return 3;
        }
    }

}
