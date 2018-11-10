$(function() {
  $("#Departamento").change(function(e) {
    e.preventDefault();
    $("#Departamento").each(function() {
      IdDepartamento = $(this).val();

      $("#Distrito")
        .find("option")
        .remove()
        .end()
        .append('<option value="0">Seleccione</option>');
      $.post(
        "php/getProvincias.php",
        {
          IdDepartamento: IdDepartamento
        },
        function(data) {
          $("#Provincia").html(data);
        }
      );
    });
  });
});

$(function() {
  $("#Provincia").change(function(e) {
    e.preventDefault();
    $("#Provincia").each(function() {
      IdProvincia = $(this).val();
      $.post(
        "php/getDistritos.php",
        {
          IdProvincia: IdProvincia
        },
        function(data) {
          $("#Distrito").html(data);
        }
      );
    });
  });
});
