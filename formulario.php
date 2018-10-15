<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    </head>
  <body>
    
  <!--<nav class="navbar navbar-expand-sm navbar-dark m-1 p-3 rounded-top" style="background-color: #000080;">-->                   
<!-- MENU UNO -->
<nav class="navbar navbar-expand-sm navbar-dark bg-info m-1 p-3 rounded-top" style=" ">
  <a class="navbar-brand" href="#">SG WEB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">RECURSOS HUMANOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABASTECIMIENTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTABILIDAD</a>
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>

<!-- FIN MENU UNO -->

<!-- MENU DOS -->
<nav class="navbar navbar-expand-sm navbar-light mb-5 p-3 rounded-bottom" style="background-color: #D3D3D3;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto shadow">
      <li class="nav-item">
        <a class="nav-link" href="#">CENTRO DE COSTO</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">CONTRATO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ASISTENCIA</a>
      </li>
    </ul>
    <span class="navbar-text">      
    </span>
    </div>
    <div>
  </nav>
 
 <!-- FIN MENU DOS -->

<!-- MENU DE TABS -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link disabled active" href="#">Nuevo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Modificar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Listado</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#"></a>
  </li>
</ul>
</div>
<br>


<!-- FIN MENU DE TABS -->


<!-- aca empiezan los input -->

<div class="container-fuid">

