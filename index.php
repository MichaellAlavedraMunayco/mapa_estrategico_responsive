<?php include('includes/header.php'); ?>

<!-- <form action="construir.mapa.estrategico.php" method="POST"> -->
<!-- </form> -->
<div class="container">
  <div class="row mt-2">
    <div class="col small">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              Perspectivas
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="input-group mb-1">
                  <div class="input-group-prepend">
                    <select id="csPerspectivas">
                      <option value="47" data-color="#CD5C5C">indianred</option>
                      <option value="17" data-color="#008B8B">darkcyan</option>
                      <option value="68" data-color="#32CD32" selected="selected">limegreen</option>
                      <option value="42" data-color="#FFD700">gold</option>
                      <option value="77" data-color="#48D1CC">mediumturquoise</option>
                      <option value="107" data-color="#87CEEB">skyblue</option>
                      <option value="13" data-color="#6495ED">cornflowerblue</option>
                      <option value="15" data-color="#DC143C">crimson</option>
                      <option value="24" data-color="#FF8C00">darkorange</option>
                    </select>
                  </div>
                  <input type="text" class="form-control form-control-sm" placeholder="Nombre de la perspectiva">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="button">Agregar</button>
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item p-2">Nombre de la perspectiva
                    <button type="button" class="btn btn-danger btn-sm float-right m-0">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col">
          <div class="card">
            <div class="card-header">
              Temas Estratégicos
            </div>
            <div class="card-body">
              <div class="form-group">
                <div class="input-group mb-1">
                  <select id="csTemas">
                    <option value="47" data-color="#CD5C5C">indianred</option>
                    <option value="17" data-color="#008B8B">darkcyan</option>
                    <option value="68" data-color="#32CD32" selected="selected">limegreen</option>
                    <option value="42" data-color="#FFD700">gold</option>
                    <option value="77" data-color="#48D1CC">mediumturquoise</option>
                    <option value="107" data-color="#87CEEB">skyblue</option>
                    <option value="13" data-color="#6495ED">cornflowerblue</option>
                    <option value="15" data-color="#DC143C">crimson</option>
                    <option value="24" data-color="#FF8C00">darkorange</option>
                  </select>
                  <input type="text" class="form-control form-control-sm" placeholder="Nombre del Tema Estratégico">
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" type="button">Agregar</button>
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item p-2">Nombre del Tema Estratégico
                    <button type="button" class="btn btn-danger btn-sm float-right m-0">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col small">
      <div class="card">
        <div class="card-header">
          Grupos
        </div>
        <div class="card-body">
          <div class="form-group">
            <div class="input-group mb-1">
              <select id="csGrupos">
                <option value="47" data-color="#CD5C5C">indianred</option>
                <option value="17" data-color="#008B8B">darkcyan</option>
                <option value="68" data-color="#32CD32" selected="selected">limegreen</option>
                <option value="42" data-color="#FFD700">gold</option>
                <option value="77" data-color="#48D1CC">mediumturquoise</option>
                <option value="107" data-color="#87CEEB">skyblue</option>
                <option value="13" data-color="#6495ED">cornflowerblue</option>
                <option value="15" data-color="#DC143C">crimson</option>
                <option value="24" data-color="#FF8C00">darkorange</option>
              </select>
              <input type="text" class="form-control form-control-sm" placeholder="Nombre del Grupo">
            </div>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <label class="input-group-text">Perspectiva</label>
              </div>
              <select class="custom-select">
                <option selected>Seleccionar...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <ul class="list-group mb-1">
              <li class="list-group-item p-2">Nombre de la perspectiva
                <button type="button" class="btn btn-danger btn-sm float-right m-0">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </li>
            </ul>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <label class="input-group-text">Tema Estratégico</label>
              </div>
              <select class="custom-select">
                <option selected>Seleccionar...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <ul class="list-group mb-1">
              <li class="list-group-item p-2">Nombre del Tema Estratégico
                <button type="button" class="btn btn-danger btn-sm float-right m-0">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </li>
            </ul>
            <button class="btn btn-primary btn-sm" type="button">Agregar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-1">
    <div class="col small">
      <div class="card">
        <div class="card-header">
          Objetivos
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text">Grupo</label>
                </div>
                <select class="custom-select">
                  <option selected>Seleccionar...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="input-group mb-1">
                <input type="text" class="form-control form-control-sm" placeholder="Nombre del Objetivo">
              </div>
            </div>
            <div class="col">
              <div class="form-inline">
                <label class="mx-2">score</label>
                <input class="form-control form-control-sm" type="number" value="50" min="0" max="100" step="5" />
                <select id="csScore">
                  <option value="68" data-color="#32CD32" selected="selected">limegreen</option>
                  <option value="42" data-color="#FFD700">gold</option>
                  <option value="15" data-color="#DC143C">crimson</option>
                </select>
              </div>
              <div class="form-inline">
                <label class="mx-2">Indicador</label>
                <select id="csIndicador">
                  <option value="68" data-color="#32CD32" selected="selected">limegreen</option>
                  <option value="42" data-color="#FFD700">gold</option>
                  <option value="15" data-color="#DC143C">crimson</option>
                </select>
              </div>
            </div>
          </div>
          <ul class="list-group mb-1">
            <li class="list-group-item p-2">Nombre del Objetivo
              <button type="button" class="btn btn-danger btn-sm float-right m-0">
                <i class="fas fa-trash-alt"></i>
              </button>
            </li>
          </ul>
          <button class="btn btn-primary btn-sm" type="button">Agregar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="mapa-estrategico">
    <table>
      <tr>
        <th class="hidden-th"></th>
        <th>
          <div class="tema-estrategico">Mejorar la calidad de los activos</div>
        </th>
        <th>
          <div class="tema-estrategico">Lograr la excelencia operacional</div>
        </th>
        <th>
          <div class="tema-estrategico">Lograr el crecimientos de ingresos a través de la intimidad con los clientes
          </div>
        </th>
      </tr>
      <tr>
        <th>
          <div class="perspectiva">Financiera y Resultados</div>
        </th>
        <td>
          <div class="grilla"></div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div id="p1t2o1" class="texto-objetivo">Ser el Banco #1 en rentabilidad</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Mejorar ingresos financieros</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <th>
          <div class="perspectiva">Clientes</div>
        </th>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div id="p2t1o1" class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Fortalecer la calidad de la cartera</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Ofrecer rapidez y servicio confiable</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Fidelizar clientes a través de asesoría experta</div>
                  </div>
                </td>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Aumentar participación en unidades y segmentos rentables</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <th>
          <div class="perspectiva">Procesos</div>
        </th>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div id="p3t1o1" class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Optimizar el proceso de cobranza y recuperación</div>
                  </div>
                </td>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Lograr una efectiva gestión integral de riesgos</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Mejorar la eficiencia de los procesos que generan valor</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">90</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Potenciar proceso comercial y de marketing</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <th>
          <div class="perspectiva">Aprendizaje y Crecimiento</div>
        </th>
        <td colspan="2">
          <div class="grilla">
            <div class="descripcion-grilla">Recursos Humanos y Cultura Organizacional</div>
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">100</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Impulsar la transformación organzacional hacia una cultura de alto
                      desempeño</div>
                  </div>
                </td>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">100</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Fortalecer el conocimiento de productos y mercados</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td>
          <div class="grilla">
            <div class="descripcion-grilla">Tecnología Información</div>
            <table>
              <tr>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">100</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Mejorar la infraestructura tecnológica de TI</div>
                  </div>
                </td>
                <td>
                  <div class="objetivo">
                    <div class="contenedor-iconos">
                      <div class="score-objetivo">100</div>
                      <div class="indicador-objetivo"><i class="far fa-lightbulb"></i></div>
                    </div>
                    <div class="texto-objetivo">Mejorar la infraestructura tecnológica de TI</div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
    </table>
  </div>
</div>
<?php include('includes/footer.php');
