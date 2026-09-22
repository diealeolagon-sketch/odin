-- Bootstrap completo para una instalacion nueva de Odin.
CREATE DATABASE IF NOT EXISTS odin_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE odin_db;

CREATE USER IF NOT EXISTS 'odin_app'@'localhost' IDENTIFIED BY 'odin123';
GRANT ALL PRIVILEGES ON odin_db.* TO 'odin_app'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE IF NOT EXISTS roles (
    id_rol INT AUTO_INCREMENT PRIMARY KEY,
    nivel_acceso INT NOT NULL DEFAULT 1,
    nombre VARCHAR(100) NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Activo',
    rol VARCHAR(50) NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS dependencias (
    id_dependencia INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    codigo VARCHAR(50) NOT NULL,
    descripcion TEXT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Activo',
    encargado VARCHAR(150) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    tipo_identificacion VARCHAR(10) NOT NULL,
    num_identificacion VARCHAR(30) NOT NULL UNIQUE,
    nombre VARCHAR(150) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    id_rol INT NOT NULL,
    id_dependencia INT NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'Activo',
    password VARCHAR(255) NOT NULL,
    direccion VARCHAR(200) NULL,
    telefono VARCHAR(30) NULL,
    CONSTRAINT fk_usuarios_rol FOREIGN KEY (id_rol) REFERENCES roles(id_rol),
    CONSTRAINT fk_usuarios_dependencia FOREIGN KEY (id_dependencia) REFERENCES dependencias(id_dependencia)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS permisos (
    id_permiso INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    descripcion TEXT NULL,
    modulo VARCHAR(80) NOT NULL,
    accion VARCHAR(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS rol_permisos (
    id_rol INT NOT NULL,
    id_permiso INT NOT NULL,
    PRIMARY KEY (id_rol, id_permiso),
    CONSTRAINT fk_rol_permisos_rol FOREIGN KEY (id_rol) REFERENCES roles(id_rol) ON DELETE CASCADE,
    CONSTRAINT fk_rol_permisos_permiso FOREIGN KEY (id_permiso) REFERENCES permisos(id_permiso) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO permisos (nombre, descripcion, modulo, accion) VALUES
('ver_radicados', 'Ver listado y detalle de radicados', 'radicados', 'ver'),
('crear_radicado', 'Crear nuevos radicados', 'radicados', 'crear'),
('editar_radicado', 'Editar radicados', 'radicados', 'editar'),
('trasladar_radicado', 'Trasladar radicados entre dependencias', 'radicados', 'trasladar'),
('finalizar_radicado', 'Finalizar radicados', 'radicados', 'finalizar'),
('ver_usuarios', 'Ver usuarios del sistema', 'usuarios', 'ver'),
('admin_usuarios', 'Gestionar usuarios y roles', 'usuarios', 'admin'),
('ver_reportes', 'Acceder a reportes y estadísticas', 'reportes', 'ver'),
('admin_dependencias', 'Gestionar dependencias', 'dependencias', 'admin'),
('admin_ccd', 'Gestionar cuadro de clasificación documental', 'ccd', 'admin');

INSERT IGNORE INTO roles (id_rol, nivel_acceso, nombre, estado, rol)
VALUES (1, 10, 'Administrador', 'Activo', 'admin');

INSERT IGNORE INTO dependencias (id_dependencia, nombre, codigo, descripcion, estado)
VALUES (1, 'Administracion', 'ADM', 'Dependencia inicial del sistema', 'Activo');

INSERT IGNORE INTO usuarios
    (id_usuario, tipo_identificacion, num_identificacion, nombre, correo, id_rol, id_dependencia, estado, password)
VALUES
    (1, 'CC', '1000000000', 'Administrador', 'admin@odin.local', 1, 1, 'Activo', '123456');

-- El administrador existente recibe todos los permisos.
INSERT IGNORE INTO rol_permisos (id_rol, id_permiso)
SELECT r.id_rol, p.id_permiso FROM roles r CROSS JOIN permisos p
WHERE LOWER(COALESCE(r.rol, r.nombre)) IN ('admin', 'administrador');
