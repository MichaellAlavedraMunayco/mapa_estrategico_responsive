<?php include('includes/header.php'); ?>
<div class="container">
  <?php include('includes/input.php'); ?>
  <?php include('includes/mapa.php'); ?>
  <div class="row d-flex justify-content-center my-2">
    <div class="col text-center">
      <button id="btnModificarDatos" class="btn btn-primary btn-sm mt-2 mx-3 " style="display:none" type="button">Volver
        a modificar
        datos</button>
      <button id="btnReingresarDatos" class="btn btn-danger btn-sm mt-2 mx-3" type="button">Reingresar datos</button>
      <button id="btnGenerarMapaEstrategico" class="btn btn-success btn-sm mt-2 mx-3" type="button">Generar Mapa
        Estratégico</button>
    </div>
  </div>
</div>
<?php include('includes/external.src.php'); ?>
<script>
  $(document).ready(function() {
    // Manejo de relaciones
    var relaciones = [];
    // Cargado de controles plugins
    $('#csPerspectivas, #csTemas, #csGrupos, #csScore, #csIndicador').colorselector();
    $("input[type='number']").inputSpinner();
    // Funcionalidad de botones
    $("#btnGenerarMapaEstrategico").on('click', () => {
      $("#controles-entrada").hide();
      $("#btnReingresarDatos").hide();
      $("#btnGenerarMapaEstrategico").hide();
      $("#mapa-estrategico").show();
      $("#btnModificarDatos").show();
      //Generar Mapa
      var a = document.getElementById('p3t1o1');
      var b = document.getElementById('p2t1o1');
      var c = document.getElementById('p1t2o1');
      relaciones.push(new LeaderLine(a, b, {
        color: 'black',
        size: 2,
        startPlug: 'disc',
        path: 'fluid',
        startSocket: 'top'
      }));
      relaciones.push(new LeaderLine(b, c, {
        color: 'black',
        size: 2,
        startPlug: 'disc',
        path: 'fluid',
        startSocket: 'top',
        endSocket: 'left'
      }));
    });
    $("#btnModificarDatos").on('click', () => {
      $("#controles-entrada").show();
      $("#btnReingresarDatos").show();
      $("#btnGenerarMapaEstrategico").show();
      $("#mapa-estrategico").hide();
      $("#btnModificarDatos").hide();
      for (var i = 0; i < relaciones.length; i++) {
        relaciones[i].remove();
      }
      relaciones = [];
    });
    $("#btnModificarDatos").on('click', () => {
      // Limpiar campos y variables contenedoras de clases
    });
  });
</script>
<?php include('includes/footer.php');
