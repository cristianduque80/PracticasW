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
      <button type="submit" class="btn btn-primary" onclick="user_type(1)">Cliente</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary" onclick="user_type(2)" >Empleados</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary" onclick="user_type(3)">Administradores</button>
    </div>
  </div>
  <h1>LISTA DETALLADA</h1>
  <input class="form-control mb-3" type="text" name="in_search" id="id_search" placeholder="Nombre" onkeypress="search()">
  <div id="list"></div>
</div>

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
<!----------------Codigo AJAX---------------->
<script>
  function user_type(user){
    var list={
      "type":user,
      "function_type":"1",
    };

    $.ajax({
      data: list,
      url: 'codigoPHP.php',
      type: 'POST',

      beforesend: function(){
        $('#list').html("Mensaje antes de Enviar");
      },

      success: function(mensaje){
        $('#list').html(mensaje);
      }
    });
  }

function search(){
    inf=document.getElementById('id_search').value
    var list={
      "my_search":inf,
      "function_type":"2",
    };

    $.ajax({
      data: list,
      url: 'codigoPHP.php',
      type: 'POST',

      beforesend: function(){
        $('#list').html("Mensaje antes de Enviar");
      },

      success: function(mensaje){
        $('#list').html(mensaje);
      }
    });
  }
</script>
</html>