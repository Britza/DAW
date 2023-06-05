CREATE TABLE viajeros (
  id INTEGER PRIMARY KEY,
  nombre TEXT NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  nacionalidad TEXT NOT NULL,
  residencia TEXT NOT NULL
);

CREATE TABLE ciudades (
  id INTEGER PRIMARY KEY,
  nombre TEXT NOT NULL,
  habitantes INTEGER NOT NULL,
  descripcion TEXT NOT NULL
);

CREATE TABLE vuelos (
  id INTEGER PRIMARY KEY,
  id_viajero INTEGER NOT NULL,
  origen INTEGER NOT NULL,
  destino INTEGER NOT NULL,
  fecha_salida DATE NOT NULL,
  fecha_llegada DATE NOT NULL,
  FOREIGN KEY (id_viajero) REFERENCES viajeros (id),
  FOREIGN KEY (origen) REFERENCES ciudades (id),
  FOREIGN KEY (destino) REFERENCES ciudades (id)
);