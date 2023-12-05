<?php
    require_once "conexion.php";

    $resultado = $conn->query("SELECT id, estado, sucursal FROM sucursales");
    $datos = array();

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
    }

    $coord = $conn->query("SELECT * FROM coordenadas");
    $coordenadas = array();

    if ($coord->num_rows > 0) {
        while ($row = $coord->fetch_assoc()) {
            $indice = $row['estado'];
            $coords = $row['coordenadas'];

            $coordenadas[$indice] = $coords;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.maphighlight.min.js"></script>
    <script src="js/imageMapResizer.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/estilos_mapa.css" />
    
</head>
<body>
   
    <div class="container mt-5">
        <div class="row">
            <div class="col-11 mx-auto fs-1 fw-bolder bg-light text-center">
                Nuestras sucursales
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto mt-5 text-center bg-light">

            <form id="form1">
                    <div id="control_map">            
                        <map name="mexico" id="map_ID">
                            <area id="AGU" data-id-estado="1" alt="AGU" title="Aguascalientes"           class="area" href="#" shape="poly" coords="<?=$coordenadas['AGU'];?>" />
                            <area id="BCN" data-id-estado="2" alt="BCN" title="Baja California Norte"    class="area" href="#" shape="poly" coords="<?=$coordenadas['BCN'];?>" />
                            <area id="BCS" data-id-estado="3" alt="BCS" title="Baja California Sur"      class="area" href="#" shape="poly" coords="<?=$coordenadas['BCS'];?>" />
                            <area id="CAM" data-id-estado="4" alt="CAM" title="Campeche"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['CAM'];?>" />
                            <area id="COA" data-id-estado="5" alt="COA" title="Coahuila"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['COA'];?>" />
                            <area id="COL" data-id-estado="6" alt="COL" title="Colima"                   class="area" href="#" shape="poly" coords="<?=$coordenadas['COL'];?>" />            
                            <area id="CHP" data-id-estado="7" alt="CHP" title="Chiapas"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['CHP'];?>" />            
                            <area id="CHH" data-id-estado="8" alt="CHH" title="Chihuahua"                class="area" href="#" shape="poly" coords="<?=$coordenadas['CHH'];?>" />
                            <area id="DIF" data-id-estado="9" alt="DIF" title="Ciudad de México"         class="area" href="#" shape="poly" coords="<?=$coordenadas['DIF'];?>" />
                            <area id="DUR" data-id-estado="10" alt="DUR" title="Durango"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['DUR'];?>" />            
                            <area id="GUA" data-id-estado="11" alt="GUA" title="Guanajuato"              class="area" href="#" shape="poly" coords="<?=$coordenadas['GUA'];?>" />
                            <area id="GRO" data-id-estado="12" alt="GRO" title="Guerrero"                class="area" href="#" shape="poly" coords="<?=$coordenadas['GRO'];?>" />
                            <area id="HID" data-id-estado="13" alt="HID" title="Hidalgo"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['HID'];?>" />
                            <area id="JAL" data-id-estado="14" alt="JAL" title="Jalisco"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['JAL'];?>" />
                            <area id="MEX" data-id-estado="15" alt="MEX" title="Estado de M&eacute;xico" class="area" href="#" shape="poly" coords="<?=$coordenadas['MEX'];?>" />
                            <area id="MIC" data-id-estado="16" alt="MIC" title="Michoac&aacute;n"        class="area" href="#" shape="poly" coords="<?=$coordenadas['MIC'];?>" />
                            <area id="MOR" data-id-estado="17" alt="MOR" title="Morelos"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['MOR'];?>" />
                            <area id="NAY" data-id-estado="18" alt="NAY" title="Nayarit"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['NAY'];?>" />
                            <area id="NLE" data-id-estado="19" alt="NLE" title="Nuevo Le&oacute;n"       class="area" href="#" shape="poly" coords="<?=$coordenadas['NLE'];?>" />
                            <area id="OAX" data-id-estado="20" alt="OAX" title="Oaxaca"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['OAX'];?>" />
                            <area id="PUE" data-id-estado="21" alt="PUE" title="Puebla"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['PUE'];?>" />
                            <area id="QUE" data-id-estado="22" alt="QUE" title="Quer&eacute;taro"        class="area" href="#" shape="poly" coords="<?=$coordenadas['QUE'];?>" />
                            <area id="ROO" data-id-estado="23" alt="ROO" title="Quintana Roo"            class="area" href="#" shape="poly" coords="<?=$coordenadas['ROO'];?>" />            
                            <area id="SON" data-id-estado="26" alt="SON" title="Sonora"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['SON'];?>" />
                            <area id="TAB" data-id-estado="27" alt="TAB" title="Tabasco"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['TAB'];?>" />
                            <area id="TAM" data-id-estado="28" alt="TAM" title="Tamaulipas"              class="area" href="#" shape="poly" coords="<?=$coordenadas['TAM'];?>" />
                            <area id="TLA" data-id-estado="29" alt="TLA" title="Tlaxcala"                class="area" href="#" shape="poly" coords="<?=$coordenadas['TLA'];?>" />
                            <area id="VER" data-id-estado="30" alt="VER" title="Veracruz"                class="area" href="#" shape="poly" coords="<?=$coordenadas['VER'];?>" />
                            <area id="YUC" data-id-estado="31" alt="YUC" title="Yucat&aacute;n"          class="area" href="#" shape="poly" coords="<?=$coordenadas['YUC'];?>" />
                            <area id="ZAC" data-id-estado="32" alt="ZAC" title="Zacatecas"               class="area" href="#" shape="poly" coords="<?=$coordenadas['ZAC'];?>" />
                        </map>	

                        <div id='content_mapa'>            
                            <img id="map_ID" class="map" src="images/mapa.png" usemap="#mexico" title="Mexico" alt="Mexico" />
			                <!-- <div id="edo" >&nbsp;</div> -->
                            <!-- <div class="escudo"></div> -->
                        </div>        
                    </div>
                </form>   

            </div>
            
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // Inicializa una variable JavaScript con los datos de PHP y utilizarlos en main.js
        var datosPHP = <?php echo json_encode($datos); ?>;

        const container = document.getElementById("mapac");

        // Aplicar estilos de forma responsive
        window.addEventListener("resize", function() {

            if(window.innerWidth >= 1800) {

            } else if (window.innerWidth < 1800 && window.innerWidth >= 1400) { 

            } else if (window.innerWidth < 1400 && window.innerWidth >= 1200) { 
                
            } else if (window.innerWidth < 1200 && window.innerWidth >= 992) { 
                
            } else if (window.innerWidth < 992 && window.innerWidth >= 768) { 
                
            } else if (window.innerWidth < 768 && window.innerWidth >= 576) { 
                
            } else if (window.innerWidth < 576 && window.innerWidth >= 0) { 
                
            } else {

            }

        });

        // Aplicar estilos al cargar la página
        window.addEventListener("load", function() {
    
            if(window.innerWidth >= 1800) {
            
            } else if (window.innerWidth < 1800 && window.innerWidth >= 1400) { 
                
            } else if (window.innerWidth < 1400 && window.innerWidth >= 1200) { 
                
            } else if (window.innerWidth < 1200 && window.innerWidth >= 992) { 
                
            } else if (window.innerWidth < 992 && window.innerWidth >= 768) { 
                
            } else if (window.innerWidth < 768 && window.innerWidth >= 576) { 
                
            } else if (window.innerWidth < 576 && window.innerWidth >= 0) { 
                
            } else {

            }

        });

    </script>
</body>
</html>