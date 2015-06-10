$(function(){
  $.ajax({
    type: "POST",
    url: "phpFunctions/inventario.php",
    data: {loged: true}
  }).done(function(data){
    $("#lista").html(data);
    $("#tabla_Productos").dynatable();
    $("#btMod").click(prodModificar);
    $("#btDel").click(prodEliminar);
  });
});

function prodModificar(){
  alert("Modificar");
}

function prodEliminar(){
  alert("Eliminar");
}