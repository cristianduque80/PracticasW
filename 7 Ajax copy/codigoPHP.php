<?php
    include ('conexion_on.php');
    $function_type=$_POST['function_type'];

    echo'
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telf</th>
            </tr>
    ';

////////////////////SELECCION DEL TIPO DE USUARIO//////////////////// 
if($function_type==1){
    $user=$_POST['type'];
    if($user==1){$table=$table_db1;} /// 1->clientes 
    if($user==2){$table=$table_db2;} /// 2->empleados
    if($user==3){$table=$table_db3;} /// 3->administradores
    $consulta = mysqli_query($conex,"SELECT * FROM $table");
    list_on($consulta);
}


//////////////////////////////BUSQUEDA//////////////////////////////
if($function_type==2){
    $user_search=$_POST['my_search'];
    $consulta=mysqli_query($conex,"SELECT * FROM $table_db1 WHERE nombre LIKE '%$user_search%' ");
    list_on($consulta);
}

    






    function list_on($consulta){
        while($data_consulta = mysqli_fetch_array($consulta)){
        echo'
            <tr>
                <td>'.$data_consulta['id'].'</td>
                <td>'.$data_consulta['nombre'].'</td>
                <td>'.$data_consulta['apellido'].'</td>
                <td>'.$data_consulta['telefono'].'</td>
            </tr>
        ';
        }
    }
    
    echo "</table>";