<form action="guardar_datos_contrato.php" method="POST">

    <div class="alert alert-primary shadow m-1 p-2 rounded" role="alert">
      INFORMACION PERSONAL Y CONTRACTUAL
    </div>
 
  <!-- información personal -->

  <div class="form-row py-5 ml-4">

        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-2">                
            <input type="text" class="form-control" id="Rut" name="rut" placeholder="RUT">                 
        </div>

        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-2">         
          <input type="text" class="form-control" id="Paterno" name="paterno" placeholder="Paterno">                       
        </div>


        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-2">        
          <input type="text" class="form-control" id="Materno" name="materno" placeholder="Materno">                  
        </div>

        <div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-2 col-xl-3">       
          <input type="text" class="form-control" id="Nombres" name="nombres" placeholder="Nombres">        
        </div>
    
    </div>


    <div class="form-row m-2"> 
      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <select id="NameCia" name="namecia" class="form-control">
        <option selected>Empresa</option>
          <option>IG Construcciones</option>
          <option>IG Maquinarias</option>
          <option>IG Inversiones</option>
          <option>IG Ferreteria</option>
          <option> </option>
          </select>
      </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <select id="CCosto" name="ccosto" class="form-control">
        <option selected>SSCC - CCosto</option>
          <option>T-20</option>
          <option>T-30</option>
          <option>T-40</option>
          <option>T-50</option>
          <option> </option>
          </select>
      </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <input type="text" class="form-control" id="Rut" name="rut" placeholder="RUT">
      </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <input type="text" class="form-control" id="Paterno" name="paterno" placeholder="Paterno">
      </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <input type="text" class="form-control" id="Materno" name="materno" placeholder="Materno">
      </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <label for=""></label>
        <input type="text" class="form-control" id="Nombres" name="nombres" placeholder="Nombres">
      </div>

    </div>

      <div class="form-row m-2">
        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <input type="text" class="form-control" id="fnacimiento" name="birthday" placeholder="F.Nacim. AAAA-MM-DD">
        </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-4">
          <label for=""></label>
          <input type="text" class="form-control" id="Direccion" name="direccion" placeholder="Direccion">
        </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Comuna" name="comuna" class="form-control">
          <option selected>Comuna</option>
            <option>La Serena</option>
            <option>Coquimbo</option>
            <option>Ovalle</option>
            <option>Vicuña</option>
            <option>Andacollo</option>
            <option>La Higuera</option>
            <option>Paihuano</option>
            <option> </option>
          </select>
        </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Genero" name="genero" class="form-control">
          <option selected>Genero</option>
            <option>Hombre</option>
            <option>Mujer</option>
          </select>
        </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Nacionalidad" name="born" class="form-control">
          <option selected>Nacionalidad</option>
            <option>Chilena</option>
            <option>Extranjera</option>
          </select>
        </div>

          </div>
        
        <div class="form-row m-2">
        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <select id="Estadocivil" name="status" class="form-control">
            <option selected>Estado Civil</option>
              <option>Soltero (a)</option>
              <option>Casado (a)</option>
              <option>Divorciado (a)</option>
              <option>Viudo (a)</option>
              <option>Separado (a)</option>
              <option>U.A.C.</option>
            </select>
          </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="telefono" name="phone" placeholder="Telefono">
          </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="Celular" name="celular" placeholder="Celular">
          </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="correo" name="mail" placeholder="Correo">
          </div>

        </div>
  
    <div class="form-row m-2">
        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Cargo" name="cargo" class="form-control">
          <option selected>Cargo</option>
            <option>M1 Pintor</option>
            <option>M1 Carpintero</option>
            <option>M2 Pintor</option>
            <option>M2 Carpintero</option>
            <option> </option>
            </select>
        </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Contrato" name="contrato" class="form-control">
          <option selected>Contrato</option>
            <option>Plazo Fijo</option>
            <option>Indefinido</option>
            <option>Por Obra</option>
            </select>
        </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <label for=""></label>
            <input type="text" class="form-control" id="AdContrato" name="adContrato" placeholder="Adicional Contrato">
          </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="fechaingreso" name="entry" placeholder="F.Ingreso AAAA-MM-DD">
          </div>
        </div>

      <div class="form-row m-2">
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="SueldoBase" name="sueldoBase" placeholder="Sueldo">
          </div>

          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <select id="Gratificacion" name="gratificacion" class="form-control">
            <option selected>Gratificacion</option>
              <option>25% Imponible</option>
              <option>Sin Gratificacion</option>
              </select>
          </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
              <label for=""></label>
              <input type="text" class="form-control" id="Bono" name="bono" placeholder="Bono">
            </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
              <label for=""></label>
              <input type="text" class="form-control" id="Colacion" name="colacion" placeholder="Colacion">
            </div>

        <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
              <label for=""></label>
              <input type="text" class="form-control" id="Movilizacion" name="movilizacion" placeholder="Movilizacion">
            </div>

        <!--<div class="form-inline py-4 col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <input type="submit" class="btn btn-info" value="Guardar">
        </div>-->

        <!--<div class=" p-4 col-sm-6 col-md-4 col-lg-2 col-xl-2">
        <input type="submit" value="Guardar"/>
            </div>-->
        </div>



        <br>
        <div class="alert alert-primary shadow shadow m-1 p-2 rounded" role="alert">
          INFORMACION PREVISIONAL
        </div>



          <div class="form-row m-2">
            <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
              <label for=""></label>
              <select id="AFP" name="afp" class="form-control">
              <option selected>AFP</option>
                <option>Sin AFP</option>
                <option>Capital</option>
                <option>Cuprum</option>
                <option>Habitat</option>
                <option>Planvital</option>
                <option>Provida</option>
                <option>Modelo</option>
                </select>
            </div>

            <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
              <label for=""></label>
              <select id="APV" name="apv" class="form-control">
              <option selected>APV</option>
                <option>Pesos</option>
                <option>UF</option>
              </select>
            </div>

        <div class="form-group col-sm-6 col-md-4  col-lg-2 col-xl-2">
          <label for=""></label>
          <input type="text" class="form-control" id="porcAPV" name="porcapv" placeholder="0,00">
        </div>

        <div class="form-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="Tributable" name="tributable" value="">Tributable
      </label>
    </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <select id="Cuenta2" name="cuenta2" class="form-control">
      <option selected>Cta. 2</option>
        <option>Pesos</option>
        <option>UF</option>
      </select>
    </div>

      <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <input type="text" class="form-control" id="PorcCuenta2" name="porccuenta2" placeholder="0,00">
    </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <select id="SoloJubilados" name="solojubilados" class="form-control">
      <option selected>Solo Jubilados</option>
        <option>Capital</option>
        <option>Cuprum</option>
        <option>Habitat</option>
        <option>Planvital</option>
        <option>Provida</option>
        <option>Modelo</option>
        </select>
    </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <select id="Institucion" name="institucion" class="form-control">
      <option selected>Institucion</option>
      <option>ABN AMRO (CHILE) SEGUROS DE VIDA S.A.</option>
      <option>ACE SEGUROS S.A.</option>
      <option>ADMINISTRADORA GENERAL DE FONDOS SECURITY S.A.T</option>
      <option>Capital</option>
      <option>Cuprum</option>
      <option>Habitat</option>
      <option>Modelo</option>
      <option>Planvital</option>
      <option>Provida</option>
      <option>AGF ALLIANZ CHILE COMPAÑIA DE SEGUROS VIDA S.A.</option>
      <option>BANCHILE CORREDORES DE BOLSA S.A.</option>
      <option>BANCHILE SEGUROS DE VIDA S.A.</option>
      <option>BANCO BBVA BHIF</option>
      <option>BANCO RIPLEY</option>
      <option>BANCO SANTANDER SANTIAGO</option>
      <option>BANCO SCOTIABANK</option>
      <option>BANCOESTADO S.A.</option>
      <option>ADMINISTRADORA GENERAL DE FONDOS</option>
      <option>BANDESARROLLO ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>BBVA ASSET MANAGEMENT ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>BBVA SEGUROS DE VIDA S.A.</option>
      <option>BCI ASSET MANAGEMENT ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>BCI SEGUROS VIDA S.A.</option>
      <option>BICE INVERSIONES ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>BICE INVERSIONES CORREDORES DE BOLSA S.A.</option>
      <option>BICE VIDA COMPAÑIA DE SEGUROS S.A.</option>
      <option>BTG PACTUAL CHILE S.A. ADMINISTRADORA GENERAL DE FONDOS</option>
      <option>CAJA DE COMPENSACION LOS ANDES</option>
      <option>CELFIN CAPITAL S.A. CORREDORES DE BOLSA</option>
      <option>CHILENA CONSOLIDADA SEGUROS DE VIDA S.A.</option>
      <option>CIA DE SEG. DE VIDA CONSORCIO NACIONAL DE SEG S.A.</option>
      <option>CIGNA COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
      <option>CN LIFE, COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
      <option>COMPAÑIA DE SEGUROS CONFUTURO S.A.</option>
      <option>COMPAÑIA DE SEGUROS DE VIDA CARDIF S.A.</option>
      <option>COMPAÑIA DE SEGUROS DE VIDA CRUZ DEL SUR S.A.</option>
      <option>COMPAÑIA DE SEGUROS DE VIDA HUELEN S.A.</option>
      <option>COMPAÑIA DE SEGUROS DE VIDA VITALIS S.A.</option>
      <option>COMPAÑIA DE SEGUROS GENERALES PENTA-SECURITY S.A.</option>
      <option>CORPBANCA ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>CORREDORES DE BOLSA SURA S.A.</option>
      <option>CRUZ DEL SUR ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>CRUZ DEL SUR CORREDORA DE BOLSA S.A.</option>
      <option>EUROAMERICA ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>EUROAMERICA SEGUROS DE VIDA S.A.</option>
      <option>ITAU CHILE ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>LARRAIN VIAL ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>LARRAIN VIAL S.A. CORREDORA DE BOLSA</option>
      <option>MAPFRE COMPAÑIA DE SEGUROS DE VIDA DE CHILE S.A.</option>
      <option>METLIFE CHILE SEGUROS DE VIDA S.A.</option>
      <option>MUTUAL DE SEGUROS DE CHILE</option>
      <option>MUTUALIDAD DE CARABINEROS</option>
      <option>MUTUALIDAD DEL EJERCITO Y AVIACION</option>
      <option>OHIO NATIONAL SEGUROS DE VIDA S.A.</option>
      <option>PENTA ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>PENTA VIDA COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
      <option>PRINCIPAL ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
      <option>PRINCIPAL COMPAÑIA DE SEGUROS DE VIDA CHILE S.A.</option>
      <option>RENTA NACIONAL COMPAÑIA DE SEGUROS DE VIDA S.A.</option>
      <option>SANTANDER ASSET MANAGEMENT S.A. ADM. GENERAL DE FONDOS</option>
      <option>SANTANDER SEGUROS DE VIDA S.A.</option>
      <option>SCOTIA SUD AMERICANO ADMINISTRADORA DE FONDOS MUTUOS S.A.</option>
      <option>SCOTIA SUD AMERICANO CORREDORES DE BOLSA S.A.</option>
      <option>SEGUROS DE VIDA SECURITY PREVISION S.A.</option>
      <option>SEGUROS DE VIDA SURA S.A.</option>
      <option>ZURICH ADMINISTRADORA GENERAL DE FONDOS S.A.</option>
        </select>
     </div>

   </div>
  
  <div class="form-row m-2">
    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <select id="ExCaja" name="excaja" class="form-control">
      <option selected>Ex-Caja</option>
        <option>0 - No pertenece al IPS</option>
        <option>3 - Caja Prev. y Est. de los Empl. del Bco. de Chile</option>
        <option>4 - Sección Prev. del Bco. Central de Chile</option>
        <option>25 - Caja Prev. de la Defensa Nacional.</option>
        <option>26 - Dirección de Prev. de Carabineros de Chile.</option>
        <option>101 - Empart - Régimen 1</option>
        <option>102 - Empart - Régimen 2</option>
        <option>103 - Empart - Régimen 3</option>
        <option>104 - Empart - Régimen 4</option>
        <option>106 - Empart - Régimen 6</option>
        <option>201 - Bancaria - Régimen 1</option>
        <option>202 - Bancaria - Régimen 2</option>
        <option>203 - Bancaria - Régimen 3</option>
        <option>214 - Bancaria - Régimen 14</option>
        <option>221 - Bancaria - Régimen 21</option>
        <option>234 - Bancaria - Régimen 34</option>
        <option>501 - Caprebech - Régimen 1</option>
        <option>502 - Caprebech - Régimen 2</option>
        <option>503 - Caprebech - Régimen 3</option>
        <option>514 - Caprebech - Régimen 14</option>
        <option>521 - Caprebech - Régimen 21</option>
        <option>534 - Caprebech - Régimen 34</option>
        <option>601 - Capremer - Régimen 1</option>
        <option>602 - Capremer - Régimen 2</option>
        <option>603 - Capremer - Régimen 3</option>
        <option>604 - Capremer - Régimen 4</option>
        <option>605 - Capremer - Régimen 5</option>
        <option>606 - Capremer - Régimen 6</option>
        <option>608 - Capremer - Régimen 8</option>
        <option>701 - Triomar - Régimen 1</option>
        <option>702 - Triomar - Régimen 2</option>
        <option>703 - Triomar - Régimen 3</option>
        <option>704 - Triomar - Régimen 4</option>
        <option>801 - Hipica Nacional - Régimen 1</option>
        <option>802 - Hipica Nacional - Régimen 2</option>
        <option>803 - Hipica Nacional - Régimen 3</option>
        <option>804 - Hipica Nacional - Régimen 4</option>
        <option>901 - Servicios de Seguro Social - Régimen 1</option>
        <option>902 - Servicios de Seguro Social - Régimen 2</option>
        <option>1001 - Empleados de Emos - Régimen 1</option>
        <option>1101 - Obreros de Emos - Régimen 1</option>
        <option>1202 - Caja Ferro - Régimen 2</option>
        <option>1203 - Caja Ferro - Régimen 3</option>
        <option>1204 - Caja Ferro - Régimen 4</option>
        <option>1205 - Caja Ferro - Régimen 5</option>
        <option>1207 - Caja Ferro - Régimen 7</option>
        <option>1301 - Canaempu: Publicos - Régimen 1</option>
        <option>1302 - Canaempu: Publicos - Régimen 2</option>
        <option>1303 - Canaempu: Publicos - Régimen 3</option>
        <option>1305 - Canaempu: Publicos - Régimen 5</option>
        <option>1306 - Canaempu: Publicos - Régimen 6</option>
        <option>1308 - Canaempu: Publicos - Régimen 8</option>
        <option>1309 - Canaempu: Publicos - Régimen 9</option>
        <option>1310 - Canaempu: Publicos - Régimen 10</option>
        <option>1311 - Canaempu: Publicos - Régimen 11</option>
        <option>1312 - Canaempu: Publicos - Régimen 12</option>
        <option>1321 - Canaempu: Publicos - Régimen 21</option>
        <option>1322 - Canaempu: Publicos - Régimen 22</option>
        <option>1323 - Canaempu: Publicos - Régimen 23</option>
        <option>1325 - Canaempu: Publicos - Régimen 25</option>
        <option>1326 - Canaempu: Publicos - Régimen 26</option>
        <option>1328 - Canaempu: Publicos - Régimen 28</option>
        <option>1329 - Canaempu: Publicos - Régimen 29</option>
        <option>1330 - Canaempu: Publicos - Régimen 30</option>
        <option>1331 - Canaempu: Publicos - Régimen 31</option>
        <option>1332 - Canaempu: Publicos - Régimen 32</option>
        <option>1338 - Canaempu: Publicos - Régimen 38</option>
        <option>1401 - Canaempu: Periodistas - Régimen 1</option>
        <option>1402 - Canaempu: Periodistas - Régimen 2</option>
        <option>1403 - Canaempu: Periodistas - Régimen 3</option>
        <option>1404 - Canaempu: Periodistas - Régimen 4</option>
        <option>1405 - Canaempu: Periodistas - Régimen 5</option>
        <option>1406 - Canaempu: Periodistas - Régimen 6</option>
        <option>1407 - Canaempu: Periodistas - Régimen 7</option>
        <option>1408 - Canaempu: Periodistas - Régimen 8</option>
        <option>1411 - Canaempu: Periodistas - Régimen 11</option>
        <option>1412 - Canaempu: Periodistas - Régimen 12</option>
        <option>1413 - Canaempu: Periodistas - Régimen 13</option>
        <option>1414 - Canaempu: Periodistas - Régimen 14</option>
        <option>1415 - Canaempu: Periodistas - Régimen 15</option>
        <option>1416 - Canaempu: Periodistas - Régimen 16</option>
        <option>1417 - Canaempu: Periodistas - Régimen 17</option>
        <option>1418 - Canaempu: Periodistas - Régimen 18</option>
        <option>1421 - Canaempu: Periodistas - Régimen 21</option>
        <option>1422 - Canaempu: Periodistas - Régimen 22</option>
        <option>1423 - Canaempu: Periodistas - Régimen 23</option>
        <option>1424 - Canaempu: Periodistas - Régimen 24</option>
        <option>1425 - Canaempu: Periodistas - Régimen 25</option>
        <option>1431 - Canaempu: Periodistas - Régimen 31</option>
        <option>1432 - Canaempu: Periodistas - Régimen 32</option>
        <option>1433 - Canaempu: Periodistas - Régimen 33</option>
        <option>1434 - Canaempu: Periodistas - Régimen 34</option>
        <option>1501 - Copremusa EE - Régimen 1</option>
        <option>1502 - Copremusa EE - Régimen 2</option>
        <option>1503 - Copremusa EE - Régimen 3</option>
        <option>1601 - Caja de Previsión Social de los EE - Régimen 1</option>
        <option>1602 - Caja de Previsión Social de los EE - Régimen 2</option>
        <option>1701 - EE Municipales de la Republica - Régimen 1</option>
        <option>1702 - EE Municipales de la Republica - Régimen 2</option>
        <option>1703 - EE Municipales de la Republica - Régimen 3</option>
        <option>1704 - EE Municipales de la Republica - Régimen 4</option>
        <option>1801 - OO Municipales de la Republica - Régimen 1</option>
        <option>1802 - OO Municipales de la Republica - Régimen 2</option>
        <option>1803 - OO Municipales de la Republica - Régimen 3</option>
        <option>1901 - Diomp - Régimen 1</option>
        <option>2001 - EE Salitre - Régimen 1</option>
        <option>2002 - EE Salitre - Régimen 2</option>
        <option>2101 - Sección Especial Previsión Empleados - Régimen 1</option>
        <option>2102 - Sección Especial Previsión Empleados - Régimen 2</option>
        <option>2201 - Caja de Previsión de Gildemeister - Régimen 1</option>
        <option>2202 - Caja de Previsión de Gildemeister - Régimen 2</option>
        <option>2301 - Mauricio, Hochschild - Régimen 1</option>
        <option>2302 - Mauricio, Hochschild - Régimen 2</option>
        <option>2401 - Secgasco - Régimen 1</option>
        <option>2402 - Secgasco - Régimen 2</option>
      </select>
    </div>
    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <input type="text" class="form-control" id="porcInsti" name="porcinsti" placeholder="0,00 %">
    </div>
    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
      <label for=""></label>
      <select id="Isapre" name="isapre" class="form-control">
      <option selected>Isapre</option>
        <option>No Cotiza</option>
        <option>Fonasa</option>
        <option>Banmédica</option>
        <option>Chuquicamata</option>
        <option>Colmena</option>
        <option>Consalud</option>
        <option>Cruz Blanca</option>
        <option>Cruz del Norte</option>
        <option>Fundación</option>
        <option>Fusat</option>
        <option>Mas Vida</option>
        <option>Nueva Masvida</option>
        <option>Río Blanco</option>
        <option>San Lorenzo</option>
        <option>Vida Tres</option>
        </select>
    </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <input type="text" class="form-control" id="IsapreUF" name="isapreuf" placeholder=" UF 0,0000">
        </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <input type="text" class="form-control" id="IsaprePesos" name="isaprepesos" placeholder=" Plan $">
        </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <input type="text" class="form-control" id="IsaprePorc" name="isapreporc" placeholder=" 0,0000 %">
        </div>

    <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <label for=""></label>
          <select id="Tramo" name="tramo" class="form-control">
          <option selected>Tramo</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            </select>
        </div>

      </div>
      
      <div class="form-row m-2">
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="Csimple" name="csimple" placeholder=" Carga Simple">
          </div>
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="Cmaternal" name="cmaternal" placeholder=" Carga Maternal">
          </div>
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="Cinvalidez" name="cinvalidez" placeholder=" Carga Invalidez">
          </div>
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <input type="text" class="form-control" id="trabajopesado" placeholder="Trabajo Pesado" disabled>
          </div>
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <select id="PorcTrabPesado" name="porctrabpesado" class="form-control">
            <option selected>%</option>
              <option>2 %</option>
              <option>4 %</option>
              </select>
          </div>
          <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2">
            <label for=""></label>
            <select id="OpcTrabPesado" name="opctrabpesado" class="form-control">
            <option selected>Seleccionar</option>
              <option>Buzo</option>
              <option>Electromecanico</option>
              <option>Jefe Taller</option>
              <option>Soldador</option>
              <option>Supervisor en Terreno</option>
              <option>Tornero</option>
              </select>
          </div>
        </div>

        <div class="form-row m-3">
            <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="Jubilado" name="jubilado" value="">Jubilado
          </label>
        </div>

            <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="SeguroCesantia" name="segurocesantia" value="">Seguro de Cesantia
          </label>
        </div>

        <div class="form-inline py-4 col-sm-6 col-md-4 col-lg-2 col-xl-2">
          <input type="submit" class="btn btn-info" value="Guardar">
        </div>

      </div>
      <br>
     </div>
</form>

    <!-- Comentarios -->
</div>
<div class="container my-5"><hr></div>

</div>
<P class="text-center" "foot">Sábado, 6 de Octubre, 2018 - 22:25<BR>Periodo: Septiembre 2018<BR>SG Web 2018</P>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>