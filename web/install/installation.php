<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Instalacion | Cult Excel</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Portal Empresarial De Eventos">
        <meta name="keywords" content="eventos, empresarial, emprendimiento, cult Excel, xult ,excel, Gano Cafe">
        <meta name="author" content="Andres Felipe Alvarez & Mariana Lopez">

        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/iconmoon/style.css" rel="stylesheet" />

        <!-- LESS FILE <link href="assets/css/style.less" rel="stylesheet/less" type="text/css" /> -->
        <!-- Extra CSS Libraries Start -->
        <link href="assets/libs/jquery-magnific/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Extra CSS Libraries End -->

        <link rel="shortcut icon" href="assets/img/ico/favicon.ico">

    </head>
    <body>
        <?php
        $step = (isset($_GET['step']) && $_GET['step'] != '') ? $_GET['step'] : '';
        switch ($step) {
            case '1':
                step_1();
                break;
            case '2':
                step_2();
                break;
            case '3':
                step_3();
                break;
            case '4':
                step_4();
                break;
            default:
                step_1();
        }
        ?>
        <?php

        function step_1() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agree'])) {
                header('Location: installation.php?step=2');
                exit;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['agree'])) {
                echo "</br><div class='alert alert-danger alert-dismissible' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <strong>Warning! </strong>  You must agree to the license.</div>";
            }
            ?>
            <h1 class="page-header text-center">GNU LESSER GENERAL PUBLIC LICENSE</h1>
            <p style="text-align: center;">Version 3, 29 June 2007</p>

            <p>Copyright &copy; 2007 Free Software Foundation, Inc.
                &lt;<a href="http://fsf.org/">http://fsf.org/</a>&gt;</p><p>
                Everyone is permitted to copy and distribute verbatim copies
                of this license document, but changing it is not allowed.</p>

            <p>This version of the GNU Lesser General Public License incorporates
                the terms and conditions of version 3 of the GNU General Public
                License, supplemented by the additional permissions listed below.</p>

            <h4><a name="section0"></a>0. Additional Definitions.</h4>

            <p>As used herein, &ldquo;this License&rdquo; refers to version 3 of the GNU Lesser
                General Public License, and the &ldquo;GNU GPL&rdquo; refers to version 3 of the GNU
                General Public License.</p>

            <p>&ldquo;The Library&rdquo; refers to a covered work governed by this License,
                other than an Application or a Combined Work as defined below.</p>

            <p>An &ldquo;Application&rdquo; is any work that makes use of an interface provided
                by the Library, but which is not otherwise based on the Library.
                Defining a subclass of a class defined by the Library is deemed a mode
                of using an interface provided by the Library.</p>

            <p>A &ldquo;Combined Work&rdquo; is a work produced by combining or linking an
                Application with the Library.  The particular version of the Library
                with which the Combined Work was made is also called the &ldquo;Linked
                Version&rdquo;.</p>

            <p>The &ldquo;Minimal Corresponding Source&rdquo; for a Combined Work means the
                Corresponding Source for the Combined Work, excluding any source code
                for portions of the Combined Work that, considered in isolation, are
                based on the Application, and not on the Linked Version.</p>

            <p>The &ldquo;Corresponding Application Code&rdquo; for a Combined Work means the
                object code and/or source code for the Application, including any data
                and utility programs needed for reproducing the Combined Work from the
                Application, but excluding the System Libraries of the Combined Work.</p>

            <h4><a name="section1"></a>1. Exception to Section 3 of the GNU GPL.</h4>

            <p>You may convey a covered work under sections 3 and 4 of this License
                without being bound by section 3 of the GNU GPL.</p>

            <h4><a name="section2"></a>2. Conveying Modified Versions.</h4>

            <p>If you modify a copy of the Library, and, in your modifications, a
                facility refers to a function or data to be supplied by an Application
                that uses the facility (other than as an argument passed when the
                facility is invoked), then you may convey a copy of the modified
                version:</p>

            <ul>
                <li>a) under this License, provided that you make a good faith effort to
                    ensure that, in the event an Application does not supply the
                    function or data, the facility still operates, and performs
                    whatever part of its purpose remains meaningful, or</li>

                <li>b) under the GNU GPL, with none of the additional permissions of
                    this License applicable to that copy.</li>
            </ul>

            <h4><a name="section3"></a>3. Object Code Incorporating Material from Library Header Files.</h4>

            <p>The object code form of an Application may incorporate material from
                a header file that is part of the Library.  You may convey such object
                code under terms of your choice, provided that, if the incorporated
                material is not limited to numerical parameters, data structure
                layouts and accessors, or small macros, inline functions and templates
                (ten or fewer lines in length), you do both of the following:</p>

            <ul>
                <li>a) Give prominent notice with each copy of the object code that the
                    Library is used in it and that the Library and its use are
                    covered by this License.</li>

                <li>b) Accompany the object code with a copy of the GNU GPL and this license
                    document.</li>
            </ul>

            <h4><a name="section4"></a>4. Combined Works.</h4>

            <p>You may convey a Combined Work under terms of your choice that,
                taken together, effectively do not restrict modification of the
                portions of the Library contained in the Combined Work and reverse
                engineering for debugging such modifications, if you also do each of
                the following:</p>

            <ul>
                <li>a) Give prominent notice with each copy of the Combined Work that
                    the Library is used in it and that the Library and its use are
                    covered by this License.</li>

                <li>b) Accompany the Combined Work with a copy of the GNU GPL and this license
                    document.</li>

                <li>c) For a Combined Work that displays copyright notices during
                    execution, include the copyright notice for the Library among
                    these notices, as well as a reference directing the user to the
                    copies of the GNU GPL and this license document.</li>

                <li>d) Do one of the following:

                    <ul>
                        <li>0) Convey the Minimal Corresponding Source under the terms of this
                            License, and the Corresponding Application Code in a form
                            suitable for, and under terms that permit, the user to
                            recombine or relink the Application with a modified version of
                            the Linked Version to produce a modified Combined Work, in the
                            manner specified by section 6 of the GNU GPL for conveying
                            Corresponding Source.</li>

                        <li>1) Use a suitable shared library mechanism for linking with the
                            Library.  A suitable mechanism is one that (a) uses at run time
                            a copy of the Library already present on the user's computer
                            system, and (b) will operate properly with a modified version
                            of the Library that is interface-compatible with the Linked
                            Version.</li>
                    </ul></li>

                <li>e) Provide Installation Information, but only if you would otherwise
                    be required to provide such information under section 6 of the
                    GNU GPL, and only to the extent that such information is
                    necessary to install and execute a modified version of the
                    Combined Work produced by recombining or relinking the
                    Application with a modified version of the Linked Version. (If
                    you use option 4d0, the Installation Information must accompany
                    the Minimal Corresponding Source and Corresponding Application
                    Code. If you use option 4d1, you must provide the Installation
                    Information in the manner specified by section 6 of the GNU GPL
                    for conveying Corresponding Source.)</li>
            </ul>

            <h4><a name="section5"></a>5. Combined Libraries.</h4>

            <p>You may place library facilities that are a work based on the
                Library side by side in a single library together with other library
                facilities that are not Applications and are not covered by this
                License, and convey such a combined library under terms of your
                choice, if you do both of the following:</p>

            <ul>
                <li>a) Accompany the combined library with a copy of the same work based
                    on the Library, uncombined with any other library facilities,
                    conveyed under the terms of this License.</li>

                <li>b) Give prominent notice with the combined library that part of it
                    is a work based on the Library, and explaining where to find the
                    accompanying uncombined form of the same work.</li>
            </ul>

            <h4><a name="section6"></a>6. Revised Versions of the GNU Lesser General Public License.</h4>

            <p>The Free Software Foundation may publish revised and/or new versions
                of the GNU Lesser General Public License from time to time. Such new
                versions will be similar in spirit to the present version, but may
                differ in detail to address new problems or concerns.</p>

            <p>Each version is given a distinguishing version number. If the
                Library as you received it specifies that a certain numbered version
                of the GNU Lesser General Public License &ldquo;or any later version&rdquo;
                applies to it, you have the option of following the terms and
                conditions either of that published version or of any later version
                published by the Free Software Foundation. If the Library as you
                received it does not specify a version number of the GNU Lesser
                General Public License, you may choose any version of the GNU Lesser
                General Public License ever published by the Free Software Foundation.</p>

            <p>If the Library as you received it specifies that a proxy can decide
                whether future versions of the GNU Lesser General Public License shall
                apply, that proxy's public statement of acceptance of any version is
                permanent authorization for you to choose that version for the
                Library.</p></br>
            <hr style="height: 5px;
                border-top: 0;
                background: #c4e17f;
                border-radius: 5px;
                background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">

            <form action="installation.php?step=1" method="post">
                <div class="form-group ">
                    <label>Estoy de acuerdo a la licencia de uso</label>
                    <input  type="checkbox" name="agree" />
                </div>
                <input class="btn btn-info col-sm-offset-10" type="submit" value="Continuar" />
            </form>
            <?php
        }

        function step_2() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['pre_error'] == '') {
                header('Location: installation.php?step=3');
                exit;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['pre_error'] != '')
                echo " <div class='alert alert-danger alert-dismissible' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <strong>Warning! </strong>" . $_POST['pre_error'] . "</div>";

            if (phpversion() < '5.0') {
                $pre_error = 'You need to use PHP5 or above for our site!<br/>';
            }
            if (ini_get('session.auto_start')) {
                $pre_error .= 'Our site will not work with session.auto_start enabled!<br/>';
            }
            if (!extension_loaded('pgsql')) {
                $pre_error .= 'PGSQL extension needs to be loaded for our site to work!<br/>';
            }
