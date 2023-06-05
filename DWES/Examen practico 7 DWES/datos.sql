INSERT INTO viajeros (nombre, fecha_nacimiento, nacionalidad, residencia)
VALUES ('Juan', '1980-05-23', 'Español', 'Madrid'),
       ('María', '1995-08-12', 'Española', 'Barcelona'),
       ('Carlos', '1974-03-17', 'Español', 'Valencia'),
       ('Ana', '1988-11-29', 'Española', 'Sevilla');

INSERT INTO ciudades (nombre, habitantes, descripcion)
VALUES ('Madrid', 3223334, 'Capital de España con muchos monumentos'),
       ('Barcelona', 1620343, 'Ciudad cosmopolita con playa y arquitectura modernista'),
       ('Valencia', 791413, 'Ciudad de la paella y las Fallas'),
       ('Sevilla', 689434, 'Ciudad con mucha historia y arte');

INSERT INTO vuelos (id_viajero, origen, destino, fecha_salida, fecha_llegada)
VALUES (1, 1, 2, '2023-06-01', '2023-06-05'),
       (1, 2, 3, '2023-06-06', '2023-06-10'),
       (2, 2, 1, '2023-07-01', '2023-07-05'),
       (3, 3, 4, '2023-08-01', '2023-08-05');