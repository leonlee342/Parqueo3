CREATE TABLE tb_solicitud_compartido(
    id_compartido            INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sis_docente              VARCHAR(255) NULL,
    propietario              VARCHAR(255) NULL,
    nro_espacio              VARCHAR(255) NULL,
    nombre_usuario           VARCHAR(255) NULL,
    placa                    VARCHAR(255) NULL,
    fecha_inicio             VARCHAR(255) NULL,
    hora_inicio              VARCHAR(255) NULL,
    hora_final               VARCHAR(255) NULL,
    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
