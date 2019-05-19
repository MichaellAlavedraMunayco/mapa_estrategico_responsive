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
<script src="js/model.js"></script>
<script>
  // Tipos de Objetos
  var PERSPECTIVA = "Perspectiva";
  var TEMA = "Tema";
  var GRUPO = "Grupo";
  // Controles
  var INPUT_NOMBRE = "nombre";
  var SELECT_COLOR = "color";
  var BUTTON_AGREGAR = "agregar";
  var UL_LISTA = "lista";
  var BUTTON_ELIMINAR = "eliminar";
  var UL_CHOOSE = "elegir";
  // Arreglos
  var ARRAY_MAPA = [];
  var ARRAY_PERSPECTIVA = [];
  var ARRAY_TEMA = [];
  var ARRAY_GRUPO = [];
  // Identificadores
  var ID_PERSPECTIVA = 0;
  var ID_TEMA = 0;
  var ID_GRUPO = 0;
  // Manejo de relaciones
  var relaciones = [];

  function eliminar(elemento, tipoObjeto, identificador) {
    if (tipoObjeto == PERSPECTIVA) {
      for (let i = 0; i < ARRAY_PERSPECTIVA.length; i++) {
        if (ARRAY_PERSPECTIVA[i].id == identificador) ARRAY_PERSPECTIVA.splice(i, 1);
      }
    }
    if (tipoObjeto == TEMA) {
      for (let i = 0; i < ARRAY_TEMA.length; i++) {
        if (ARRAY_TEMA[i].id == identificador) ARRAY_TEMA.splice(i, 1);
      }
    }
    if (tipoObjeto == GRUPO) {
      for (let i = 0; i < ARRAY_GRUPO.length; i++) {
        if (ARRAY_GRUPO[i].id == identificador) ARRAY_GRUPO.splice(i, 1);
      }
    }
    actualizar(tipoObjeto);
    $(elemento).parent().remove();
  }

  function actualizar(tipoObjeto) {
    $(`#${UL_CHOOSE + tipoObjeto}`).html('');
    $('#selGrupos').html(`<option selected>Seleccionar...</option>`);
    if (tipoObjeto == PERSPECTIVA) {
      ARRAY_PERSPECTIVA.forEach(objeto => {
        $(`#${UL_CHOOSE + tipoObjeto}`).append(
          `<li class="list-group-item p-2">
              <div class="custom-control custom-radio">
                <input type="radio" id="${tipoObjeto.charAt(0) + objeto.id}" name="${UL_CHOOSE + tipoObjeto}" class="custom-control-input">
                <label class="custom-control-label" for="${tipoObjeto.charAt(0) + objeto.id}">${objeto.toString()}</label>
              </div>
            </li>`
        );
      });
    }
    if (tipoObjeto == TEMA) {
      ARRAY_TEMA.forEach(objeto => {
        $(`#${UL_CHOOSE + tipoObjeto}`).append(
          `<li class="list-group-item p-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="${tipoObjeto.charAt(0) + objeto.id}">
                <label class="custom-control-label" for="${tipoObjeto.charAt(0) + objeto.id}">${objeto.toString()}</label>
              </div>
            </li>`
        );
      });
    }
    if (tipoObjeto == GRUPO) {
      ARRAY_GRUPO.forEach(objeto => {
        $(`#${UL_CHOOSE + tipoObjeto}`).append(
          `<li class="list-group-item p-2">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="${tipoObjeto.charAt(0) + objeto.id}">
                <label class="custom-control-label" for="${tipoObjeto.charAt(0) + objeto.id}">${objeto.toString()}</label>
              </div>
            </li>`
        );
        $('#selGrupos').append(`<option value="${objeto.id}">${objeto.nombre}</option>`);
      });
    }
    construirMapa();
  }

  function construirMapa() {
    for (let i = 0; i < ARRAY_PERSPECTIVA.length; i++) {
      ARRAY_MAPA[i] = [];
      for (let j = 0; j < ARRAY_TEMA.length; j++) {
        if (i == 0) {
          ARRAY_MAPA[i][j + 1] = ARRAY_TEMA[j];
        } else if (j == 0) {
          ARRAY_MAPA[i][j] = ARRAY_PERSPECTIVA[i];
        }
      }
    }
    console.log(ARRAY_MAPA);
  }

  // function obtenerPerspectivasSeleccionadas() {
  //   var pers = [];
  //   $('#selPerspectivas').children().each((index, value) => {
  //     var checkbox = $(value).find('input[type=checkbox]');
  //     if (checkbox.is(':checked')) {
  //       var id = checkbox.prop('id').split("P")[1];
  //       var per = null;
  //       perspectivas.forEach(perspectiva => {
  //         if (perspectiva.id == id) {
  //           per = perspectiva;
  //           return;
  //         }
  //       });
  //       pers.push(per);
  //     }
  //   });
  //   return pers;
  // }

  $(document).ready(function() {
    // Cargado de controles plugins
    $(`#${SELECT_COLOR+PERSPECTIVA}, #${SELECT_COLOR+TEMA}, #${SELECT_COLOR+GRUPO}`).colorselector();
    $("input[type='number']").inputSpinner();

    function agregar(tipoObjeto) {
      var entrada = $(`#${INPUT_NOMBRE + tipoObjeto}`);
      if (!entrada.val()) return alert(`${tipoObjeto} sin nombre asignado.`);
      var color = $(`#${SELECT_COLOR + tipoObjeto}`);
      var objeto = undefined;
      if (tipoObjeto == PERSPECTIVA) {
        objeto = new Perspectiva(++ID_PERSPECTIVA, entrada.val(), color.val());
        ARRAY_PERSPECTIVA.push(objeto);
      }
      if (tipoObjeto == TEMA) {
        objeto = new TemaEstrategico(++ID_TEMA, entrada.val(), color.val());
        ARRAY_TEMA.push(objeto);
      }
      if (tipoObjeto == GRUPO) {
        objeto = new GrupoEstrategico(++ID_GRUPO, entrada.val(), color.val(),
          obtenerPerspectivasSeleccionadas(),
          obtenerTemasSeleccionados());
        ARRAY_GRUPO.push(objeto);
      }
      $(`#${UL_LISTA + tipoObjeto}`).append(
        `<li class="list-group-item p-2">${objeto.toString()}
            <div class="color-box" style="background: ${objeto.color}"></div>
            <button type="button" class="btn btn-outline-danger btn-sm float-right m-0"
             onclick="eliminar(this, '${tipoObjeto}', ${objeto.id})">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>`
      );
      entrada.val("").focus();
      actualizar(tipoObjeto);
    }

    $(`#${INPUT_NOMBRE + PERSPECTIVA}`).on('keypress', (e) => {
      if (e.which == 13) agregar(PERSPECTIVA);
    });

    $(`#${BUTTON_AGREGAR + PERSPECTIVA}`).on('click', () => {
      agregar(PERSPECTIVA);
    });

    $(`#${INPUT_NOMBRE + TEMA}`).on('keypress', (e) => {
      if (e.which == 13) agregar(TEMA);
    });

    $(`#${BUTTON_AGREGAR + TEMA}`).on('click', () => {
      agregar(TEMA);
    });

    $(`#${BUTTON_AGREGAR + GRUPO}`).on('click', () => {
      agregar(GRUPO);
    });

    $("#btnGenerarMapaEstrategico").on('click', () => {
      $("#controles-entrada").hide();
      $("#btnReingresarDatos").hide();
      $("#btnGenerarMapaEstrategico").hide();
      $("#mapa-estrategico").show();
      $("#btnModificarDatos").show();
      //Generar Mapa
      var o1p1t2 = document.getElementById('o1p1t2');
      var o2p1t3 = document.getElementById('o2p1t3');
      var o3p2t1 = document.getElementById('o3p2t1');
      var o4p2t2 = document.getElementById('o4p2t2');
      var o5p2t3 = document.getElementById('o5p2t3');
      var o6p2t3 = document.getElementById('o6p2t3');
      var o7p3t1 = document.getElementById('o7p3t1');
      var o8p3t1 = document.getElementById('o8p3t1');
      var o9p3t2 = document.getElementById('o9p3t2');
      var o10p3t3 = document.getElementById('o10p3t3');
      relaciones.push(new LeaderLine(o2p1t3, o1p1t2, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'left',
        endSocket: 'right',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o6p2t3, o2p1t3, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o5p2t3, o2p1t3, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o4p2t2, o1p1t2, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o3p2t1, o1p1t2, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'left',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o7p3t1, o3p2t1, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o8p3t1, o3p2t1, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o9p3t2, o4p2t2, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o10p3t3, o6p2t3, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'top',
        endSocket: 'bottom',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o4p2t2, o5p2t3, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'right',
        endSocket: 'left',
        startSocketGravity: 0,
        endSocketGravity: 0
      }));
      relaciones.push(new LeaderLine(o5p2t3, o6p2t3, {
        color: 'black',
        size: 1.5,
        startPlug: 'disc',
        path: 'grid',
        startSocket: 'right',
        endSocket: 'left',
        startSocketGravity: 0,
        endSocketGravity: 0
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
