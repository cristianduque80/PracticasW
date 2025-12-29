<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Prueba Ajax</title>
</head>
<body>
<div class="container text-center">
  <h1>PLATAFORMA DE CONTROL</h1>
  <div class="row mb-3">
    <div class="col">
      <button type="submit" class="btn btn-primary" onclick="saludame(1)">Cliente</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary" onclick="saludame(2)">Empleados</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary" onclick="saludame(3)">Administradores</button>
    </div>
  </div>
  <h1>LISTA DETALLADA</h1>
  <input class="form-control mb-3" type="text" name="in_search" id="id_search" placeholder="Nombre" onkeypress="search_name()">
  <div id="mostrar_mensaje"></div>
</div>


<!----------------Codigo AJAX---------------->
<script>
//Funciones de botones
	function saludame(button){
    var parametro={
      "button_select":button,
      "action": "1",
    };
    
    $.ajax({
      data: parametro,
      url: 'codigoPHP.php',
      type: 'POST',
      
      beforesend: function()
      {
        $('#mostrar_mensaje').html("Mensaje antes de Enviar");
      },

      success: function(mensaje)
      {
        $('#mostrar_mensaje').html(mensaje);
      }
    });
  }

//Funciones de busqueda
  function search_name(){
    search = document.getElementById('id_search').value //Captura lo que esta escrito en el input #id_search
    var parametro={
      "my_search":search,
      "action": "2"
    };
    
    $.ajax({
      data: parametro,
      url: 'codigoPHP.php',
      type: 'POST',
      
      beforesend: function()
      {
        $('#mostrar_mensaje').html("Mensaje antes de Enviar");
      },

      success: function(mensaje)
      {
        $('#mostrar_mensaje').html(mensaje);
      }
    });
  }

</script>
</body>
<style>
  #mostrar_mensaje{
    width: 50%;
    margin:auto;
  }

  #id_search{
    margin: auto;
    width: 50%;
  }
</style>
</html>