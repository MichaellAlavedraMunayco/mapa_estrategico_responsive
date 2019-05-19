class Perspectiva {
    constructor(id, nombre, color) {
        this.id = id;
        this.nombre = nombre;
        this.color = color;
    }

    get Id() {
        return this.id;
    }

    get Nombre() {
        return this.nombre;
    }

    get Color() {
        return this.color;
    }

    toString() {
        return `Perspectiva: [id: ${this.id}, nombre: ${this.nombre}, color: ${this.color}]`;
    }
}

class TemaEstrategico {
    constructor(id, nombre, color) {
        this.id = id;
        this.nombre = nombre;
        this.color = color;
    }

    get Id() {
        return this.id;
    }

    get Nombre() {
        return this.nombre;
    }

    get Color() {
        return this.color;
    }

    toString() {
        return `Tema: [id: ${this.id}, nombre: ${this.nombre}, color: ${this.color}]`;
    }
}

class GrupoEstrategico {
    constructor(id, nombre, color, perspectivas, temas) {
        this.id = id;
        this.nombre = nombre;
        this.color = color;
        this.perspectivas = perspectivas;
        this.temas = temas;
    }

    get Id() {
        return this.id;
    }

    get Nombre() {
        return this.nombre;
    }

    get Color() {
        return this.color;
    }

    get Perspectivas() {
        return this.perspectivas;
    }

    get Temas() {
        return this.temas;
    }

    toString() {
        var strPers = '', strTem = '';
        for (let i = 0; i < this.perspectivas.length; i++) {
            const perspectiva = this.perspectivas[i];
            strPers += `{id: ${perspectiva.id}, nombre: ${perspectiva.nombre}},`;
        }
        for (let i = 0; i < this.temas.length; i++) {
            const tema = this.temas[i];
            strTem += `{id: ${tema.id}, nombre: ${tema.nombre}},`;
        }
        return `Grupo: [id: ${this.id}, nombre: ${this.nombre}, color: ${this.color}, 
            Perspectivas = [${strPers}],
            Temas = [${strTem}]]`;
    }
}