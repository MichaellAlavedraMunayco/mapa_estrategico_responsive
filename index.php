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
  // Manejo de relaciones
  var relaciones = [];
  // ALmacenador de variables de entrada
  var perspectivas = [];
  var temas = [];
  var grupos = [];
  // Identificadores secuenciales
  var perspectivaId = 0;
  var temaId = 0;
  var grupoId = 0;

  function deletePerspectiva(context, id) {
    for (let i = 0; i < perspectivas.length; i++) {
      const perspectiva = perspectivas[i];
      if (perspectiva.id == id) {
        perspectivas.splice(i, 1);
      }
    }
    $(context).parent().remove();
    actualizarSelectPerspectivas();
  }

  function deleteTema(context, id) {
    for (let i = 0; i < temas.length; i++) {
      const tema = temas[i];
      if (tema.id == id) {
        temas.splice(i, 1);
      }
    }
    $(context).parent().remove();
    actualizarSelectTemas();
  }

  function deleteGrupo(context, id) {
    for (let i = 0; i < grupos.length; i++) {
      const grupo = grupos[i];
      if (grupo.id == id) {
        grupos.splice(i, 1);
      }
    }
    $(context).parent().remove();
    actualizarSelectGrupos();
  }

  function actualizarSelectPerspectivas() {
    $('#selPerspectivas').html('');
    for (let i = 0; i < perspectivas.length; i++) {
      const perspectiva = perspectivas[i];
      $('#selPerspectivas').append(
        `<li id="${perspectiva.id}" class="list-group-item p-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="P${perspectiva.id}">
            <label class="custom-control-label" for="P${perspectiva.id}">${perspectiva.toString()}</label>
          </div>
        </li>`
      );
    }
  }

  function actualizarSelectTemas() {
    $('#selTemas').html('');
    for (let i = 0; i < temas.length; i++) {
      const tema = temas[i];
      $('#selTemas').append(
        `<li id="${tema.id}" class="list-group-item p-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="T${tema.id}">
            <label class="custom-control-label" for="T${tema.id}">${tema.toString()}</label>
          </div>
        </li>`
      );
    }
  }

  function actualizarSelectGrupos() {
    $('#selGrupos').html(
      `<option selected>Seleccionar...</option>`
    );
    for (let i = 0; i < grupos.length; i++) {
      const grupo = grupos[i];
      $('#selGrupos').append(
        `<option value="${grupo.id}">${grupo.nombre}</option>`
      );
    }
  }
  $(document).ready(function() {
    // Cargado de controles plugins
    $('#csPerspectivas, #csTemas, #csGrupos, #csScore, #csIndicador').colorselector();
    $("input[type='number']").inputSpinner();

    $('#btnAgregarPerspectiva').on('click', () => {
      if (!$('#inpNombrePerspectiva').val()) return;
      var id = ++perspectivaId;
      var perspectiva = new Perspectiva(
        id,
        $('#inpNombrePerspectiva').val(),
        $('#csPerspectivas').val());
      perspectivas.push(perspectiva);
      $('#listaPerspectivas').append(
        `<li class="list-group-item p-2">${perspectiva.toString()}
            <div class="color-box" style="background: ${perspectiva.color}"></div>
            <button type="button" class="btn btn-outline-danger btn-sm float-right m-0"
             onclick="deletePerspectiva(this, ${perspectiva.id})">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>`
      );
      $('#inpNombrePerspectiva').val("").focus();
      actualizarSelectPerspectivas();
    });

    $('#btnAgregarTemaEstrategico').on('click', () => {
      if (!$('#inpNombreTemaEstrategico').val()) return;
      var id = ++temaId;
      var tema = new TemaEstrategico(
        id,
        $('#inpNombreTemaEstrategico').val(),
        $('#csTemas').val());
      temas.push(tema);
      $('#listaTemas').append(
        `<li class="list-group-item p-2">${tema.toString()}
            <div class="color-box" style="background: ${tema.color}"></div>
            <button type="button" class="btn btn-outline-danger btn-sm float-right m-0"
             onclick="deleteTema(this, ${tema.id})">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>`
      );
      $('#inpNombreTemaEstrategico').val("").focus();
      actualizarSelectTemas();
    });

    $('#btnAgregarGrupo').on('click', () => {
      if (!$('#inpNombreGrupo').val()) return;
      var id = ++grupoId;
      var grupo = new GrupoEstrategico(
        id,
        $('#inpNombreGrupo').val(),
        $('#csGrupos').val(),
        perspectivas,
        temas);
      grupos.push(grupo);
      $('#listaGrupos').append(
        `<li class="list-group-item p-2">${grupo.toString()}
            <div class="color-box" style="background: ${grupo.color}"></div>
            <button type="button" class="btn btn-outline-danger btn-sm float-right m-0"
             onclick="deleteGrupo(this, ${grupo.id})">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>`
      );
      $('#inpNombreGrupo').val("").focus();
      actualizarSelectGrupos();
    });

    $('#selPerspectivas').on('change', () => {

    });
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
