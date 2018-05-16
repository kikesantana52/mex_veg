$(".openUpdModal").on("click",function() {
  var idComment = $(this).data("idcomment")
  $("#idToUpdate").val(idComment)
  $.ajax({
    url: '/cgi-bin/find_argumentos.cgi',
    type: 'POST',
    data: {id: $("#idToUpdate").val()}
  })
  .done(function(e) {
    e = e.replace(/'/g, '"')
    console.log(e);
    var hash = JSON.parse(e)
    console.log(hash.id);
    $("#titleToUpdate").val(hash.titulo);
    $("#contentToUpdate").val(hash.contenido);
    $("#iconToUpdate").val(hash.icono);
    
  })
  .fail(function(err) {
    console.log(err);
    alert(err);
  });


  // TODO:AGREGAR LOGICA PARA CARGAR VALORES POR ACTUALIZAR
});
