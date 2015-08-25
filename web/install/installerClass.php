<?php

/**
 * Description of installerClass
 *
 * @author Andres Alavrez & Mariana Lopez
 */
class installerClass {

    public function install() {
        if (isset($_GET['step']) !== true) {
            header('Location: install/index.html');
        }
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

