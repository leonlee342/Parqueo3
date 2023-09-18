CREATE TABLE tb_cobros(
    id_cobro                 INT ( 11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_cliente           VARCHAR(255) NULL,
    nit_ci                   VARCHAR(50) NULL,
    placa                    VARCHAR(255) NULL,
    cuota                    VARCHAR(255) NULL,
    estado_cuota             VARCHAR(255) NULL,
    fecha_pago               DATE NULL,

    fyh_creacion             DATETIME NULL,
    fyh_actualizacion        DATETIME NULL,
    fyh_eliminacio           DATETIME NULL,
    estado                   VARCHAR(10) 
 );