//  if (!extension_loaded('gd')) {
//   $pre_error .= 'GD extension needs to be loaded for our site to work!<br />';
//  }
            if (!is_writable('../../config/config.php')) {
                $pre_error .= " config.php needs to be writable for our site to be installed!";
            }
            ?>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <td><strong>Requisitos </strong></td>
                        <td><strong>Escaneo De Su Sistema</strong></td>
                        <td><strong>Status Requerido</strong></td>
                        <td><strong>Status</strong></td>
                    </tr>
                </thead>
                <tr>
                    <td class="info">PHP Version:</td>
                    <td><?php echo phpversion(); ?></td>
                    <td>5.0+</td>
                    <?php echo (phpversion() >= '5.0') ? '<td class="success"> Ok </td>' : '<td class="danger"> Ok </td>'; ?>
                </tr>
                <tr>
                    <td class="info">Session Auto Start:</td>
                    <?php echo (ini_get('session_auto_start')) ? '<td class="danger"> Encendido </td>' : '<td class="success">Apagado</td>'; ?>
                    <td>Apagado</td>
                    <?php echo (!ini_get('session_auto_start')) ? '<td class="success"> Ok</td>' : '<td class="danger"> Not Ok </td>'; ?>
                </tr>
                <tr>
                    <td class="info">PostgreSQL:</td>
                    <?php echo extension_loaded('pgsql') ? '<td class="success"> Encendido </td>' : '<td class="danger"> Apagado </td>'; ?>
                    <td>Encendido</td>
                    <?php echo extension_loaded('pgsql') ? '<td class="success"> Ok </td>' : '<td class="danger"> Not Ok </td>'; ?>
                </tr>
              <!--  <tr>
                 <td>GD:</td>
                 <td><?php echo extension_loaded('gd') ? 'On' : 'Off'; ?></td>
                 <td>On</td>
                 <td><?php echo extension_loaded('gd') ? 'Ok' : 'Not Ok'; ?></td>
                </tr>-->
                <tr>
                    <td class="info">Archivo config.php</td>
                    <?php echo is_writable('../../config/config.php') ? '<td class="success"> Legible </td>' : '<td class="danger">No Reconocido</td>'; ?>
                    <td>Legible</td>
                    <?php echo is_writable('../../config/config.php') ? '<td class="success"> Ok </td>' : '<td class="danger"> Not Ok </td>'; ?>
                </tr>
            </table>
            <form action="installation.php?step=2" method="post">
                <input type="hidden" name="pre_error" id="pre_error" value="<?php echo $pre_error; ?>"/>
                <input class="btn btn-success col-sm-offset-10" type="submit" name="continuar" value="Continuar" />
            </form>
            <?php
        }

        function step_3() {
            if (isset($_POST['submit']) && $_POST['submit'] == "Install!") {
                $host = isset($_POST['host']) ? $_POST['host'] : "";
                $database_name = isset($_POST['database_name']) ? $_POST['database_name'] : "";
                $driver = isset($_POST['driver']) ? $_POST['driver'] : "";
                $port = isset($_POST['port']) ? $_POST['port'] : "";
                $database_username = isset($_POST['database_username']) ? $_POST['database_username'] : "";
                $database_password = isset($_POST['database_password']) ? $_POST['database_password'] : "";
                $domain = isset($_POST['domain']) ? $_POST['domain'] : "";
                $path_system = isset($_POST['path_system']) ? $_POST['path_system'] : "";
                $UrlBase = isset($_POST['UrlBase']) ? $_POST['UrlBase'] : "";
                $language = isset($_POST['language']) ? $_POST['language'] : "";
                $admin_name = isset($_POST['admin_name']) ? $_POST['admin_name'] : "";
                $admin_password = isset($_POST['admin_password']) ? $_POST['admin_password'] : "";
                $verifi_password = isset($_POST['verifi_password']) ? $_POST['verifi_password'] : "";

                if (empty($driver) || empty($UrlBase) || empty($port) || empty($admin_name) || empty($admin_password) || empty($verifi_password) || empty($host) || empty($domain) || empty($path_system) || empty($language) || empty($database_username) || empty($database_name)) {
                    echo "<br/><div class='alert alert-danger alert-dismissible' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <strong>Warning! </strong>Todos Los Campos Son Requeridos! Por Favor Ingresar Datos.</div>";
                } else {
                    try {
                        $dsn = $driver . ':dbname=' . $database_name . ';host=' . $host . ';port=' . $port;
                        $user = $database_username;
                        $password = $database_password;
                        $conn = new PDO($dsn, $user, $password);
//
//                        $file= "portal_web";
//                        $sql = file_get_contents($file, './../sql/');
//////                        $sql = str_replace('?', "\\077", $sql);
//                        $conn->execute($sql);

//                        $conn->prepare("INSERT INTO usuario SET user_name='" . $admin_name . "', password = md5('" . $admin_password . ")");
//			$conn->execute();
//			//cerramos la conexión con la bd
//			$conn->close_con();
                    } catch (PDOException $exc) {

                        echo $exc->getMessage();
                    }

                    $f = fopen("../../config/config.php", "w");
                    $database_inf = "<?php
     use mvc\config\configClass as config;
use mvc\session\sessionClass as session;

config::setRowGrid(10);

config::setDbHost('" . $host . "');
config::setDbDriver('pgsql'); // pgsql
config::setDbName('" . $database_name . "');
config::setDbPort(5432); // 5432
config::setDbUser('" . $database_username . "');
config::setDbPassword('" . $database_password . "');
// Esto solo es necesario en caso de necesitar un socket para la DB
//config::setDbUnixSocket(null); ///tmp/mysql.sock
//
//if (config::getDbUnixSocket() !== null) {
//  config::setDbDsn(
//          config::getDbDriver()
//          . ':unix_socket=' . config::getDbUnixSocket()
//          . ';dbname=' . config::getDbName()
//  );
//} else {
  config::setDbDsn(
          config::getDbDriver()
          . ':host=' . config::getDbHost()
          . ';port=' . config::getDbPort()
          . ';dbname=' . config::getDbName()
  );
//}

config::setPathAbsolute('" . $path_system . "');
config::setUrlBase('http://". $UrlBase ."');

config::setScope('dev'); //prod

if (session::getInstance()->hasDefaultCulture() === false) {
  config::setDefaultCulture('" . $language . "');
} else {
  config::setDefaultCulture(session::getInstance()->getDefaultCulture());
}

config::setIndexFile('index.php');

config::setFormatTimestamp('Y-m-d H:i:s');

config::setHeaderJson('Content-Type: application/json; charset=utf-8');
config::setHeaderXml('Content-Type: application/xml; charset=utf-8');
config::setHeaderHtml('Content-Type: text/html; charset=utf-8');
config::setHeaderPdf('Content-type: application/pdf; charset=utf-8');
config::setHeaderJavascript('Content-Type: text/javascript; charset=utf-8');
config::setHeaderExcel2003('Content-Type: application/vnd.ms-excel; charset=utf-8');
config::setHeaderExcel2007('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=utf-8');

config::setCookieNameRememberMe('mvcSiteRememberMe');
config::setCookieNameSite('mvcSite');
config::setCookiePath('/CultExel/web/' . config::getIndexFile());
config::setCookieDomain('http://" . $domain . "/');
config::setCookieTime(3600 * 8); // una hora en segundo 3600 y por 8 serían 8 horas

config::setDefaultModule('homepage');
config::setDefaultAction('index');

config::setDefaultModuleSecurity('shfSecurity');
config::setDefaultActionSecurity('index');

config::setDefaultModulePermission('shfSecurity');
config::setDefaultActionPermission('noPermission');
                                                ";

                    if (fwrite($f, $database_inf) > 0) {
                        fclose($f);
                    }
                    header('Location: installation.php?step=4');
                }
            }
            ?>
            <div class="text-center">

                <form role="form"  method="post" action="installation.php?step=3">
                    </br><h2 class="page-header">CONFIGURACION DEL SISTEMA <small>  Cult Excel Enterprise</small></h2>
                    <hr style="height: 5px;
                        border-top: 0;
                        background: #c4e17f;
                        border-radius: 5px;
                        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">

                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="host">Database Host</label>
                        <input class="form-control col" type="text" name="host" value='localhost' size="15">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="driver">Driver BD</label>
                        <select class="form-control" name="driver">
                            <option value="pgsql">PGSQL</option>
                            <option value="mysql">MYSQL</option>
                        </select>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="port">Nombre Base De Datos</label>
                        <input class="form-control" type="text" name="port" size="4" value="5432"  placeholder="Puerto BD">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="database_name">Nombre Base De Datos</label>
                        <input class="form-control" type="text" name="database_name" size="30" value="portal_web" placeholder="BD Nombre">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="database_username">Usuario Base De Datos</label>
                        <input class="form-control" type="text" name="database_username" size="30" value="<?php echo $database_username; ?>" placeholder="Ingresar Usuario BD">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="database_password">Password Base De Datos</label>
                        <input class="form-control" type="password" name="database_password" size="30" value="<?php echo $database_password; ?>" placeholder="ingrese Password ">
                    </div>
                    <br/>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="domain">Dominio</label>
                        <input class="form-control" type="text" name="domain" size="30" value="<?php echo $domain; ?>" placeholder="Nombre De Dominio">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="path_system">Directorio De La Aplicacion</label>
                        <input class="form-control" type="text" name="path_system" value="<?php echo $path_system; ?>">
                    </div>
                    <div class="form-group col-xs-12 ">
                        <label for="Direccion de la Web">Direccion de la Web</label>
                        <input class="form-control" type="text" name="UrlBase" placeholder="direccion De La Web">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="language">Idioma</label>
                        <select class="form-control" name="language">
                            <option value="es">Español (ES)</option>
                            <option value="en">English (US)</option>
                        </select>
                    </div>
                    <div class=" form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="username">Usuario Admin</label>
                        <input class="form-control" type="text" name="admin_name" size="30" value="<?php echo $admin_name; ?>" placeholder="Ingrese el Nombre De Usuario">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="admin_password1">Password Admin</label>
                        <input class="form-control" name="admin_password" type="password" size="20" maxlength="20" value="<?php echo $admin_password; ?>" placeholder="ingrese Su Contraseña">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <label for="verifi_password">Verificar Password Admin</label>
                        <input class="form-control" name="verifi_password" type="password" size="20" maxlength="20" value="<?php echo $verifi_password; ?>" placeholder="Verifique Su Contraseña">
                    </div>
                    </br></br>
                    <hr style="height: 5px;
                        border-top: 0;
                        background: #c4e17f;
                        border-radius: 5px;
                        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                    <input class="btn btn-success" type="submit" name="submit" value="Install!">
                </form>
            </div>  
            <?php
        }

        function step_4() {
            ?>
            <div class="text-center">
                <h1 class="page-header">Finalizacion De La Instalacion Del Sistema</h1>

                <hr style="height: 5px;
                    border-top: 0;
                    background: #c4e17f;
                    border-radius: 5px;
                    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                <div class='alert alert-success alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <strong>FELICITACIONES!  </strong><span>  La Instalacion Del Sistema Cult Excel Enterpise A Sido Un Exito!</span></br><strong> BIENVENIDO!!.</strong></div>

                <a class="btn btn-success  btn-bordered" href="../index.php">Iniciar Sistema Cult Excel Enterprise </a>
            </div></br></br>            
            <?php
        }
        ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#"> 
                            <img src="assets/img/logo/logo.jpg" alt="Cult Excel" class="footer-logo"> 
                        </a>
                        <h5 style="color: #FFFFFF">Que Conecta Tu Gente!</h5>

                    </div>


                    <div class="col-sm-4">
                        <h4>CONTACTE CON NOSOTROS</h4>
                        <ul class="list-unstyled company-info">
                            <li><i class="icon-map-marker"></i> 1375 Richmond Avenue<br>Minneapolis, MN 90017</li>
                            <li><i class="icon-phone3"></i> 1-800-666-666</li>
                            <li><i class="icon-envelope"></i> <a href="mailto:contact@somecorporation.com">cultexcelenterpise@somecorporation.com</a></li>
                            <li><i class="icon-alarm2"></i> Monday - Friday: <strong>8:00 am - 7:00 pm</strong><br>Saturday - Sunday: <strong>Closed</strong></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 hidden-xs">
                        <h4>SOCIAL STREAM</h4>
                        <ul class="list-unstyled social-stream">
                            <li><i class="icon-twitter4"></i> We just released an awesome frontend template for our coco template. Come on and check it out! - <a href="http://goo.gl/ylVWzR">http://goo.gl/ylVWzR</a><br><span class="text-default text-sm">Oct 20</span></li>
                            <li><i class="icon-twitter4"></i> Our template is going popular. Don't miss it!<br><span class="text-default text-sm">Oct 19</span></li>
                            <li><i class="icon-facebook4"></i> World is becoming a crazy place. Try to avoid toxic materials.<br><span class="text-default text-sm">Oct 19</span></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row"> 
                    <div class="col-sm-6">
                        <p>Copyright &copy; 2015 Por <a href="#" target="_blank">Designed By Mariana Lopez, Andres Felipe Alvarez, Bryan Durango</a></p> 
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="social-links">
                            <a href="javascript:;">
                                <i class="icon-twitter4"></i>
                            </a>
                            <a href="javascript:;">
                                <i class="icon-facebook4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="tothetop" href="javascript:;"><i class="icon-angle-up"></i></a>

        <script>
            var resizefunc = [];
        </script>
        <script src="assets/libs/less-js/less-1.7.5.min.js"></script>
        <script src="assets/libs/pace/pace.min.js"></script>
        <script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/jquery-browser/jquery.browser.min.js"></script>
        <script src="assets/libs/fastclick/fastclick.js"></script>
        <script src="assets/libs/stellarjs/jquery.stellar.min.js"></script>
        <script src="assets/libs/jquery-appear/jquery.appear.js"></script>
        <script src="assets/js/init.js"></script>
        <!-- Page Specific JS Libraries -->
        <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
        <script src="assets/libs/jquery-magnific/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/pages/portfolio.js"></script>
        <!-- Page Specific JS Libraries End -->
    </body>
</html>