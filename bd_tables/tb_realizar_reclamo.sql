CREATE TABLE tb_realizar_reclamo(
    id_reclamo               INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sis_docente              VARCHAR(255) NULL,
    nombre_docente           VARCHAR(255) NULL,
    asunto_reclamo           VARCHAR(255) NULL,
    redactar_reclamo         VARCHAR(600) NULL,

    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacion           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
