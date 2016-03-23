<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                 
                 <?php 
               //   session_start();

                   $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'
                         ORDER BY  id_accion";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 


                if($valor['Nombre_accion']=='consultar escritorio') {
                  print('<li>');
                  print("<a class='' href='index.php'>");
                  print("<i class='icon_house_alt'></i>");
                  print("        <span>Escritorio</span>");
                  print("   </a>");
                  print("</li>");

                 }




                if($valor['Nombre_accion']=='consultar control de llamada') {

                  print('<li>');
                  print("<a class='' href='#' >");
                  print("<i class='icon_house_alt'></i>");
                  print("        <span>Control de Llamadas</span>");
                  print("   </a>");
                  print("</li>");

                 }

               }
                  ?>

                  <li class='sub-menu'>
                              <a href="javascript:;" class="">
                               <i class="icon_document_alt"></i>
                               <span>Inventario</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                           <ul class="sub">
                  
                  <?php 
                    $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 

            

              if($valor['Nombre_accion']=='consultar teck-stock') {
                  print("        <li><a class='' href='crud_tec-stock.php'>Teck-stock</a></li>");              

                  }            
                  
              if($valor['Nombre_accion']=='consultar transferencia') {

                  print ("       <li><a class='' href='crud_transferencia.php'>Transferencia</a></li>");
                  
                    }
      
            

                }
                         ?>

                             </ul>
                          </li>       
                         

				                  <li class='sub-menu'>
                              <a href="javascript:;" class="">
                               <i class="icon_document_alt"></i>
                               <span>Servicio</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                           <ul class="sub">
                  
                  <?php 
                    $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 

            

              if($valor['Nombre_accion']=='consultar equipos') {
                  print("        <li><a class='' href='crud_equipo.php'>Equipos</a></li>");              

                  }            
                  
              if($valor['Nombre_accion']=='consultar repuestos') {

                  print ("       <li><a class='' href='crud_repuesto.php'>Repuestos</a></li>");
                  
                    }
              if($valor['Nombre_accion']=='consultar perifericos') {

                  print("        <li><a class='' href='crud_periferico.php'>Perifericos</a></li>");                          
                  
                }
             if($valor['Nombre_accion']=='consultar lineas') {

                  print("        <li><a class='' href='crud_linea.php'>Lineas</a></li>");
                  
                }
               if($valor['Nombre_accion']=='consultar marcas') {

                  print("        <li><a class='' href='crud_marca.php'>Marcas</a></li>");
                  }

                }
                         ?>

                             </ul>
                          </li>       
                         
                          <li class="sub-menu">
                             <a href="javascript:;" class="">
                               <i class="icon_desktop"></i>
                               <span>Administracion</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                           </a>
                             <ul class="sub">
                  
                  <?php 

                    $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 


                                  if($valor['Nombre_accion']=='consultar clientes') {

                  print("        <li><a class='' href='crud_cliente.php'>Clientes</a></li>");
                  }

                                  if($valor['Nombre_accion']=='consultar empleados') {

                  print("        <li><a class='' href='crud_empleado.php'>Empleados</a></li>");
                  }

                                  if($valor['Nombre_accion']=='consultar cargos') {

                  print("        <li><a class='' href='crud_cargo.php'>Cargos</a></li>");
                  }

                                  if($valor['Nombre_accion']=='consultar empleados_cargos') {

                  print("        <li><a class='' href='crud_empleado_cargo.php'>Empleados por Cargos</a></li>");
                  }

                  }
                       ?>

                         </ul>
                    </li>      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Reportes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                <?php  
                  $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 


                                if($valor['Nombre_accion']=='consultar reportes generales') {

                  print("        <li><a class='' href='reportes_generales.php'>Reportes Generales</a></li>");
                  }

                               if($valor['Nombre_accion']=='consultar reportes graficos') {

                  print("        <li><a class='' href='reportes_graficos.php'>Reportes Graficos</a></li>");
                  }

                }
                    ?>
                         </ul>
                   </li>
                  
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Seguridad</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
             
                 <?php 

                            $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 

                 //seguridad
                                 if($valor['Nombre_accion']=='consultar usuario') {

                  print("        <li><a class='' href='crud_usuario.php'>Usuarios</a></li>");
             }
                           
                             if($valor['Nombre_accion']=='consultar accion roles') {

                  print("        <li><a class='' href='crud_accion_rol.php'>Acciones y Roles</a></li>");
             
                }
                             if($valor['Nombre_accion']=='consultar roles') {

                 print("        <li><a class='' href='crud_rol.php'>Roles</a></li>");
             
                }
                             if($valor['Nombre_accion']=='consultar sessiones') {

                  print("        <li><a class='' href='crud_session.php'>Sessiones</a></li>");
              }

            }
                 ?>
                      </ul>
                   </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Auditoria</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">           

              <?php              
  $sql="SELECT  accion.Nombre_accion
                         FROM usuario,rol,accion_rol,accion
                         WHERE usuario.fk_rol=rol.id_rol and accion_rol.fk_accion=accion.id_accion and accion_rol.fk_rol=rol.id_rol and username_usuario='".$_SESSION['usuario']."'";
                    $base_db->ejecutar($sql);
                   
              
               while($valor=$base_db->obtener_fila($base_db->getCorrida(),0)) { 

               //auditoria          
                                 if($valor['Nombre_accion']=='consultar auditoria equipo') {

                  print("        <li><a class='' href='auditoria_equipos.php'>Equipos</a></li>");
                 }

                                 if($valor['Nombre_accion']=='consultar auditoria repuestos') {

                  print("        <li><a class='' href='auditoria_repuestos.php'><span>Repuestos</span></a></li>");
                 }
                                 if($valor['Nombre_accion']=='consultar auditoria perifericos') {

                  print("        <li><a class='' href='auditoria_perifericos.php'>Perifericos</a></li>");
                 }
                                 if($valor['Nombre_accion']=='consultar auditoria clientes') {

                  print("        <li><a class='' href='auditoria_clientes.php'>Clientes</a></li>");
                 }
                                 if($valor['Nombre_accion']=='consultar auditoria usuarios') {

                  print("        <li><a class='' href='auditoria_usuarios.php'>Usuarios</a></li>");

                }

                   
                    }// end while
                  ?>
                                   
                      </ul>
                   </li>

                   

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      