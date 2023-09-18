CREATE TABLE tb_vehiculos(
    id                       INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    placa                    VARCHAR(20) NULL,
    marca                    VARCHAR(20) NULL,
    modelo                   VARCHAR(20) NULL,
    color                    VARCHAR(20) NULL,
    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );