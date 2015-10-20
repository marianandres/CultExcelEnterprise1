<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use mvc\model\modelClass as model;
use mvc\config\configClass as config;

/**
 * Description of pqrsfTableClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class pqrsTableClass extends pqrsTableBaseClass {

    public static function getUserPqrs($id, $limit, $offset) {

        try {
            $sql = 'SELECT ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ID . ' ,'
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TITULO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::CONTENIDO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ESTADOPQRS . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TIPO_PQRS_ID . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::USUARIO_ID .
                    ' FROM ' . pqrsTableClass::getNameTable() .
                    ' WHERE ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::USUARIO_ID . ' = ' . $id;

            if ($limit !== null and $offset === null) {
                $sql = $sql . ' LIMIT ' . $limit;
            }

            if ($limit !== null and $offset !== null) {
                $sql = $sql . ' LIMIT ' . $limit . ' OFFSET ' . $offset;
            }

            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $exc) {
            throw $exc;
        }
    }

    public static function getPqrsSent($id, $limit, $offset) {

        try {
            $sql = 'SELECT ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ID . ' ,'
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TITULO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::CONTENIDO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ESTADOPQRS . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TIPO_PQRS_ID . ' , '
                    . detallePqrsTableClass::getNameTable() . '.' . detallePqrsTableClass::RESPUESTA . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::USUARIO_ID .
                    ' FROM ' . pqrsTableClass::getNameTable() . ',' . detallePqrsTableClass::getNameTable() .
                    ' WHERE ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ID . ' = ' .
                    detallePqrsTableClass::getNameTable() . '.' . detallePqrsTableClass::PQRS_ID .
                    ' AND ' . pqrsTableClass::ESTADOPQRS . ' = ' . $id;

            if ($limit !== null and $offset === null) {
                $sql = $sql . ' LIMIT ' . $limit;
            }

            if ($limit !== null and $offset !== null) {
                $sql = $sql . ' LIMIT ' . $limit . ' OFFSET ' . $offset;
            }

            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $exc) {
            throw $exc;
        }
    }

    public static function getPqrsBuzon($id, $limit, $offset) {

        try {
            $sql = 'SELECT ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ID . ' ,'
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TITULO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::CONTENIDO . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ESTADOPQRS . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::TIPO_PQRS_ID . ' , '
                    . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::USUARIO_ID .
                    ' FROM ' . pqrsTableClass::getNameTable() .
                    ' WHERE ' . pqrsTableClass::getNameTable() . '.' . pqrsTableClass::ESTADOPQRS . ' = ' . $id;

            if ($limit !== null and $offset === null) {
                $sql = $sql . ' LIMIT ' . $limit;
            }

            if ($limit !== null and $offset !== null) {
                $sql = $sql . ' LIMIT ' . $limit . ' OFFSET ' . $offset;
            }

            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $exc) {
            throw $exc;
        }
    }
    
        public static function countPqrsf() {
        try {
            $sql = 'SELECT COUNT(' . pqrsTableClass::ID . ') AS PQRSF' .
                    ' FROM ' . pqrsTableClass::getNameTable() . '';
            $answer = model::getInstance()->prepare($sql);
            $answer->execute();
            $answer = $answer->fetchAll(PDO::FETCH_OBJ);
            return $answer[0]->pqrsf;
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

}
