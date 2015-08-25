<?php

use mvc\routing\routingClass as routing;
use mvc\i18n\i18nClass as i18n;

$usu = usuarioTableClass::USER;
$id = usuarioTableClass::ID;
$created = usuarioTableClass::CREATED_AT;
$lastlogin = usuarioTableClass::LAST_LOGIN_AT;
$deleted = usuarioTableClass::DELETED_AT;
$updated = usuarioTableClass::UPDATED_AT;

$xls = new ExcelCSV("\r\n");
$xls->addRow(Array("Nombre", "Apellidos", "Website", "ID"));
$xls->addRow(Array("nombre1", "apellidos1", "www.pagina1.com", 1));
$xls->addRow(Array("nombre2", "apellidos2", "www.pagina2.com", 2));
$arr = Array(
    Array("nombre3", "apellidos3", "www.pagina3.com", "3"),
    Array("nombre4", "apellidos4", "www.pagina4.com", "4"),
    Array("nombre5", "apellidos5", "www.pagina5.com", "5")
);
$xls->addTable($arr);
$xls->download("Bitacora Del Sistema.csv");

class ExcelCSV {

  private $file;
  private $crlf;

  // "\n" -> Linux
  // "\r\n" -> Windows

  /*
   * Constructor
   */
  function __construct($c) {
    $this->crlf = $c;
  }

  /*
   * Escribe un valor.
   */

  private function writeCell($value) {
    $this->file .= "$value;";
  }

  /*
   * Escribe el inicio/final de una fila
   */

  private function writeRow() {
    $this->file = substr($this->file, 0, strlen($this->file) - 1) . $this->crlf;
  }

  /*
   * Añadir datos de una fila
   */

  public function addRow($data) {
    $columns = count($data);
    for ($i = 0; $i < $columns; $i++) {
      $cell = $data[$i];
      $this->writeCell($cell);
    }
    $this->writeRow();
  }

  /*
   * Añadir datos de una tabla
   */

  public function addTable($data) {
    $rows = count($data);
    for ($j = 0; $j < $rows; $j++) {
      $this->addRow($data[$j]);
    }
  }

  /*
   * Genera un fichero para descargar en memoria
   */

  public function download($filename) {
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    ;
    header("Content-Disposition: attachment;filename=$filename ");
    header("Content-Transfer-Encoding: binary ");
    $this->write();
  }

  /*
   * Escribe el contenido del fichero
   */

  private function write() {
    echo $file = $this->file;
  }

}
