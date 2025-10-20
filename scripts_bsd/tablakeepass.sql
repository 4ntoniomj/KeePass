use keepass;
CREATE TABLE keepass_usuario (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR (20) NOT NULL,
    contraseña VARCHAR (255) NOT NULL,
    correo VARCHAR(100),
    descripcion TEXT,
    CONSTRAINT FK_user
    FOREIGN KEY (nombre_usuario) REFERENCES usuario(nombreusuario)
    ON UPDATE CASCADE 
    ON DELETE RESTRICT 
);