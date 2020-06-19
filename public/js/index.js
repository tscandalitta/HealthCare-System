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
        let url = "/pacientes/" + dni;
        $.get(url, function(data) {
            mostrarInfoPaciente(data[0]);
        });
    }

    function mostrarInfoPaciente(paciente) {

        $("#form-edit").attr("action","/pacientes/" + paciente["id"] + "/hc");
        $("#btn-modificar-datos").attr("href","/pacientes/" + paciente["id"]  + "/edit");
        $("#field-nombre").text(paciente["apellido"] + ", " + paciente["nombre"]);
        $("#field-id").text(paciente["id"]);
        $("#field-dni").text(paciente["dni"]);
        $("#field-direccion").text(paciente["direccion"]);
        $("#field-telefono").text(paciente["telefono"]);
        $("#field-historiaClinica").text(paciente["historia_clinica"]);
        $("#field-obraSocial").text(paciente["obra_social_id"]);
    }
});