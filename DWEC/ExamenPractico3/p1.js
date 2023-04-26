class Persona {
    constructor(nombre, apellidos, dni, fecha_nacimiento, altura) {
        this.nombre = nombre;
        this.apellidos = apellidos;
        this.dni = dni;
        this.fecha_nacimiento = fecha_nacimiento;
        this.altura = altura;
    }

    quien_soy_yo() {
        console.log(`Me llamo ${this.nombre} ${this.apellidos} y mi dni es ${this.dni}`);
    }

    edad() {
        let hoy = new Date();
        let fecha_nac = new Date(this.fecha_nacimiento);
        let edad = hoy.getFullYear() - fecha_nac.getFullYear();
        let mes = hoy.getMonth() - fecha_nac.getMonth();
        if (mes < 0 || (mes === 0 && hoy.getDate() < fecha_nac.getDate())) {
            edad--;
        }
        console.log(`Tengo ${edad} años`);
    }
}

let persona1 = new Persona("Britza", "Zegarra Flores", "12345678A", "2001-11-10", 1.61);
persona1.quien_soy_yo();
persona1.edad();