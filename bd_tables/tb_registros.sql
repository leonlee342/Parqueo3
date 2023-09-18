CREATE TABLE tb_registros(
    id_registro              INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sis_docente              VARCHAR(255) NULL,
    placa                    VARCHAR(50) NULL,

    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
