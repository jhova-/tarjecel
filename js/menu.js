$(function(){
  $("a.navi").click(function(){
    switchTo($(this).attr('id'));
  });

  $("#btLogout").click(Logout);
});

function Logout(){
  $.ajax({
    type: "POST",
    url: "phpFunctions/logout.php",
    data: {loged: true}
  }).done(function(){
    location.replace(".");
  });
}

function switchTo(pagina){
  $.ajax({
    type: "POST",
    url: "menu.php",
    data: {loged: true, pagina: pagina}
  }).done(function(data){
    console.log(data);
    location.reload();
  });
}