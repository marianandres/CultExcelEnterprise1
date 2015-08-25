<?php

use mvc\model\modelClass as model;
use mvc\config\configClass as config;

/**
 * Description of credencialTableClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class credencialTableClass extends credencialBaseTableClass {

  public static function getNameCredencial($id) {
    try {
      $sql = 'SELECT ' . credencialTableClass::getNameField(credencialTableClass::NOMBRE) . ' AS nombre FROM  ' . credencialTableClass::getNameTable() . ' WHERE ' . credencialTableClass::DELETED_AT . '  IS NULL  AND ' . credencialTableClass::ID . '  = :id';
      $params = array(
          ':id' => $id,
      );
      $answer = model::getInstance()->prepare($sql);
      $answer->execute($params);
      $answer = $answer->fetchAll(PDO::FETCH_OBJ);
      return $answer[0]->nombre;
    } catch (PDOException $exc) {
      throw $exc;
    }
  }

  public static function getIdCredencial($credential) {
    try {
      $sql = 'SELECT ' . credencialTableClass::ID
              . ' FROM  ' . credencialTableClass::getNameTable()
              . ' WHERE ' . credencialTableClass::DELETED_AT
              . '  IS NULL  AND ' . credencialTableClass::NOMBRE . '  = :nombre';
      $params = array(
          ':nombre' => $credential,
      );
      $answer = model::getInstance()->prepare($sql);
      $answer->execute($params);
      $answer = $answer->fetchAll(PDO::FETCH_OBJ);
      return $answer[0]->id;
    } catch (PDOException $exc) {
      throw $exc;
    }
  }

}
