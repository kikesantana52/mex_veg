$("#select_estado").change(function() {
  // alert($(this).val());
  var id = $(this).val();
  $.ajax({
    url: '/cgi-bin/find_municipios.cgi',
    type: 'POST',
    data: {id:id}
  })
  .done(function(e) {
    console.log(e);
    var hash = JSON.parse(e)
    console.log(hash);
      $("#select_municipio").empty();
    $.each(hash,function(index, obj) {

      $("#select_municipio").append('<option value=\"' + obj.id + '\">' +obj.municipio+"</option>")
    });
  })
  .fail(function(err) {
    console.log(err);
    alert(err);
  });
});

$(function () {
  $('[data-toggle="popover"]').popover()
})
