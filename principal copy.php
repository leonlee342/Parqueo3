<!-- Esto es el panel principal del Administrador -->
<?php
include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');
?>
          
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <?php  include('layout/admin/head.php');?>
    </head>
  
      <body class="hold-transition sidebar-mini">
 
        <div class="wrapper">
          <!-- MESta parte esta en menu.php-->
          <?php  include('layout/admin/menu.php');?>
              
            <!--    <div class="content-wrapper">   -->

            <!-- INICIO TARJETA-->
          <div class="content-wrapper"  style="background-color: aqua">
        

              <div  class="container" style="position:relative; background-color: aqua;
               width: 1000px;height: 500px; border-radius: 20px;
               background-image: url('public/imagenes/parqueo2_a.png');
               background-repeat:no-repeat; 
               background-size: 74vw 76vh "> 

               <?php
                $query_mapeos = $pdo->prepare("SELECT * FROM tb_mapeos_estatico WHERE estado = '1'");
                $query_mapeos->execute();
                $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                foreach ($mapeos as $mapeo){
                    $id_map = $mapeo ['id_map'];
                    $nro_espacio = $mapeo['nro_espacio'];
                    $estado_espacio = $mapeo['estado_espacio'];
                }
               if ($estado_espacio == "LIBRE" && $id_map == "1"){?>

                    <!-- SUPERIOR -->
                        <!-- ******************************1***************************** -->

                      <div class="col" id="1" style="position:absolute; top: 0%; right:-35%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>1</h3>                                                                
                              </button>                                            
                          </center>                          
                      </div>
                    <?php } if ($estado_espacio == "OCUPADO"){?>

                        <div class="col" id="" style="position:absolute; top: 0%; right:-35%">
                            <center class="">
                                <button class="btn btn-info"  id="pri_espacio1" style="position: absolute; width: 35px; height: 60px" >
                                    <img src="<?php echo $URL;?>/public/imagenes/auto1.png" width="30px" alt="">                             
                                </button>                                            
                            </center>                          
                        </div> 
                      <?php
                    }if ($estado_espacio == "DISPONIBLE"){?>

                        <div class="col" id="" style="position:absolute; top: 0%; right:-35%">
                            <center class="">
                                <button class="btn btn-warning"  id="pri_espacio1" style="position: absolute; width: 35px; height: 60px" >                                  
                                </button>                                            
                            </center>                          
                        </div>

                    <?php
                    }if ($estado_espacio == "LIBRE"){?>

                        <div class="col" id="" style="position:absolute; top: 0%; right:-35%">
                            <center class="">
                                <button class="btn btn-success"  id="pri_espacio1" style="position: absolute; width: 35px; height: 60px" >                                  
                                <h3>1</h3>
                                </button>                                            
                            </center>                          
                        </div>
                    
                    <?php
                    }
                    ?>


                      <!-- ******************************2***************************** -->
                      <div class="col" style="position:absolute; top: 0%; right:-30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>

                      <div class="col" style="position:absolute; top: 0%; right:-25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right:-20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right:-15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>5</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right:-10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>6</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right:-5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>7</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right:-0%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>8</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>9</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>10</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>11</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>12</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>13</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>14</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 35%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>15</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 0%; right: 40%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>16</h4>                              
                              </button>                                            
                          </center>
                      </div>

                       <!-- DERECHA -->
                       
                      <div class="col" style="position:absolute; top: 20%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width:60px; height: 35px" >
                                  <h3>1</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 40%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width:60px ; height: 35px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 50%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width:60px ; height: 35px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 60%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>5</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 70%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>6</h3>                              
                              </button>                                            
                          </center>                          
                      </div>
                      <div class="col" style="position:absolute; top: 80%; right:-45%">
                          <center class="">
                              <button class="btn btn-success" style="width: 60px; height: 35px" >
                                  <h3>7</h3>                              
                              </button>                                            
                          </center>                          
                      </div>

                      <!-- INFERIOR -->
                      <div class="col" style="position:absolute; top: 85%; right:-35%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>1</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>5</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>6</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>7</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right:-0%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>8</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>9</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>10</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>11</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>12</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>13</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>14</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 35%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>15</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 85%; right: 40%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>16</h4>                              
                              </button>                                            
                          </center>
                      </div>

                  <!-- CENTRO/SUPERIOR -->

                      <div class="col" style="position:absolute; top: 30%; right:-25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>1</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>5</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right:-0%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>6</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>7</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>8</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>9</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>10</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>11</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 30%; right: 30%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>12</h4>                              
                              </button>                                            
                          </center>
                      </div>

                   <!-- CENTRO/INFERIOR -->

                   <div class="col" style="position:absolute; top: 45%; right:-25%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>1</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right:-20%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>2</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right:-15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>3</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right:-10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>4</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right:-5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>5</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right:-0%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>6</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right: 5%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h3>7</h3>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right: 10%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>8</h4>                              
                              </button>                                            
                          </center>
                      </div>
                      <div class="col" style="position:absolute; top: 45%; right: 15%">
                          <center class="">
                              <button class="btn btn-success" style="position: absolute; width: 35px; height: 60px" >
                                  <h4>9</h4>                              
                              </button>                                            
                          </center>
                      </div>
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

                                            <div id="respuesta">
                                    
                                            </div>

               </div>

  



          </div>

              <!-- FIN TARJETA-->                
            <!-- /.content-wrapper -->
              <?php  include('layout/admin/footer.php');?>

        </div>
              <?php  include('layout/admin/footer_link.php');?>
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
  