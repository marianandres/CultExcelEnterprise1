<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com> 
 */

use mvc\model\modelClass as model;
use mvc\config\configClass as config;
use mvc\session\sessionClass as session;

class eventoTableClass extends eventoBaseTableClass {

    public static function getReportCategoryEventData() {
        try {

            $sql = 'SELECT '
                    . categoriaTableClass::getNameTable() . '.' . categoriaTableClass::NOMBRE . ' , '
                    . ' COUNT( ' . eventoTableClass::getNameTable() . '.' . eventoTableClass::ID . ' ) ' . ' as conteo ' .
                    ' FROM ' . eventoTableClass::getNameTable() . ' , ' . categoriaTableClass::getNameTable() .
                    ' WHERE ' . eventoTableClass::getNameTable() . '.' . eventoTableClass::CATEGORIA_ID . '= '
                    . categoriaTableClass::getNameTable() . '.' . categoriaTableClass::ID .
                    ' GROUP BY ' . categoriaTableClass::getNameTable() . '.' . categoriaTableClass::NOMBRE

            ;
            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

    public static function getTotalPages($lines, $where) {
        try {
            $sql = 'SELECT count(' . eventoTableClass::ID . ') AS cantidad '
                    . 'FROM ' . eventoTableClass::getNameTable() .
                    ' WHERE ' . eventoTableClass::DELETED_AT . ' IS NULL';

            if (is_array($where) === true) {
                foreach ($where as $field => $value) {
                    if (is_array($value)) {

                        $sql = $sql . ' AND ' . $field . ' BETWEEN ' . ((is_numeric($value[0])) ? $value[0] : "'$value[0]'") . ' AND ' . ((is_numeric($value[1])) ? $value[1] : "'$value[1]'") . ' ';
                    } else {
                        $sql = $sql . ' AND ' . $field . ' = ' . ((is_numeric($value)) ? $value : "'" . $value . "'") . ' ';
                    }
                }
            }
            $answer = model::getInstance()->prepare($sql);
            $answer->execute();
            $answer = $answer->fetchAll(PDO::FETCH_OBJ);
            return ceil($answer[0]->cantidad / $lines);
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

    public static function getUserEvents($id, $limit, $offset) {
        try {
            $sql = 'SELECT ' . eventoTableClass::getNameTable() . '.' . eventoTableClass::ID . ' ,' . eventoTableClass::getNameTable() . '.' . eventoTableClass::NOMBRE . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::COSTO . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::FECHA_INICIAL_EVENTO . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::DESCRIPCION . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::DIRECCION . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::STARTTIME . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::FACEBOOK . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::CATEGORIA_ID . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::IMAGEN . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::TWITTER . ' , '
                    . eventoTableClass::getNameTable() . '.' . eventoTableClass::FECHA_FINAL_EVENTO .
                    ' FROM ' . eventoTableClass::getNameTable() . ' , ' . usuarioTableClass::getNameTable() .
                    ' WHERE ' . eventoTableClass::getNameTable() . '.' . eventoTableClass::USUARIO_ID . ' = '
                    . usuarioTableClass::getNameTable() . '.' . usuarioTableClass::ID .
                    ' AND ' . usuarioTableClass::getNameTable() . '.' . usuarioTableClass::ID . ' = ' . $id;

            if ($limit !== null and $offset === null) {
                $sql = $sql . ' LIMIT ' . $limit;
            }

            if ($limit !== null and $offset !== null) {
                $sql = $sql . ' LIMIT ' . $limit . ' OFFSET ' . $offset;
            }
            return model::getInstance()->query($sql)->fetchAll(\PDO::FETCH_OBJ);
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

    public static function getTotalPagesUserEvents($lines) {
        try {
            $sql = 'SELECT count(' . eventoTableClass::ID . ') AS cantidad '
                    . 'FROM ' . eventoTableClass::getNameTable() .
                    ' WHERE ' . eventoTableClass::DELETED_AT . ' IS NULL' . ' AND ' . eventoTableClass::USUARIO_ID . ' = ' . session::getInstance()->getUserId();

//echo $sql;
//exit();

            $answer = model::getInstance()->prepare($sql);
            $answer->execute();
            $answer = $answer->fetchAll(PDO::FETCH_OBJ);
            return ceil($answer[0]->cantidad / $lines);
        } catch (PDOException $exc) {
            throw $exc;
        }
    }

}
