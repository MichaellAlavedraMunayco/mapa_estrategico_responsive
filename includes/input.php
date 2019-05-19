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
                                        <select id="colorPerspectiva">
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
                                    <input id="nombrePerspectiva" type="text" class="form-control form-control-sm"
                                        placeholder="Nombre de la Perspectiva">
                                    <div class="input-group-append">
                                        <button id="agregarPerspectiva" class="btn btn-outline-primary btn-sm"
                                            type="button">Agregar</button>
                                    </div>
                                </div>
                                <ul id="listaPerspectiva" class="list-group"></ul>
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
                                    <select id="colorTema">
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
                                    <input id="nombreTema" type="text" class="form-control form-control-sm"
                                        placeholder="Nombre del Tema Estratégico">
                                    <div class="input-group-append">
                                        <button id="agregarTema" class="btn btn-outline-primary btn-sm"
                                            type="button">Agregar</button>
                                    </div>
                                </div>
                                <ul id="listaTema" class="list-group"></ul>
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
                            <select id="colorGrupo">
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
                            <input id="nombreGrupo" type="text" class="form-control form-control-sm"
                                placeholder="Nombre del Grupo">
                        </div>
                        <label>Elegir Perspectiva a la que pertenece</label>
                        <ul id="elegirPerspectiva" class="list-group mb-1"></ul>
                        <label>Elegir Temas Estratégicos a los que pertenece</label>
                        <ul id="elegirTema" class="list-group mb-1"></ul>
                        <label>Agregar Objetivos</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Nombre del Objetivo">
                            <input class="form-control form-control-sm" data-suffix="%" value="80" min="0" max="100"
                                step="5" type="number" placeholder="Indicador" />
                            <input class="form-control form-control-sm" data-suffix="%" value="80" min="0" max="100"
                                step="5" type="number" placeholder="Iniciativa" />
                        </div>
                        <button id="agregarObjetivo" class="btn btn-outline-secondary btn-sm btn-block"
                            type="button">Agregar Objetivo</button>
                        <ul id="listaObjetivo" class="list-group mb-1"></ul>
                        <button id="agregarGrupo" class="btn btn-outline-primary btn-sm btn-block" type="button">Agregar
                            Grupo</button>
                        <ul id="listaGrupo" class="list-group my-1"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>