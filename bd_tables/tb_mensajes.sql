CREATE TABLE tb_mensaje(
    id_mensaje               INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sis_docente              VARCHAR(255) NULL,
    nombre_docente           VARCHAR(255) NULL,
    asunto_reclamo           VARCHAR(255) NULL,
    mensaje                  VARCHAR(600) NULL,

    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
