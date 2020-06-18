$(document).ready(function () {
    $('#tabla-pacientes tbody tr').click(function() {
        var dniPaciente = $(this).find("#td-dni").html();    
        
        buscarPaciente(dniPaciente);

    });
    $('#tabla-pacientes').DataTable( {
        "pageLength": 10,
        "dom": '<f>rt<"row justify-content-center"p>'
    } );

    function buscarPaciente(dni) {
        var url = "/pacientes/" + dni;
        $.get(url, function(data) {
            mostrarInfoPaciente(data);
        });
    }

    function mostrarInfoPaciente(datosJson) {
        var paciente = datosJson[0];
        $("#field-nombre").text(paciente["apellido"] + ", " + paciente["nombre"]);
        $("#field-id").text(paciente["id"]);
        $("#field-dni").text(paciente["dni"]);
        $("#field-direccion").text(paciente["direccion"]);
        $("#field-telefono").text(paciente["telefono"]);
        $("#field-historiaClinica").text(paciente["historia_clinica"]);
    }
});