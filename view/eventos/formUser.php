<?php

use mvc\routing\routingClass as routing;
use mvc\config\configClass as config;
?>
<?php

use mvc\i18n\i18nClass as i18n ?>
<div class="container container-fluid">
    <div class="mainbox  col-sm-8 col-sm-offset-2 ">
        <h1 class="page-header"><span class="bg-steps">1 </span> <span> <?php echo i18n::__('DetalleEvento') ?></span> <a data-toggle="modal" data-target="#consejos" style="padding-left: 300px;"><i class="fa fa-question-circle"></i><?php ?> Consejos</a> </h1>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>"><?php echo i18n::__('Nombre') ?> <span>*</span></label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" placeholder="<?php echo i18n::__('Inconfundible') ?>" required autofocus>
            </div>
        </div>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <!--        <div style="
                     position: absolute;
                     top: 10px;
                     left: 25%;
                     z-index: 5;
                     background-color: #fff;
                     padding: 5px;
                     border: 1px solid #999;
                     text-align: center;
                     font-family: 'Roboto','sans-serif';
                     line-height: 30px;
                     padding-left: 10px;
                     ">
        
                </div>-->
        <div class="col-xs-12">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" ><?php echo i18n::__('DireccionLugarEvento') ?>:</label>		
                <input class="form-control" id="address" type="textbox" value="Cali, Valle del Cauca, Colombia"></br>
                <input class="btn btn-info" id="submit" type="button" value="Geolocaliza Tu Evento">
            </div>
        </div>
        <div id="map"></div></br>
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: {lat: -34.397, lng: 150.644}
                });
                var geocoder = new google.maps.Geocoder();

                document.getElementById('submit').addEventListener('click', function () {
                    geocodeAddress(geocoder, map);
                });
            }

            function geocodeAddress(geocoder, resultsMap) {
                var address = document.getElementById('address').value;
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        resultsMap.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo mvc\config\configClass::getGoogleMapsApiKey() ?>&signed_in=true&callback=initMap" async defer></script>
        <!--        <div class="col-xs-12 ">
                    <div class="form-group">
                        <label for="lugar_latitud"> Ubicacion<?php echo i18n::__('lugar_latitud') ?>:</label>		
                        <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" placeholder="lugar_latitud" required>
                    </div>
                </div>
                <div class="col-xs-12 ">
                    <div class="form-group">		
                        <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" placeholder="lugar_longitud" required>
                        <ul>
                            <li><a class="btn btn-link"><i class="fa fa-laptop"></i><?php echo i18n::__('EventoOnline') ?> </a> <a class="btn btn-link"><i class="fa fa-search"></i> <?php echo i18n::__('¿No?') ?> </a></li>
                        </ul>
                    </div>
                </div>-->
        <div class="col-xs-12">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" ><?php echo i18n::__('DireccionLugarEvento') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" placeholder="<?php echo i18n::__('DireccionLugarEvento') ?>" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="input-group date" id="datetimePicker">
                        <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>"><?php echo i18n::__('Inicio') ?>:</label>		
                        <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>"><?php echo i18n::__('FINALIZACION') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>"  required>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>"> <?php echo i18n::__('ImagenEvento') ?>:</label>		
                <input type="file" class="form-control input-sm"
                       name="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>"
                       id="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>">
            </div>
        </div>
        <div style="margin-bottom: 40px;" class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>"> <?php echo i18n::__('DescripcionEvento') ?>:</label>
                <textarea class="form-control" rows="5" maxlength="180" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" placeholder="<?php echo i18n::__('ComentaEventEspecial') ?>" required></textarea>

            </div>
        </div>

<!--        <h1 class="page-header"><span class="bg-steps"> <?php echo i18n::__('2') ?> </span><span> <?php echo i18n::__('AjustesAdicionales') ?>  </span></h1>-->
        <!--        <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" ><?php echo i18n::__('FECHINICPUBLIEVENT') ?>:</label>		
                        <input class="form-control" type="date" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" required>
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>"><?php echo i18n::__('FECHFINALPUBLIEVE') ?>:</label>		
                        <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" required>
                    </div>
                </div>-->
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::STARTTIME, true) ?>"><?php ?>Hora:</label>		
                <input class="form-control" type="time" name="<?php echo eventoTableClass::getNameField(eventoTableClass::STARTTIME, true) ?>" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="form-group">
                <b>Incluir enlaces a Facebook y Twitter</b>
                <input  type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()">
            </div>
        </div>
        <div id="content" style="display: none;">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label><i class="fa fa-facebook-square"></i> facebook.com/</label>		
                    <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FACEBOOK, true) ?>" value="facebook.com/">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label><i class="fa fa-twitter-square"></i> twitter.com/</label>		
                    <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::TWITTER, true) ?>" value="twitter.com/">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>"><?php echo i18n::__('Costo') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" value="0" required>
            </div>
        </div>

        <script type="text/javascript">
            function showContent() {
                element = document.getElementById("content");
                check = document.getElementById("check");
                if (check.checked) {
                    element.style.display = 'block';
                }
                else {
                    element.style.display = 'none';
                }
            }
        </script>
