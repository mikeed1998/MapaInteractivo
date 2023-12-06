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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   
    <div class="container mt-5">
        <div class="row">
            <div class="col-11 mx-auto fs-1 fw-bolder bg-light text-center">
                Nuestras sucursales
            </div>
        </div>
        <div class="row">
            <div class="col-9 mx-auto mt-5 text-center bg-light">

            <form id="form1">
                    <div id="control_map">            
                        <map name="mexico" id="map_ID">
                            <area id="AGU" data-id-estado="1" alt="AGU" title="Aguascalientes"           class="area" href="#" shape="poly" coords="<?=$coordenadas['AGU_XS'];?>" />
                            <area id="BCN" data-id-estado="2" alt="BCN" title="Baja California Norte"    class="area" href="#" shape="poly" coords="<?=$coordenadas['BCN_XS'];?>" />
                            <area id="BCS" data-id-estado="3" alt="BCS" title="Baja California Sur"      class="area" href="#" shape="poly" coords="<?=$coordenadas['BCS_XS'];?>" />
                            <area id="CAM" data-id-estado="4" alt="CAM" title="Campeche"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['CAM_XS'];?>" />
                            <area id="COA" data-id-estado="5" alt="COA" title="Coahuila"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['COA_XS'];?>" />
                            <area id="COL" data-id-estado="6" alt="COL" title="Colima"                   class="area" href="#" shape="poly" coords="<?=$coordenadas['COL_XS'];?>" />            
                            <area id="CHP" data-id-estado="7" alt="CHP" title="Chiapas"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['CHP_XS'];?>" />            
                            <area id="CHH" data-id-estado="8" alt="CHH" title="Chihuahua"                class="area" href="#" shape="poly" coords="<?=$coordenadas['CHH_XS'];?>" />
                            <area id="DIF" data-id-estado="9" alt="DIF" title="Ciudad de México"         class="area" href="#" shape="poly" coords="<?=$coordenadas['DIF_XS'];?>" />
                            <area id="DUR" data-id-estado="10" alt="DUR" title="Durango"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['DUR_XS'];?>" />            
                            <area id="GUA" data-id-estado="11" alt="GUA" title="Guanajuato"              class="area" href="#" shape="poly" coords="<?=$coordenadas['GUA_XS'];?>" />
                            <area id="GRO" data-id-estado="12" alt="GRO" title="Guerrero"                class="area" href="#" shape="poly" coords="<?=$coordenadas['GRO_XS'];?>" />
                            <area id="HID" data-id-estado="13" alt="HID" title="Hidalgo"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['HID_XS'];?>" />
                            <area id="JAL" data-id-estado="14" alt="JAL" title="Jalisco"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['JAL_XS'];?>" />
                            <area id="MEX" data-id-estado="15" alt="MEX" title="Estado de M&eacute;xico" class="area" href="#" shape="poly" coords="<?=$coordenadas['MEX_XS'];?>" />
                            <area id="MIC" data-id-estado="16" alt="MIC" title="Michoac&aacute;n"        class="area" href="#" shape="poly" coords="<?=$coordenadas['MIC_XS'];?>" />
                            <area id="MOR" data-id-estado="17" alt="MOR" title="Morelos"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['MOR_XS'];?>" />
                            <area id="NAY" data-id-estado="18" alt="NAY" title="Nayarit"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['NAY_XS'];?>" />
                            <area id="NLE" data-id-estado="19" alt="NLE" title="Nuevo Le&oacute;n"       class="area" href="#" shape="poly" coords="<?=$coordenadas['NLE_XS'];?>" />
                            <area id="OAX" data-id-estado="20" alt="OAX" title="Oaxaca"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['OAX_XS'];?>" />
                            <area id="PUE" data-id-estado="21" alt="PUE" title="Puebla"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['PUE_XS'];?>" />
                            <area id="QUE" data-id-estado="22" alt="QUE" title="Quer&eacute;taro"        class="area" href="#" shape="poly" coords="<?=$coordenadas['QUE_XS'];?>" />
                            <area id="ROO" data-id-estado="23" alt="ROO" title="Quintana Roo"            class="area" href="#" shape="poly" coords="<?=$coordenadas['ROO_XS'];?>" />            
                            <area id="SLP" data-id-estado="24" alt="SLP" title="SAN luis Potosi"         class="area" href="#" shape="poly" coords="<?=$coordenadas['SLP_XS'];?>" />
                            <area id="SIN" data-id-estado="25" alt="SIN" title="Sinaloa"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['SIN_XS'];?>" />
                            <area id="SON" data-id-estado="26" alt="SON" title="Sonora"                  class="area" href="#" shape="poly" coords="<?=$coordenadas['SON_XS'];?>" />
                            <area id="TAB" data-id-estado="27" alt="TAB" title="Tabasco"                 class="area" href="#" shape="poly" coords="<?=$coordenadas['TAB_XS'];?>" />
                            <area id="TAM" data-id-estado="28" alt="TAM" title="Tamaulipas"              class="area" href="#" shape="poly" coords="<?=$coordenadas['TAM_XS'];?>" />
                            <area id="TLA" data-id-estado="29" alt="TLA" title="Tlaxcala"                class="area" href="#" shape="poly" coords="<?=$coordenadas['TLA_XS'];?>" />
                            <area id="VER" data-id-estado="30" alt="VER" title="Veracruz"                class="area" href="#" shape="poly" coords="<?=$coordenadas['VER_XS'];?>" />
                            <area id="YUC" data-id-estado="31" alt="YUC" title="Yucat&aacute;n"          class="area" href="#" shape="poly" coords="<?=$coordenadas['YUC_XS'];?>" />
                            <area id="ZAC" data-id-estado="32" alt="ZAC" title="Zacatecas"               class="area" href="#" shape="poly" coords="<?=$coordenadas['ZAC_XS'];?>" />
                        </map>	

                        <div id='content_mapa'>            
                            <img id="map_ID" class="map" src="images/mapaBlack_576.png" usemap="#mexico" title="Mexico" alt="Mexico" />
			                <!-- <div id="edo" >&nbsp;</div> -->
                            <!-- <div class="escudo"></div> -->
                        </div>        
                    </div>
                </form>   

            </div>
           
        </div>
    </div>
    <br><br><br><br><br><br>
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