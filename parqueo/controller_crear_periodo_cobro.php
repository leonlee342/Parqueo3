<?php

include ('../app/config.php');

$placa = $_GET['placa'];
$nit_ci = $_GET['nit_ci'];
$fecha_alta = $_GET['fecha_ingreso'];
$cuviculo = $_GET['cuviculo'];

date_default_timezone_set("America/Caracas");
$fechaHora = date( "Y-m-d h:i:s");

$fecha_actual = $fechaHora;

$dia = date("d"); //dia de contrato
$mes = date('m');
if($mes == "1")$mes = "Enero";
if($mes == "2")$mes = "Febrero";
if($mes == "3")$mes = "Marzo";
if($mes == "4")$mes = "Abril";
if($mes == "5")$mes = "Mayo";
if($mes == "6")$mes = "Junio";
if($mes == "7")$mes = "Julio";
if($mes == "8")$mes = "Agosto";
if($mes == "9")$mes = "Septiembre";
if($mes == "10")$mes = "Octubre";
if($mes == "11")$mes = "Noviembre";
if($mes == "12")$mes = "Diciembre";

$ano = date('Y');
$estado_cobro = "Al dia";

////////////////////////FECHA INCIAL DE VENCIMIENTO//////// 
$fecha_cobro = date ( 'Y-m-d' , strtotime($fecha_alta. '+ 1 month'));
echo $estado_cobro;