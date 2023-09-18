CREATE TABLE tb_clientes(
    id                       INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres                  VARCHAR(255) NULL,
    CI                       VARCHAR(50) NULL,
    email                    VARCHAR(255) NULL,
    email_verificado         VARCHAR(255) NULL,
    telefono                 VARCHAR(50) NULL,
    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
