<!-- Esto es el panel principal del Administrador -->
<?php
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');
?>
          
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <?php  include('../layout/admin/head.php');?>
    </head>
  
      <body class="hold-transition sidebar-mini">
 
        <div class="wrapper">
          <!-- MESta parte esta en menu.php-->
          <?php  include('../layout/admin/menu.php');?>
              
            <!--    <div class="content-wrapper">   -->

            <!-- INICIO TARJETA-->
          <div class="content-wrapper"  style="background-color: aqua">
        
<center><h3>Parqueo Nro. 1</h3></center>
              <div  class="container" style="position:relative; background-color: aqua;
               width: 1000px;height: 500px; border-radius: 20px;
               background-image: url('../public/imagenes/parqueo10.png');
               background-repeat:no-repeat;
               background-size: 74vw 76vh "> 

               <?php
                $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = '1'");
                $query_mapeos->execute();
                $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                foreach ($mapeos as $mapeo){
                    $id_map = $mapeo ['id_map'];
                    $nro_espacio = $mapeo['nro_espacio'];
                    $estado_espacio = $mapeo['estado_espacio'];

                 if($id_map == "1"){
                    $estado_espacio_1 = $estado_espacio;
                 }else if($id_map == "2"){
                    $estado_espacio_2 = $estado_espacio;
                 }else if($id_map == "3"){
                    $estado_espacio_3 = $estado_espacio;
                 }else if($id_map == "4"){
                    $estado_espacio_4 = $estado_espacio;
                 }else if($id_map == "5"){
                    $estado_espacio_5 = $estado_espacio;
                 }else if($id_map == "6"){
                    $estado_espacio_6 = $estado_espacio;
                 }else if($id_map == "7"){
                    $estado_espacio_7 = $estado_espacio;
                 }else if($id_map == "8"){
                    $estado_espacio_8 = $estado_espacio;
                 }else if($id_map == "9"){
                    $estado_espacio_9 = $estado_espacio;
                 }else if($id_map == "10"){
                    $estado_espacio_10 = $estado_espacio;
                 } else if($id_map == "11"){
                    $estado_espacio_11 = $estado_espacio;
                 } else if($id_map == "12"){
                    $estado_espacio_12 = $estado_espacio;
                 } else if($id_map == "13"){
                    $estado_espacio_13 = $estado_espacio;
                 } else if($id_map == "14"){
                    $estado_espacio_14 = $estado_espacio;
                 } else if($id_map == "15"){
                    $estado_espacio_15 = $estado_espacio;
                 } else if($id_map == "16"){
                    $estado_espacio_16 = $estado_espacio;
                 } else if($id_map == "17"){
                    $estado_espacio_17 = $estado_espacio;
                 } else if($id_map == "18"){
                    $estado_espacio_18 = $estado_espacio;
                 } else if($id_map == "19"){
                    $estado_espacio_19 = $estado_espacio;
                 } else if($id_map == "20"){
                    $estado_espacio_20 = $estado_espacio;
                 } else if($id_map == "21"){
                    $estado_espacio_21 = $estado_espacio;
                 } else if($id_map == "22"){
                    $estado_espacio_22 = $estado_espacio;
                 } else if($id_map == "23"){
                    $estado_espacio_23 = $estado_espacio;
                 } else if($id_map == "24"){
                    $estado_espacio_24 = $estado_espacio;
                 } else if($id_map == "25"){
                    $estado_espacio_25 = $estado_espacio;
                 } else if($id_map == "26"){
                    $estado_espacio_26 = $estado_espacio;
                 } else if($id_map == "27"){
                    $estado_espacio_27 = $estado_espacio;
                 } else if($id_map == "28"){
                    $estado_espacio_28 = $estado_espacio;
                 } else if($id_map == "29"){
                    $estado_espacio_29 = $estado_espacio;
                 } else if($id_map == "30"){
                    $estado_espacio_30 = $estado_espacio;
                 } else if($id_map == "31"){
                    $estado_espacio_31 = $estado_espacio;
                 } else if($id_map == "32"){
                    $estado_espacio_32 = $estado_espacio;
                 } else if($id_map == "33"){
                    $estado_espacio_33 = $estado_espacio;
                 } else if($id_map == "34"){
                    $estado_espacio_34 = $estado_espacio;
                 } else if($id_map == "35"){
                    $estado_espacio_35 = $estado_espacio;
                 } else if($id_map == "36"){
                    $estado_espacio_36 = $estado_espacio;
                 } else if($id_map == "37"){
                    $estado_espacio_37 = $estado_espacio;
                 } else if($id_map == "38"){
                    $estado_espacio_38 = $estado_espacio;
                 } else if($id_map == "39"){
                    $estado_espacio_39 = $estado_espacio;
                 } else if($id_map == "40"){
                    $estado_espacio_40 = $estado_espacio;
                 } else if($id_map == "41"){
                    $estado_espacio_41 = $estado_espacio;
                 } else if($id_map == "42"){
                    $estado_espacio_42 = $estado_espacio;
                 } else if($id_map == "43"){
                    $estado_espacio_43 = $estado_espacio;
                 } else if($id_map == "44"){
                    $estado_espacio_44 = $estado_espacio;
                 } else if($id_map == "45"){
                    $estado_espacio_45 = $estado_espacio;
                 } else if($id_map == "46"){
                    $estado_espacio_46 = $estado_espacio;
                 } else if($id_map == "47"){
                    $estado_espacio_47 = $estado_espacio;
                 } else if($id_map == "48"){
                    $estado_espacio_48 = $estado_espacio;
                 } else if($id_map == "49"){
                    $estado_espacio_49 = $estado_espacio;
                 } else if($id_map == "50"){
                    $estado_espacio_50 = $estado_espacio;
                 } else if($id_map == "51"){
                    $estado_espacio_51 = $estado_espacio;
                 } else if($id_map == "52"){
                    $estado_espacio_52 = $estado_espacio;
                 } else if($id_map == "53"){
                    $estado_espacio_53 = $estado_espacio;
                 } else if($id_map == "54"){
                    $estado_espacio_54 = $estado_espacio;
                 } else if($id_map == "55"){
                    $estado_espacio_55 = $estado_espacio;
                 } else if($id_map == "56"){
                    $estado_espacio_56 = $estado_espacio;
                 } else if($id_map == "57"){
                    $estado_espacio_57 = $estado_espacio;
                 } else if($id_map == "58"){
                    $estado_espacio_58 = $estado_espacio;
                 } else if($id_map == "59"){
                    $estado_espacio_59 = $estado_espacio;
                 } else if($id_map == "60"){
                    $estado_espacio_60 = $estado_espacio;
                 } else if($id_map == "61"){
                    $estado_espacio_61 = $estado_espacio;
                 } else if($id_map == "62"){
                    $estado_espacio_62 = $estado_espacio;
                 } else if($id_map == "63"){
                    $estado_espacio_63 = $estado_espacio;
                 }    
                }?>           

                    <!-- SUPERIOR -->
                        <!-- ******************************1***************************** -->
                    <?php if ($estado_espacio_1 == "OCUPADO"){?>      
                        <div class="col" id="1" style="position:absolute; top: 0%; right:30%">
                            <center class="">
                                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                </button>                                            
                            </center>                          
                        </div> 
                    <?php } ?>
                            
                    <?php if ($estado_espacio_1 == "DISPONIBLE"){?>
                        <div class="col" id="1" style="position:absolute; top: 0%; right:30%">
                            <center class="">
                                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                   <h3>1</h3>
                                </button>                                            
                            </center>                          
                        </div>
                    <?php } ?>

                    <?php if ($estado_espacio_1 == "LIBRE"){?>
                        <div class="col" id="1" style="position:absolute; top: 0%; right:30%">
                            <center class="">
                                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                   <h3>1</h3>
                                </button>                                            
                            </center>                          
                        </div>
                    <?php } ?>
                    
                      <!-- ******************************2***************************** -->
                                            
                    <?php if ($estado_espacio_2 == "OCUPADO"){?>

                            <div class="col" id="2" style="position:absolute; top: 0%; right:25%">
                                <center class="">
                                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                    </button>                                            
                                </center>                          
                            </div> 
                        <?php
                        }if ($estado_espacio_2 == "DISPONIBLE"){?>

                            <div class="col" id="2" style="position:absolute; top: 0%; right:25%">
                                <center class="">
                                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>2</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                        <?php
                        }if ($estado_espacio_2 == "LIBRE"){?>

                            <div class="col" id="2" style="position:absolute; top: 0%; right:25%">
                                <center class="">
                                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>2</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                        <?php
                        }
                        ?>

                            <!-- ******************************3***************************** -->

                        <?php if ($estado_espacio_3 == "OCUPADO"){?>

                            <div class="col" id="3" style="position:absolute; top: 0%; right:20%">
                                <center class="">
                                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                    </button>                                            
                                </center>                          
                            </div> 
                            <?php
                            }if ($estado_espacio_3 == "DISPONIBLE"){?>

                            <div class="col" id="3" style="position:absolute; top: 0%; right:20%">
                                <center class="">
                                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>3</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }if ($estado_espacio_3 == "LIBRE"){?>

                            <div class="col" id="3" style="position:absolute; top: 0%; right:20%">
                                <center class="">
                                    <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>3</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }
                            ?>

                            <!-- ******************************4***************************** -->
                            <?php if ($estado_espacio_4 == "OCUPADO"){?>

                            <div class="col" id="4" style="position:absolute; top: 0%; right:15%">
                                <center class="">
                                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                    </button>                                            
                                </center>                          
                            </div> 
                            <?php
                            }if ($estado_espacio_4 == "DISPONIBLE"){?>

                            <div class="col" id="3" style="position:absolute; top: 0%; right:15%">
                                <center class="">
                                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>4</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }if ($estado_espacio_4 == "LIBRE"){?>

                            <div class="col" id="4" style="position:absolute; top: 0%; right:15%">
                                <center class="">
                                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>4</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }
                            ?>
                        <!-- ******************************5***************************** -->

                        <?php if ($estado_espacio_5 == "OCUPADO"){?>

                            <div class="col" id="5" style="position:absolute; top: 0%; right:10%">
                                <center class="">
                                    <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                    </button>                                            
                                </center>                          
                            </div> 
                            <?php
                            }if ($estado_espacio_5 == "DISPONIBLE"){?>

                            <div class="col" id="5" style="position:absolute; top: 0%; right:10%">
                                <center class="">
                                    <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>5</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }if ($estado_espacio_5 == "LIBRE"){?>

                            <div class="col" id="5" style="position:absolute; top: 0%; right:10%">
                                <center class="">
                                    <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                    <h3>5</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }
                            ?>

                                <!-- ******************************6***************************** -->

                                <?php if ($estado_espacio_6 == "OCUPADO"){?>

                                <div class="col" id="6" style="position:absolute; top: 0%; right:5%">
                                    <center class="">
                                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                        </button>                                            
                                    </center>                          
                                </div> 
                                <?php
                                }if ($estado_espacio_6 == "DISPONIBLE"){?>

                                <div class="col" id="6" style="position:absolute; top: 0%; right:5%">
                                    <center class="">
                                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                        <h3>6</h3>
                                        </button>                                            
                                    </center>                          
                                </div>

                                <?php
                                }if ($estado_espacio_6 == "LIBRE"){?>

                                <div class="col" id="6" style="position:absolute; top: 0%; right:5%">
                                    <center class="">
                                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                        <h3>6</h3>
                                        </button>                                            
                                    </center>                          
                                </div>

                                <?php
                                }
                                ?>

                                    <!-- ******************************7***************************** -->

                                    <?php if ($estado_espacio_7 == "OCUPADO"){?>

                                    <div class="col" id="7" style="position:absolute; top: 0%; right:0%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_7 == "DISPONIBLE"){?>

                                    <div class="col" id="7" style="position:absolute; top: 0%; right:0%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>7</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_7 == "LIBRE"){?>

                                    <div class="col" id="7" style="position:absolute; top: 0%; right:0%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>7</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                    <!-- ******************************8**************************** -->

                                    <?php if ($estado_espacio_8 == "OCUPADO"){?>

                                    <div class="col" id="8" style="position:absolute; top: 0%; right:-5%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_8 == "DISPONIBLE"){?>

                                    <div class="col" id="8" style="position:absolute; top: 0%; right:-5%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>8</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_8 == "LIBRE"){?>

                                    <div class="col" id="8" style="position:absolute; top: 0%; right:-5%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>8</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>
                                    <!-- ******************************9**************************** -->
                                    <?php if ($estado_espacio_9 == "OCUPADO"){?>

                                    <div class="col" id="9" style="position:absolute; top: 0%; right:-10%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_9 == "DISPONIBLE"){?>

                                    <div class="col" id="9" style="position:absolute; top: 0%; right:-10%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>9</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_9 == "LIBRE"){?>

                                    <div class="col" id="9" style="position:absolute; top: 0%; right:-10%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>9</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>
                                    <!-- ******************************10**************************** -->
                                    <?php if ($estado_espacio_10 == "OCUPADO"){?>

                                    <div class="col" id="10" style="position:absolute; top: 0%; right:-15%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_10 == "DISPONIBLE"){?>

                                    <div class="col" id="10" style="position:absolute; top: 0%; right:-15%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>10</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_10 == "LIBRE"){?>

                                    <div class="col" id="10" style="position:absolute; top: 0%; right:-15%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>10</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>
                                    <!-- ******************************11**************************** -->
  
                                    <?php if ($estado_espacio_11 == "OCUPADO"){?>

                                    <div class="col" id="11" style="position:absolute; top: 0%; right:-20%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_11 == "DISPONIBLE"){?>

                                    <div class="col" id="11" style="position:absolute; top: 0%; right:-20%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>11</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_11 == "LIBRE"){?>

                                    <div class="col" id="11" style="position:absolute; top: 0%; right:-20%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>11</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                    <!-- ******************************12**************************** -->
                                    <?php if ($estado_espacio_12 == "OCUPADO"){?>

                                    <div class="col" id="12" style="position:absolute; top: 0%; right:-25%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_12 == "DISPONIBLE"){?>

                                    <div class="col" id="12" style="position:absolute; top: 0%; right:-25%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>12</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_12 == "LIBRE"){?>

                                    <div class="col" id="12" style="position:absolute; top: 0%; right:-25%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>12</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>
  
                                    <!-- ******************************13**************************** -->
  
                                    <?php if ($estado_espacio_13 == "OCUPADO"){?>

                                    <div class="col" id="13" style="position:absolute; top: 0%; right:-30%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_13 == "DISPONIBLE"){?>

                                    <div class="col" id="13" style="position:absolute; top: 0%; right:-30%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>13</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_13 == "LIBRE"){?>

                                    <div class="col" id="13" style="position:absolute; top: 0%; right:-30%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>13</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>
                                    <!-- ******************************14**************************** -->
  
                                    <?php if ($estado_espacio_14 == "OCUPADO"){?>

                                    <div class="col" id="14" style="position:absolute; top: 0%; right:-35%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_14 == "DISPONIBLE"){?>

                                    <div class="col" id="14" style="position:absolute; top: 0%; right:-35%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>14</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_14 == "LIBRE"){?>

                                    <div class="col" id="14" style="position:absolute; top: 0%; right:-35%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>14</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                   <!-- ******************************15**************************** --> 

                                   <?php if ($estado_espacio_15 == "OCUPADO"){?>

                                    <div class="col" id="15" style="position:absolute; top: 0%; right:-40%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_15 == "DISPONIBLE"){?>

                                    <div class="col" id="15" style="position:absolute; top: 0%; right:-40%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>15</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_15 == "LIBRE"){?>

                                    <div class="col" id="15" style="position:absolute; top: 0%; right:-40%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                                            <h3>15</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                    <!-- ******************************16**************************** --> 

                                    <?php if ($estado_espacio_16 == "OCUPADO"){?>

                                    <div class="col" id="16" style="position:absolute; top: 14%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_16 == "DISPONIBLE"){?>

                                    <div class="col" id="16" style="position:absolute; top: 14%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                            <h3>16</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_16 == "LIBRE"){?>

                                    <div class="col" id="16" style="position:absolute; top: 14%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                            <h3>16</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                    <!-- ******************************17**************************** --> 

                                    <?php if ($estado_espacio_17 == "OCUPADO"){?>

                                    <div class="col" id="17" style="position:absolute; top: 22%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                                <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                                            </button>                                            
                                        </center>                          
                                    </div> 
                                    <?php
                                    }if ($estado_espacio_17 == "DISPONIBLE"){?>

                                    <div class="col" id="17" style="position:absolute; top: 22%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                            <h3>17</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }if ($estado_espacio_17 == "LIBRE"){?>

                                    <div class="col" id="17" style="position:absolute; top: 22%; right:-44%">
                                        <center class="">
                                            <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                            <h3>17</h3>
                                            </button>                                            
                                        </center>                          
                                    </div>

                                    <?php
                                    }
                                    ?>

                                <!-- ******************************18**************************** --> 

                                <?php if ($estado_espacio_18 == "OCUPADO"){?>

                                <div class="col" id="18" style="position:absolute; top: 30%; right:-44%">
                                    <center class="">
                                        <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                            <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                                        </button>                                            
                                    </center>                          
                                </div> 
                                <?php
                                }if ($estado_espacio_18 == "DISPONIBLE"){?>

                                <div class="col" id="18" style="position:absolute; top: 30%; right:-44%">
                                    <center class="">
                                        <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                        <h3>18</h3>
                                        </button>                                            
                                    </center>                          
                                </div>

                                <?php
                                }if ($estado_espacio_18 == "LIBRE"){?>

                                <div class="col" id="18" style="position:absolute; top: 30%; right:-44%">
                                    <center class="">
                                        <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                        <h3>18</h3>
                                        </button>                                            
                                    </center>                          
                                </div>

                                <?php
                                }
                                ?>
                            <!-- ******************************19**************************** --> 

                            <?php if ($estado_espacio_19 == "OCUPADO"){?>

                            <div class="col" id="19" style="position:absolute; top: 38%; right:-44%">
                                <center class="">
                                    <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                        <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                                    </button>                                            
                                </center>                          
                            </div> 
                            <?php
                            }if ($estado_espacio_19 == "DISPONIBLE"){?>

                            <div class="col" id="19" style="position:absolute; top: 38%; right:-44%">
                                <center class="">
                                    <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                    <h3>19</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }if ($estado_espacio_19 == "LIBRE"){?>

                            <div class="col" id="19" style="position:absolute; top: 38%; right:-44%">
                                <center class="">
                                    <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                    <h3>19</h3>
                                    </button>                                            
                                </center>                          
                            </div>

                            <?php
                            }
                            ?>
                        <!-- ******************************20**************************** --> 

                        <?php if ($estado_espacio_20 == "OCUPADO"){?>

                        <div class="col" id="20" style="position:absolute; top: 46%; right:-44%">
                            <center class="">
                                <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                    <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                                </button>                                            
                            </center>                          
                        </div> 
                        <?php
                        }if ($estado_espacio_20 == "DISPONIBLE"){?>

                        <div class="col" id="20" style="position:absolute; top: 46%; right:-44%">
                            <center class="">
                                <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                <h3>20</h3>
                                </button>                                            
                            </center>                          
                        </div>

                        <?php
                        }if ($estado_espacio_20 == "LIBRE"){?>

                        <div class="col" id="20" style="position:absolute; top: 46%; right:-44%">
                            <center class="">
                                <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                                <h3>20</h3>
                                </button>                                            
                            </center>                          
                        </div>

                        <?php
                        }
                        ?>
                    <!-- ******************************21**************************** --> 

                    <?php if ($estado_espacio_21 == "OCUPADO"){?>

                    <div class="col" id="21" style="position:absolute; top: 54%; right:-44%">
                        <center class="">
                            <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                                <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                            </button>                                            
                        </center>                          
                    </div> 
                    <?php
                    }if ($estado_espacio_21 == "DISPONIBLE"){?>

                    <div class="col" id="21" style="position:absolute; top: 54%; right:-44%">
                        <center class="">
                            <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                            <h3>21</h3>
                            </button>                                            
                        </center>                          
                    </div>

                    <?php
                    }if ($estado_espacio_21 == "LIBRE"){?>

                    <div class="col" id="21" style="position:absolute; top: 54%; right:-44%">
                        <center class="">
                            <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                            <h3>21</h3>
                            </button>                                            
                        </center>                          
                    </div>

                    <?php
                    }
                    ?>

                <!-- ******************************22**************************** --> 

                <?php if ($estado_espacio_22 == "OCUPADO"){?>

                <div class="col" id="22" style="position:absolute; top: 62%; right:-44%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_22 == "DISPONIBLE"){?>

                <div class="col" id="22" style="position:absolute; top: 62%; right:-44%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                        <h3>22</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_22 == "LIBRE"){?>

                <div class="col" id="22" style="position:absolute; top: 62%; right:-44%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                        <h3>22</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>

                <!-- ******************************23**************************** --> 

                <?php if ($estado_espacio_23 == "OCUPADO"){?>

                <div class="col" id="23" style="position:absolute; top: 70%; right:-44%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_23 == "DISPONIBLE"){?>

                <div class="col" id="23" style="position:absolute; top: 70%; right:-44%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                        <h3>23</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_23 == "LIBRE"){?>

                <div class="col" id="22" style="position:absolute; top: 70%; right:-44%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                        <h3>23</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
                <!-- ******************************24**************************** --> 

                <?php if ($estado_espacio_24 == "OCUPADO"){?>

                <div class="col" id="24" style="position:absolute; top: 87%; right:-30%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_24 == "DISPONIBLE"){?>

                <div class="col" id="24" style="position:absolute; top: 87%; right:-30%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>24</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_24 == "LIBRE"){?>

                <div class="col" id="13" style="position:absolute; top: 87%; right:-30%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>24</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
                <!-- ******************************25**************************** --> 
                <?php if ($estado_espacio_25 == "OCUPADO"){?>

                <div class="col" id="25" style="position:absolute; top: 87%; right:-25%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_25 == "DISPONIBLE"){?>

                <div class="col" id="25" style="position:absolute; top: 87%; right:-25%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>25</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_25 == "LIBRE"){?>

                <div class="col" id="25" style="position:absolute; top: 87%; right:-25%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>25</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
  
                <!-- ******************************26**************************** --> 
                <?php if ($estado_espacio_26 == "OCUPADO"){?>

                <div class="col" id="26" style="position:absolute; top: 87%; right:-20%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_26 == "DISPONIBLE"){?>

                <div class="col" id="26" style="position:absolute; top: 87%; right:-20%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>26</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_26 == "LIBRE"){?>

                <div class="col" id="26" style="position:absolute; top: 87%; right:-20%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>26</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
                <!-- ******************************27**************************** --> 

                <?php if ($estado_espacio_27 == "OCUPADO"){?>

                <div class="col" id="27" style="position:absolute; top: 87%; right:-15%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_27 == "DISPONIBLE"){?>

                <div class="col" id="27" style="position:absolute; top: 87%; right:-15%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>27</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_27 == "LIBRE"){?>

                <div class="col" id="27" style="position:absolute; top: 87%; right:-15%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>27</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>     
                <!-- ******************************28**************************** --> 

                <?php if ($estado_espacio_28 == "OCUPADO"){?>

                <div class="col" id="28" style="position:absolute; top: 87%; right: 15%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_28 == "DISPONIBLE"){?>

                <div class="col" id="28" style="position:absolute; top: 87%; right: 15%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>28</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_28 == "LIBRE"){?>

                <div class="col" id="28" style="position:absolute; top: 87%; right: 15%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>28</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>   
                <!-- ******************************29**************************** --> 

                <?php if ($estado_espacio_29 == "OCUPADO"){?>

                <div class="col" id="29" style="position:absolute; top: 87%; right: 20%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_29 == "DISPONIBLE"){?>

                <div class="col" id="29" style="position:absolute; top: 87%; right: 20%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>29</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_29 == "LIBRE"){?>

                <div class="col" id="28" style="position:absolute; top: 87%; right: 20%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>29</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
                <!-- ******************************30**************************** --> 

                <?php if ($estado_espacio_30 == "OCUPADO"){?>

                <div class="col" id="30" style="position:absolute; top: 87%; right: 25%">
                    <center class="">
                        <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                            <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                        </button>                                            
                    </center>                          
                </div> 
                <?php
                }if ($estado_espacio_30 == "DISPONIBLE"){?>

                <div class="col" id="30" style="position:absolute; top: 87%; right: 25%">
                    <center class="">
                        <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>30</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }if ($estado_espacio_30 == "LIBRE"){?>

                <div class="col" id="30" style="position:absolute; top: 87%; right: 25%">
                    <center class="">
                        <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                        <h3>30</h3>
                        </button>                                            
                    </center>                          
                </div>

                <?php
                }
                ?>
            <!-- ******************************31**************************** --> 
            <?php if ($estado_espacio_31 == "OCUPADO"){?>

            <div class="col" id="31" style="position:absolute; top: 87%; right: 30%">
                <center class="">
                    <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_31 == "DISPONIBLE"){?>

            <div class="col" id="31" style="position:absolute; top: 87%; right: 30%">
                <center class="">
                    <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>31</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_31 == "LIBRE"){?>

            <div class="col" id="31" style="position:absolute; top: 87%; right: 30%">
                <center class="">
                    <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>31</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************32**************************** --> 
            <?php if ($estado_espacio_32 == "OCUPADO"){?>

            <div class="col" id="32" style="position:absolute; top: 70%; right: 49%">
                <center class="">
                    <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_32 == "DISPONIBLE"){?>

            <div class="col" id="32" style="position:absolute; top: 70%; right: 49%">
                <center class="">
                    <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                    <h3>32</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_32 == "LIBRE"){?>

            <div class="col" id="32" style="position:absolute; top: 70%; right: 49%">
                <center class="">
                    <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                    <h3>32</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************33**************************** --> 

            <?php if ($estado_espacio_33 == "OCUPADO"){?>

            <div class="col" id="33" style="position:absolute; top: 60%; right: 49%">
                <center class="">
                    <button class="btn btn-info"  id="" style="position: absolute; width: 55px; height: 35px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto2.png" height="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_33 == "DISPONIBLE"){?>

            <div class="col" id="33" style="position:absolute; top: 60%; right: 49%">
                <center class="">
                    <button class="btn btn-warning"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                    <h3>33</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_33 == "LIBRE"){?>

            <div class="col" id="32" style="position:absolute; top: 60%; right: 49%">
                <center class="">
                    <button class="btn btn-success"  id="" style="position: absolute; width: 55px; height: 35px" >                                  
                    <h3>33</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************34**************************** --> 
            <?php if ($estado_espacio_34 == "OCUPADO"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right:15%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_34 == "DISPONIBLE"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right:15%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>34</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_34 == "LIBRE"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right:15%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>34</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************35**************************** --> 

            <?php if ($estado_espacio_35 == "OCUPADO"){?>

            <div class="col" id="35" style="position:absolute; top: 20%; right:10%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_35 == "DISPONIBLE"){?>

            <div class="col" id="35" style="position:absolute; top: 20%; right:10%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>35</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_35 == "LIBRE"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right:10%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>35</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************36**************************** --> 
            <?php if ($estado_espacio_36 == "OCUPADO"){?>

            <div class="col" id="36" style="position:absolute; top: 20%; right:-15%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_36 == "DISPONIBLE"){?>

            <div class="col" id="35" style="position:absolute; top: 20%; right: -15%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>36</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_36 == "LIBRE"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right: -15%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>36</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>

            <!-- ******************************37**************************** --> 

            <?php if ($estado_espacio_37 == "OCUPADO"){?>

            <div class="col" id="37" style="position:absolute; top: 20%; right:-20%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_37 == "DISPONIBLE"){?>

            <div class="col" id="37" style="position:absolute; top: 20%; right:-20%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>37</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_37 == "LIBRE"){?>

            <div class="col" id="34" style="position:absolute; top: 20%; right: -20%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>37</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************38**************************** --> 

            <?php if ($estado_espacio_38 == "OCUPADO"){?>

            <div class="col" id="38" style="position:absolute; top: 20%; right:-25%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_38 == "DISPONIBLE"){?>

            <div class="col" id="38" style="position:absolute; top: 20%; right:-25%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>38</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_38 == "LIBRE"){?>

            <div class="col" id="38" style="position:absolute; top: 20%; right: -25%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>38</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>

            <!-- ******************************39**************************** --> 

            <?php if ($estado_espacio_39 == "OCUPADO"){?>

            <div class="col" id="39" style="position:absolute; top: 20%; right:-30%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_39 == "DISPONIBLE"){?>

            <div class="col" id="39" style="position:absolute; top: 20%; right:-30%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>39</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_39 == "LIBRE"){?>

            <div class="col" id="39" style="position:absolute; top: 20%; right: -30%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>39</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************40**************************** --> 
            <?php if ($estado_espacio_40 == "OCUPADO"){?>

            <div class="col" id="40" style="position:absolute; top: 32%; right:-30%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_40 == "DISPONIBLE"){?>

            <div class="col" id="40" style="position:absolute; top: 32%; right:-30%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>40</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_40 == "LIBRE"){?>

            <div class="col" id="39" style="position:absolute; top: 32%; right: -30%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>40</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************41**************************** --> 
            <?php if ($estado_espacio_41 == "OCUPADO"){?>

            <div class="col" id="41" style="position:absolute; top: 32%; right:-25%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_41 == "DISPONIBLE"){?>

            <div class="col" id="41" style="position:absolute; top: 32%; right:-25%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>41</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_41 == "LIBRE"){?>

            <div class="col" id="39" style="position:absolute; top: 32%; right: -25%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>41</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************42**************************** --> 

            <?php if ($estado_espacio_42 == "OCUPADO"){?>

            <div class="col" id="42" style="position:absolute; top: 32%; right:-20%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_42 == "DISPONIBLE"){?>

            <div class="col" id="42" style="position:absolute; top: 32%; right:-20%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>42</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_42 == "LIBRE"){?>

            <div class="col" id="39" style="position:absolute; top: 32%; right: -20%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>42</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************43**************************** -->
            <?php if ($estado_espacio_43 == "OCUPADO"){?>

            <div class="col" id="43" style="position:absolute; top: 32%; right:-15%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_43 == "DISPONIBLE"){?>

            <div class="col" id="43" style="position:absolute; top: 32%; right:-15%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>43</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_43 == "LIBRE"){?>

            <div class="col" id="43" style="position:absolute; top: 32%; right: -15%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>43</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************44**************************** -->
            <?php if ($estado_espacio_44 == "OCUPADO"){?>

            <div class="col" id="44" style="position:absolute; top: 32%; right:15%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_44 == "DISPONIBLE"){?>

            <div class="col" id="44" style="position:absolute; top: 32%; right: 15%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>44</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_44 == "LIBRE"){?>

            <div class="col" id="44" style="position:absolute; top: 32%; right: 15%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>44</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************45**************************** -->
            <?php if ($estado_espacio_45 == "OCUPADO"){?>

            <div class="col" id="45" style="position:absolute; top: 32%; right:10%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_45 == "DISPONIBLE"){?>

            <div class="col" id="45" style="position:absolute; top: 32%; right: 10%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>45</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_45 == "LIBRE"){?>

            <div class="col" id="45" style="position:absolute; top: 32%; right: 10%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>45</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************46**************************** -->
            <?php if ($estado_espacio_46 == "OCUPADO"){?>

            <div class="col" id="46" style="position:absolute; top: 54%; right: 25%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_46 == "DISPONIBLE"){?>

            <div class="col" id="46" style="position:absolute; top: 54%; right: 25%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>46</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_46 == "LIBRE"){?>

            <div class="col" id="45" style="position:absolute; top: 54%; right: 25%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>46</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************47**************************** -->

            <?php if ($estado_espacio_47 == "OCUPADO"){?>

            <div class="col" id="47" style="position:absolute; top: 54%; right: 20%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_47 == "DISPONIBLE"){?>

            <div class="col" id="47" style="position:absolute; top: 54%; right: 20%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>47</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_47 == "LIBRE"){?>

            <div class="col" id="47" style="position:absolute; top: 54%; right: 20%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>47</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
            <!-- ******************************48**************************** -->

            <?php if ($estado_espacio_48 == "OCUPADO"){?>

            <div class="col" id="48" style="position:absolute; top: 54%; right: -5%">
                <center class="">
                    <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                        <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                    </button>                                            
                </center>                          
            </div> 
            <?php
            }if ($estado_espacio_48 == "DISPONIBLE"){?>

            <div class="col" id="48" style="position:absolute; top: 54%; right: -5%">
                <center class="">
                    <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>48</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }if ($estado_espacio_48 == "LIBRE"){?>

            <div class="col" id="48" style="position:absolute; top: 54%; right: -5%">
                <center class="">
                    <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                    <h3>48</h3>
                    </button>                                            
                </center>                          
            </div>

            <?php
            }
            ?>
        <!-- ******************************49**************************** -->

        <?php if ($estado_espacio_49 == "OCUPADO"){?>

        <div class="col" id="49" style="position:absolute; top: 54%; right: -10%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_49 == "DISPONIBLE"){?>

        <div class="col" id="49" style="position:absolute; top: 54%; right: -10%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>49</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_49 == "LIBRE"){?>

        <div class="col" id="49" style="position:absolute; top: 54%; right: -10%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>49</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************50**************************** -->
        <?php if ($estado_espacio_50 == "OCUPADO"){?>

        <div class="col" id="50" style="position:absolute; top: 54%; right: -15%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_50 == "DISPONIBLE"){?>

        <div class="col" id="50" style="position:absolute; top: 54%; right: -15%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>50</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_50 == "LIBRE"){?>

        <div class="col" id="50" style="position:absolute; top: 54%; right: -15%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>50</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>

        <!-- ******************************51**************************** -->
        <?php if ($estado_espacio_51 == "OCUPADO"){?>

        <div class="col" id="51" style="position:absolute; top: 54%; right: -20%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_51 == "DISPONIBLE"){?>

        <div class="col" id="51" style="position:absolute; top: 54%; right: -20%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>51</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_51 == "LIBRE"){?>

        <div class="col" id="51" style="position:absolute; top: 54%; right: -20%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>51</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************52**************************** -->
        <?php if ($estado_espacio_52 == "OCUPADO"){?>

        <div class="col" id="52" style="position:absolute; top: 54%; right: -25%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_52 == "DISPONIBLE"){?>

        <div class="col" id="52" style="position:absolute; top: 54%; right: -25%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>52</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_52 == "LIBRE"){?>

        <div class="col" id="52" style="position:absolute; top: 54%; right: -25%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>52</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************53**************************** -->
        <?php if ($estado_espacio_53 == "OCUPADO"){?>

        <div class="col" id="53" style="position:absolute; top: 66%; right: -25%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_53 == "DISPONIBLE"){?>

        <div class="col" id="53" style="position:absolute; top: 66%; right: -25%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>53</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_53 == "LIBRE"){?>

        <div class="col" id="53" style="position:absolute; top: 66%; right: -25%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>53</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************54**************************** -->
        <?php if ($estado_espacio_54 == "OCUPADO"){?>

        <div class="col" id="54" style="position:absolute; top: 66%; right: -20%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_54 == "DISPONIBLE"){?>

        <div class="col" id="54" style="position:absolute; top: 66%; right: -20%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>54</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_54 == "LIBRE"){?>

        <div class="col" id="54" style="position:absolute; top: 66%; right: -20%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>54</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************55**************************** -->
        <?php if ($estado_espacio_55 == "OCUPADO"){?>

        <div class="col" id="54" style="position:absolute; top: 66%; right: -15%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_55 == "DISPONIBLE"){?>

        <div class="col" id="55" style="position:absolute; top: 66%; right: -15%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>55</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_55 == "LIBRE"){?>

        <div class="col" id="55" style="position:absolute; top: 66%; right: -15%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>55</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************56**************************** -->
        <?php if ($estado_espacio_56 == "OCUPADO"){?>

        <div class="col" id="56" style="position:absolute; top: 66%; right: -10%">
            <center class="">
                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_56 == "DISPONIBLE"){?>

        <div class="col" id="56" style="position:absolute; top: 66%; right: -10%">
            <center class="">
                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>56</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_56 == "LIBRE"){?>

        <div class="col" id="56" style="position:absolute; top: 66%; right: -10%">
            <center class="">
                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>56</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************57**************************** -->
        <?php if ($estado_espacio_57 == "OCUPADO"){?>

        <div class="col" id="57" style="position:absolute; top: 66%; right: -5%">
            <center class="">
                <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_57 == "DISPONIBLE"){?>

        <div class="col" id="57" style="position:absolute; top: 66%; right: -5%">
            <center class="">
                <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>57</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_57 == "LIBRE"){?>

        <div class="col" id="57" style="position:absolute; top: 66%; right: -5%">
            <center class="">
                <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>57</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************58**************************** -->
        <?php if ($estado_espacio_58 == "OCUPADO"){?>

        <div class="col" id="58" style="position:absolute; top: 66%; right: 15%">
            <center class="">
                <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_58 == "DISPONIBLE"){?>

        <div class="col" id="58" style="position:absolute; top: 66%; right: 15%">
            <center class="">
                <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>58</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_58 == "LIBRE"){?>

        <div class="col" id="58" style="position:absolute; top: 66%; right: 15%">
            <center class="">
                <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>58</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************59**************************** -->

        <?php if ($estado_espacio_59 == "OCUPADO"){?>

        <div class="col" id="58" style="position:absolute; top: 66%; right: 20%">
            <center class="">
                <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_59 == "DISPONIBLE"){?>

        <div class="col" id="59" style="position:absolute; top: 66%; right: 20%">
            <center class="">
                <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>59</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_59 == "LIBRE"){?>

        <div class="col" id="59" style="position:absolute; top: 66%; right: 20%">
            <center class="">
                <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>59</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************60**************************** -->

        <?php if ($estado_espacio_60 == "OCUPADO"){?>

        <div class="col" id="60" style="position:absolute; top: 66%; right: 25%">
            <center class="">
                <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_60 == "DISPONIBLE"){?>

        <div class="col" id="60" style="position:absolute; top: 66%; right: 25%">
            <center class="">
                <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>60</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_60 == "LIBRE"){?>

        <div class="col" id="60" style="position:absolute; top: 66%; right: 25%">
            <center class="">
                <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>60</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>
        <!-- ******************************61**************************** -->
        <?php if ($estado_espacio_61 == "OCUPADO"){?>

        <div class="col" id="61" style="position:absolute; top: 66%; right: 30%">
            <center class="">
                <button class="btn btn-info"  id="" style="position: absolute; width: 35px; height: 55px" >
                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="29px" alt="">                            
                </button>                                            
            </center>                          
        </div> 
        <?php
        }if ($estado_espacio_61 == "DISPONIBLE"){?>

        <div class="col" id="61" style="position:absolute; top: 66%; right: 30%">
            <center class="">
                <button class="btn btn-warning"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>61</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }if ($estado_espacio_61 == "LIBRE"){?>

        <div class="col" id="61" style="position:absolute; top: 66%; right: 30%">
            <center class="">
                <button class="btn btn-success"  id="" style="position: absolute; width: 35px; height: 55px" >                                  
                <h3>61</h3>
                </button>                                            
            </center>                          
        </div>

        <?php
        }
        ?>


<!--


                      <div class="col" style="position:absolute; top: 45%; right: 20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>10</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right: 25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>11</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right: 30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>12</h4>                              
                              </button>                                            
                          </center>
                      </div>

                      <!-- IZQUIERDA -->
                -->           <!--     
                      <div class="col" style="position:absolute; top: 20%; right: 45%">
                          <center class="">
                              <button class="btn btn-success" style="width:60px; height: 35px" >
                                  <h3>1</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 70%; right: 45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>                          
                      </div>
                      <div class="col" style="position:absolute; top: 80%; right: 45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>                          
                      </div>
                -->
                                            <div id="respuesta">
                                    
                                            </div>

               </div>

  



          </div>
            
              <!-- FIN TARJETA-->                
            <!-- /.content-wrapper -->
              <?php  include('../layout/admin/footer.php');?>

        </div>
              <?php  include('../layout/admin/footer_link.php');?>
      </body>
  </html>      

  
  <script class="">
    $('#pri_espacio1').click(function(){
      var id_parqueo1 = "1";
      
        var url = 'controller_parqueo1.php';
        $.get(url, {id_parqueo1:id_parqueo1}, function(datos){
        $('#respuesta').html(datos);
        });
   
    });
    
  </script>
  