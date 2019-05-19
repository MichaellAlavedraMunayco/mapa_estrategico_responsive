<div id="controles-entrada">
    <div class="row mt-2">
        <div class="col small">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header py-2">
                            1. Perspectivas
                        </div>
                        <div class="card-body py-2">
                            <div class="form-group">
                                <div class="input-group mb-1">
                                    <div class="input-group-prepend">
                                        <select id="csPerspectivas">
                                            <option value="#32CD32" data-color="#32CD32" selected="selected">limegreen
                                            </option>
                                            <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                                            <option value="#008B8B" data-color="#008B8B">darkcyan</option>
                                            <option value="#FFD700" data-color="#FFD700">gold</option>
                                            <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
                                            <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
                                            <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
                                            <option value="#DC143C" data-color="#DC143C">crimson</option>
                                            <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
                                        </select>
                                    </div>
                                    <input id="inpNombrePerspectiva" type="text" class="form-control form-control-sm"
                                        placeholder="Nombre de la perspectiva">
                                    <div class="input-group-append">
                                        <button id="btnAgregarPerspectiva" class="btn btn-outline-primary btn-sm"
                                            type="button">Agregar</button>
                                    </div>
                                </div>
                                <ul id="listaPerspectivas" class="list-group"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col">
                    <div class="card">
                        <div class="card-header py-2">
                            2. Temas Estratégicos
                        </div>
                        <div class="card-body py-2">
                            <div class="form-group">
                                <div class="input-group mb-1">
                                    <select id="csTemas">
                                        <option value="#32CD32" data-color="#32CD32" selected="selected">limegreen
                                        </option>
                                        <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                                        <option value="#008B8B" data-color="#008B8B">darkcyan</option>
                                        <option value="#FFD700" data-color="#FFD700">gold</option>
                                        <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
                                        <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
                                        <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
                                        <option value="#DC143C" data-color="#DC143C">crimson</option>
                                        <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
                                    </select>
                                    <input id="inpNombreTemaEstrategico" type="text"
                                        class="form-control form-control-sm" placeholder="Nombre del Tema Estratégico">
                                    <div class="input-group-append">
                                        <button id="btnAgregarTemaEstrategico" class="btn btn-outline-primary btn-sm"
                                            type="button">Agregar</button>
                                    </div>
                                </div>
                                <ul id="listaTemas" class="list-group"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col small">
            <div class="card">
                <div class="card-header py-2">
                    3. Grupos
                </div>
                <div class="card-body py-2">
                    <div class="form-group">
                        <div class="input-group mb-1">
                            <select id="csGrupos">
                                <option value="#32CD32" data-color="#32CD32" selected="selected">limegreen
                                </option>
                                <option value="#CD5C5C" data-color="#CD5C5C">indianred</option>
                                <option value="#008B8B" data-color="#008B8B">darkcyan</option>
                                <option value="#FFD700" data-color="#FFD700">gold</option>
                                <option value="#48D1CC" data-color="#48D1CC">mediumturquoise</option>
                                <option value="#87CEEB" data-color="#87CEEB">skyblue</option>
                                <option value="#6495ED" data-color="#6495ED">cornflowerblue</option>
                                <option value="#DC143C" data-color="#DC143C">crimson</option>
                                <option value="#FF8C00" data-color="#FF8C00">darkorange</option>
                            </select>
                            <input id="inpNombreGrupo" type="text" class="form-control form-control-sm"
                                placeholder="Nombre del Grupo">
                        </div>
                        <label>Elegir Perspectivas</label>
                        <ul id="selPerspectivas" class="list-group mb-1"></ul>
                        <label>Elegir Temas Estratégicos</label>
                        <ul id="selTemas" class="list-group mb-1"></ul>
                        <button id="btnAgregarGrupo" class="btn btn-outline-primary btn-sm btn-block"
                            type="button">Agregar</button>
                        <ul id="listaGrupos" class="list-group my-1"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col small">
            <div class="card">
                <div class="card-header py-2">
                    4. Objetivos
                </div>
                <div class="card-body py-2">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-1">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Grupo</label>
                                </div>
                                <select id="selGrupos" class="custom-select">
                                    <option selected>Seleccionar...</option>
                                </select>
                            </div>
                            <div class="input-group mb-1">
                                <input type="text" class="form-control form-control-sm"
                                    placeholder="Nombre del Objetivo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-inline">
                                <label class="mx-2">score</label>
                                <input class="form-control form-control-sm" type="number" value="50" min="0" max="100"
                                    step="5" />
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
                            <button type="button" class="btn btn-outline-danger btn-sm float-right m-0">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </li>
                    </ul>
                    <button class="btn btn-outline-primary btn-sm float-right" type="button">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>