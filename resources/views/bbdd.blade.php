<!-- -- Crear la tabla para personas físicas
CREATE TABLE personas_fisicas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

-- Crear la tabla para personas jurídicas
CREATE TABLE personas_juridicas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_empresa VARCHAR(255) NOT NULL,
    nombre_empresa VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

-- Crear la tabla para máquinas expendedoras
CREATE TABLE maquinas_expendedoras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    latitud DECIMAL(9, 6) NOT NULL,
    longitud DECIMAL(9, 6) NOT NULL,
    calle VARCHAR(255) NOT NULL,
    empresa_id INT,
    estocaje JSON,
    FOREIGN KEY (empresa_id) REFERENCES personas_juridicas(id)
);

-- Crear la tabla para categorías de productos
CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) UNIQUE NOT NULL
);

-- Crear la tabla para productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    maquina_id INT,
    categoria_id INT,
    nombre VARCHAR(255) NOT NULL,
    unidades_disponibles INT NOT NULL,
    foto_url VARCHAR(255),
    FOREIGN KEY (maquina_id) REFERENCES maquinas_expendedoras(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

-- Crear la tabla para roles de acceso a las ventanas
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) UNIQUE NOT NULL
);

-- Crear la tabla para asociar roles a personas jurídicas
CREATE TABLE personas_juridicas_roles (
    persona_juridica_id INT,
    rol_id INT,
    PRIMARY KEY (persona_juridica_id, rol_id),
    FOREIGN KEY (persona_juridica_id) REFERENCES personas_juridicas(id),
    FOREIGN KEY (rol_id) REFERENCES roles(id)
); -->
